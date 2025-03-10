<?php

namespace App\Services;

use App\Models\DetailCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyService{


    public function personal_data(Request $request)
    {
        $data = DetailCompany::where('company_id', Auth::user()->company_id)->first();
        if(!$data){
            $data = new DetailCompany();
        }
        $data->client_name = $request->client_name;
        $data->client_email = $request->client_email;
        $data->client_no_ktp = $request->client_no_ktp;
        $data->client_phone_number = $request->client_phone_number;
        $data->client_address = $request->client_address;
        $data->client_province_id = $request->client_province_id;
        $data->client_city_id = $request->client_city_id;
        $data->client_kecamatan_id = $request->client_kecamatan_id;
        $data->client_kel_desa_id = $request->client_kel_desa_id;
        $data->client_rt_rw = $request->client_rt_rw;
        $data->client_postcode = $request->client_postcode;
        $data->client_no_kk = $request->client_no_kk;
        $data->client_npwp = $request->client_npwp;
        $data->company_id = Auth::user()->company_id;
        $data->save();
    }

    public function company_data(Request $request)
    {
        $data = DetailCompany::where('company_id', Auth::user()->company_id)->first();
        if(!$data){
            $data = new DetailCompany();
        }
        $data->merchant_name = $request->merchant_name;
        $data->mechant_amount = $request->merchant_amount;
        $data->merchant_address = $request->merchant_address;
        $data->merchant_province_id = $request->merchant_province_id;
        $data->merchant_city_id = $request->merchant_city_id;
        $data->merchant_kecamatan_id = $request->merchant_kecamatan_id;
        $data->merchant_kel_desa_id = $request->merchant_kel_desa_id;
        $data->merchant_rt_rw  = $request->merchant_rt_rw;
        $data->merchant_postcode = $request->merchant_postcode;
        $data->bank_name = $request->bank_name;
        $data->account_number = $request->account_number;
        $data->account_name = $request->account_name;
        $data->company_id = Auth::user()->company_id;
        $data->save();
    }
}
