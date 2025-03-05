<?php

namespace App\Services;

use App\Models\MerchantBank;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantBankService
{
    public function save(Request $request)
    {
        DB::beginTransaction();
        $data = new MerchantBank();
        $data->bank_id = $request->bank_id;
        $data->merchant_id = $request->merchant_id;
        $data->bank_name = $request->bank_name;
        $data->account_name =$request->account_name;
        $data->account_number = $request->account_number;
        $data->company_id = Auth::user()->company_id;
        $data->save();
        DB::commit();
    }

    public function updated(Request $request){
        DB::beginTransaction();
        $data = MerchantBank::find($request->id);
        $data->bank_id = $request->bank_id;
        $data->merchant_id = $request->merchant_id;
        $data->bank_name = $request->bank_name;
        $data->account_name =$request->account_name;
        $data->account_number = $request->account_number;
        $data->company_id = Auth::user()->company_id;
        $data->save();
        DB::commit();
    }
}
