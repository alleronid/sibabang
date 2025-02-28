<?php

namespace App\Services;

use App\Models\Merchant;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantService{

    private $utilityService;

    public function __construct(UtilityService $utilityService)
    {
        $this->utilityService = $utilityService;
    }

    public function save(Request $request)
    {
        $data  = new Merchant();
        $data->company_id = Auth::user()->company_id;
        $data->merchant_name = $request->merchant_name;
        $data->status = 'PENDING';
        $data->token = $this->utilityService->token();
        $data->api_key_sb = $this->utilityService->generateKey('api_key', 'SB');
        $data->cb_key_sb = $this->utilityService->generateKey('cb_key', 'SB');
        $data->save();

        $wallet = new Wallet();
        $wallet->merchant_name = $data->merchant_name;
        $wallet->company_id = $data->company_id;
        $wallet->merchant_id = $data->merchant_id;
        $wallet->save();
    }

    public function edit(Request $request){
        $data = Merchant::where('merchant_id', $request->merchant_id)->first();
        $data->merchant_name = $request->merchant_name;
        $data->status = $request->status;
        $data->save();

        $wallet = Wallet::where('merchant_id', $data->merchant_id)->first();
        $wallet->merchant_name = $data->merchant_name;
        $wallet->save();
    }
}
