<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Merchant;
use App\Models\TrxPayment;
use App\Models\Wallet;
use App\Models\RegisterCompany;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Services\DashboardService;

class DashboardController extends Controller
{
    private $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function merchant(){
        $merchants = Merchant::where('company_id', Auth::user()->company_id)->get();
        $transactions = TrxPayment::where('company_id', Auth::user()->company_id)
                        ->orderBy('id', 'desc')
                        ->limit(8)
                        ->get();
        return view('dashboard.merchant', compact('merchants', 'transactions'));
    }

    public function getDetailWallet($merchantId)
    {
        $data  = $this->dashboardService->getSummaryMerchant($merchantId);
        return response()->json($data);
    }

    public function admin(){
        $companies = RegisterCompany::get();
        $merchants = Merchant::where('company_id', Auth::user()->company_id)->get();
        $transactions = TrxPayment::orderBy('id', 'desc')
            ->limit(5)
            ->get();
        return view('dashboard.admin', compact('merchants', 'transactions', 'companies'));
    }

    public function getSummaryData(Request $request){
        $data = $this->dashboardService->getSummaryData($request->all());
        return response()->json($data);
    }
}
