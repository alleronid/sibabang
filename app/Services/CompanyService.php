<?php

namespace App\Services;

use App\Models\DetailCompany;
use App\Models\RegisterCompany;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        if(empty($data)){
            $data = new DetailCompany();
        }
        $data->merchant_name = $request->merchant_name;
        $data->merchant_amount = $request->merchant_amount;
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

    public function company_file(Request $request)
    {
        $data = DetailCompany::where('company_id', Auth::user()->company_id)->first();
        if(empty($data)){
            $data = new DetailCompany();
        }
        $data->file_ktp = $request->hasFile('file_ktp') ? $request->file('file_ktp')->store('company/file_ktp', 'public') : '';
        $data->file_rekening = $request->hasFile('file_rekening') ? $request->file('file_rekening')->store('company/file_rekening', 'public') : '';
        $data->file_tempat_usaha = $request->hasFile('file_tempat_usaha') ? $request->file('file_tempat_usaha')->store('company/file_tempat_usaha', 'public') : '';
        $data->file_npwp = $request->hasFile('file_npwp') ? $request->file('file_npwp')->store('company/file_npwp', 'public') : '';
        $data->file_siup = $request->hasFile('file_siup') ? $request->file('file_siup')->store('company/file_siup', 'public') : '';
        $data->file_nib = $request->hasFile('file_nib') ? $request->file('file_nib')->store('company/file_nib', 'public') : '';
        $data->file_akta_pendirian = $request->hasFile('file_akta_pendirian') ? $request->file('file_akta_pendirian')->store('company/file_akta_pendirian', 'public') : '';
        $data->file_akta_perubahan = $request->hasFile('file_akta_perubahan') ? $request->file('file_akta_perubahan')->store('company/file_akta_perubahan', 'public') : '';
        $data->save();
    }

    public function company_submit()
    {
        DB::beginTransaction();
        $data = RegisterCompany::where('company_id', Auth::user()->company_id)->first();
        $data->status = 'NOT VERIFY';
        $data->applicant_date = Carbon::now();
        $data->save();

        $detail = DetailCompany::where('company_id', Auth::user()->company_id)->first();
        $detail->submit_date = Carbon::now();
        $detail->save();
        DB::commit();
    }
}
