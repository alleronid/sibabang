<?php

namespace App\Services;

use App\Models\Merchant;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MerchantService{

    private $utilityService;

    public function __construct(UtilityService $utilityService)
    {
        $this->utilityService = $utilityService;
    }

    public function find($id)
    {
        $data = Merchant::with(['company'])->where(['merchant_id' => $id])->first();
        return $data;
    }

    public function all($request = array())
    {
        $data = Merchant::with(['company']);
        if($request){
            $data->where($request);
        }
        return $data->get();
    }

    public function allByCompany($company_id = null, $request = array())
    {
        $company_id = $company_id ?? Auth::user()->company_id;

        $data = Merchant::with(['company'])->where('company_id', $company_id);

        if($request){
            $data->where($request);
        }
        return $data->get();
    }

    public function save(Request $request)
    {
        DB::beginTransaction();
        $data  = new Merchant();
        $data->company_id = Auth::user()->company_id;
        $data->merchant_name = $request->merchant_name;
        $data->address = $request->address;
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

        DB::commit();
    }

    public function edit(Request $request){
        DB::beginTransaction();
        $data = Merchant::where('merchant_id', $request->merchant_id)->first();
        $data->merchant_name = $request->merchant_name;
        $data->status = $request->status ?? $data->status;
        $data->address = $request->address;
        $data->save();

        $wallet = Wallet::where('merchant_id', $data->merchant_id)->first();
        $wallet->merchant_name = $data->merchant_name;
        $wallet->save();
        DB::commit();
    }
}
