<?php

namespace App\Services;

use App\Models\MerchantBank;
use App\Models\Merchant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantBankService
{
    public function save(Request $request)
    {
        $merchant = Merchant::with('company')->where('merchant_id', $request->merchant_id)->firstOrFail();

        DB::beginTransaction();
        $data = new MerchantBank();
        $data->bank_id = $request->bank_id;
        $data->merchant_id = $request->merchant_id;
        $data->bank_name = $request->bank_name;
        $data->account_name =$request->account_name;
        $data->account_number = $request->account_number;
        $data->status = 'PENDING';
        $data->is_active = 1; // active
        $data->company_id = $merchant->company->company_id;
        $data->save();
        DB::commit();
    }

    public function updated(Request $request){
        $merchant = Merchant::with('company')->where('merchant_id', $request->merchant_id)->firstOrFail();

        DB::beginTransaction();
        $data = MerchantBank::find($request->id);
        $data->bank_id = $request->bank_id;
        $data->merchant_id = $request->merchant_id;
        $data->bank_name = $request->bank_name;
        $data->account_name =$request->account_name;
        $data->account_number = $request->account_number;
        $data->status = (!Auth::user()->isAdmin()) ? 'PENDING' : $request->status;
        $data->is_active = $request->is_active;
        $data->company_id = $merchant->company->company_id;
        $data->save();

        DB::commit();
    }
}
