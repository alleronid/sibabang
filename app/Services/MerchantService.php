<?php

namespace App\Services;

use App\Models\Merchant;
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
    }

    public function edit(Request $request){

    }
}
