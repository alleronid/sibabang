<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use App\Models\MerchantBank;
use App\Models\TrxDisbursement;
use App\Services\DisbursementService;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{

    private $disbursementService;

    public function __construct(DisbursementService $disbursementService)
    {
        $this->disbursementService = $disbursementService;
    }

    public function index()
    {
        $data = Wallet::where('company_id', Auth::user()->company_id)->get();
        return view('wallets.index', compact('data'));
    }

    public function listDisbursement(){
        $data = TrxDisbursement::with(['bank'])->where('company_id', Auth::user()->company_id)->get();
        return view('wallets.list-disbursement', compact('data'));
    }

    public function createDisbursement($idHash){
        $merchant_id = base64_decode($idHash);
        $merchant = Merchant::where('merchant_id', $merchant_id)->first();
        $wallet = Wallet::where('merchant_id', $merchant_id)->first();
        $banks = MerchantBank::where('merchant_id', $merchant_id)->get();
        return view('wallets.disbursement', compact('banks','merchant', 'wallet'));
    }

    public function saveDisbursement(Request $request){
        try{
            $this->disbursementService->save($request);
            return redirect(route('wallet.index'));
        }catch (\Exception $e){
            DB::rollback();
            return redirect(route('wallet.disbursement', base64_encode($request->merchant_id)))->with('toast_error', 'Create Disbursement Failed');
        }
    }
}
