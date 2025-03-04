<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use App\Models\MerchantBank;

class WalletController extends Controller
{
    public function index()
    {
        $data = Wallet::where('company_id', Auth::user()->company_id)->get();
        return view('wallets.index', compact('data'));
    }

    public function createDisbursement($idHash){
        $merchant_id = base64_decode($idHash);
        $merchant = Merchant::where('merchant_id', $merchant_id)->first();
        $wallet = Wallet::where('merchant_id', $merchant_id)->first();
        $banks = MerchantBank::where('merchant_id', $merchant_id)->get();
        return view('wallets.disbursement', compact('banks','merchant', 'wallet'));
    }
}
