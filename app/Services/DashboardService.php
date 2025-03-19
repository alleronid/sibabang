<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TrxPayment;
use App\Models\RegisterCompany;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
use App\Models\Merchant;

class DashboardService{

    public function __construct()
    {
    }

    public function getSummaryData($params){
        $now = Carbon::now();

        // Current Month
        $currentMonthStart = $now->copy()->startOfMonth(); // First day of current month
        $currentMonthEnd = $now->copy()->endOfMonth();

        // Last Month
        $lastMonthStart = $now->copy()->subMonth()->startOfMonth(); // First day of last month
        $lastMonthEnd = $now->copy()->subMonth()->endOfMonth(); // Last day of last month

        // Last Week (Monday to Sunday)
        $lastWeekStart = $now->copy()->subWeek()->startOfWeek(); // Start of last week (Monday)
        $lastWeekEnd = $now->copy()->subWeek()->endOfWeek(); // End of last week (Sunday)

        // Current Week (Monday to Sunday)
        $currentWeekStart = $now->copy()->startOfWeek(); // Start of current week (Monday)
        $currentWeekEnd = $now->copy()->endOfWeek(); // End of current week (Sunday)

        $revenues = TrxPayment::query()
                ->selectRaw("
                    SUM(CASE WHEN status = 'PAID' THEN total_amount ELSE 0 END) AS total_revenue,
                    SUM(CASE WHEN status = 'PAID' and payed_at >= '$currentWeekStart' and payed_at <= '$currentWeekEnd' THEN total_amount ELSE 0 END) AS current_week_revenue,
                    SUM(CASE WHEN status = 'PAID' and payed_at >= '$lastWeekStart' and payed_at <= '$lastWeekEnd' THEN total_amount ELSE 0 END) AS last_week_revenue,
                    count(id) AS count_transactions,
                    count(CASE WHEN created_at >= '$currentWeekStart' and created_at <= '$currentWeekEnd' THEN id ELSE null END) AS current_week_transactions,
                    count(CASE WHEN created_at >= '$lastWeekStart' and created_at <= '$lastWeekEnd' THEN id ELSE null END) AS last_week_transactions,
                    COUNT(CASE WHEN status = 'PAID' THEN id ELSE NULL END) AS count_success_transactions,
                    count(CASE WHEN status = 'PAID' and created_at >= '$currentWeekStart' and created_at <= '$currentWeekEnd'THEN id ELSE 0 END) AS current_week_success_transactions,
                    count(CASE WHEN status = 'PAID' and created_at >= '$lastWeekStart' and created_at <= '$lastWeekEnd'THEN id ELSE 0 END) AS last_week_success_transactions,
                    COUNT(CASE WHEN status in ('EXPIRED', 'CANCEL', 'PAID') THEN id ELSE NULL END) AS count_all_transactions,
                    count(CASE WHEN status in ('EXPIRED', 'CANCEL', 'PAID') and created_at >= '$currentWeekStart' and created_at <= '$currentWeekEnd' THEN id ELSE 0 END) AS current_week_all_transactions,
                    count(CASE WHEN status in ('EXPIRED', 'CANCEL', 'PAID') and created_at >= '$lastWeekStart' and created_at <= '$lastWeekEnd' THEN id ELSE 0 END) AS last_week_all_transactions
                ")->first();

        $companies = RegisterCompany::query()
            ->selectRaw("
                COUNT(CASE WHEN status = 'APPROVED' THEN company_id ELSE NULL END) AS count_companies,
                COUNT(CASE WHEN status = 'APPROVED' and created_at BETWEEN ? AND ? THEN company_id ELSE NULL END) AS current_month_companies
                COUNT(CASE WHEN status = 'APPROVED' and created_at BETWEEN ? AND ? THEN company_id ELSE NULL END) AS last_month_companies
            ", [$currentMonthStart, $currentMonthEnd, $lastMonthStart, $lastMonthEnd])
            ->first();

        return [
            'total_revenue' => (float) $revenues->total_revenue ?? 0,
            'current_week_revenue' => (float) $revenues->current_week_revenue ?? 0,
            'last_week_revenue' => (float) $revenues->last_week_revenue ?? 0,
            'count_transactions' => (int) $revenues->count_transactions ?? 0,
            'current_week_transactions' => (int) $revenues->current_week_transactions ?? 0,
            'last_week_transactions' => (int) $revenues->last_week_transactions ?? 0,
            'count_success_transactions' => (int) $revenues->count_success_transactions ?? 0,
            'current_week_success_transactions' => (int) $revenues->current_week_success_transactions ?? 0,
            'last_week_success_transactions' => (int) $revenues->last_week_success_transactions ?? 0,
            'count_all_transactions' => (int) $revenues->count_all_transactions ?? 0,
            'current_week_all_transactions' => (int) $revenues->current_week_all_transactions ?? 0,
            'last_week_all_transactions' => (int) $revenues->last_week_all_transactions ?? 0,
            'count_companies' => (int) $companies->count_companies ?? 0,
            'current_month_companies' => (int) $companies->current_month_companies ?? 0,
            'last_month_companies' => (int) $companies->last_month_companies ?? 0
        ];
    }

    public function getSummaryMerchant($merchantId){
        $wallet = Wallet::where('merchant_id', $merchantId)->first();
        $thisMonth = DB::table('trx_payments')
                    ->where('merchant_id', $merchantId)
                    ->where('created_at', '>=', Carbon::now()->subMonth())
                    ->where('status', 'PAID')
                    ->sum('amount');

        $transactions = DB::table('trx_payments')
                    ->selectRaw("DATE_FORMAT(created_at, '%M') AS bulan, COUNT(id) AS total_trx, DATE_FORMAT(created_at, '%m') AS bulan_angka")
                    ->where('merchant_id', $merchantId)
                    ->where('status', 'PAID')
                    ->groupBy('bulan', 'bulan_angka')
                    ->orderBy('bulan_angka')
                    ->get();

        return [
            'wallet' => $wallet,
            'thisMonth' => $thisMonth,
            'transactions' => $transactions
        ];
    }

}
