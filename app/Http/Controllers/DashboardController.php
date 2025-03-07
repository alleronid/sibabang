<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Merchant;
use App\Models\TrxPayment;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function merchant(){
        $merchants = Merchant::where('company_id', Auth::user()->company_id)->get();
        $transactions = TrxPayment::where('company_id', Auth::user()->company_id)
                        ->orderBy('id', 'desc')
                        ->limit(5)
                        ->get();
        return view('dashboard.merchant', compact('merchants', 'transactions'));
    }

    public function getDetailWallet($merchantId)
    {
        $wallet = Wallet::where('merchant_id', $merchantId)->first();
        $thisMonth = DB::table('trx_payments')
        ->where('company_id', Auth::user()->company_id)
        ->where('created_at', '>=', Carbon::now()->subMonth())
        ->where('status', 'PAID')
        ->sum('amount');
        return response()->json([
            'wallet' => $wallet,
            'thisMonth' => $thisMonth
        ]);
    }

    public function admin(){
        return view('dashboard.admin');
    }
}
