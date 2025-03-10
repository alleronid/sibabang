<?php

namespace App\Http\Controllers;

use App\Models\DetailCompany;
use App\Models\MtCity;
use App\Models\MtDistrict;
use App\Models\MtProvince;
use App\Models\MtSubDistrict;
use App\Models\RegisterCompany;
use App\Services\CompanyService;
use Illuminate\Support\Facades\Auth;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CompanyController extends Controller
{

    private $companyService, $registerService;

    public function __construct(CompanyService $companyService, RegisterService $registerService)
    {
        $this->companyService = $companyService;
        $this->registerService = $registerService;
    }

    public function index_profile(){
        $data = RegisterCompany::where('company_id', Auth::user()->company_id)->first();
        $province = MtProvince::all();
        $detail = DetailCompany::with(['propinsi', 'kota_kabupaten', 'kecamatan', 'desa_kelurahan', 'merchant_propinsi', 'merchant_kota', 'merchant_kecamatan', 'merchant_kelurahan'])
                ->where('company_id', Auth::user()->company_id)->first();
        return view('company.profile', compact('data', 'province', 'detail'));
    }

    public function personalData(Request $request){
        try{
            $this->companyService->personal_data($request);
            return redirect(route('company.index'))->with('toast_success', 'Successfully update personal data');
        }catch (\Exception $e){
            return redirect(route('company.index'))->with('toast_error', 'failed update personal data');
        }
    }

    public function companyData(Request $request){
        try{
            $this->companyService->company_data($request);
            return redirect(route('company.index'))->with('toast_success', 'Successfully update personal data');
        }catch (\Exception $e){
            return redirect(route('company.index'))->with('toast_error', 'failed update company data');
        }
    }

    public function companyFile(Request $request){
        try{
            $this->companyService->company_file($request);
            return redirect(route('company.index'))->with('toast_success', 'Successfully update personal data');
        }catch (\Exception $e){
            return redirect(route('company.index'))->with('toast_error', 'failed update company data');
        }
    }

    public function companySubmit(){

    }

    public function getCity($id){
        $data = MtCity::where('kode_provinsi', $id)->get();
        return response()->json($data);
    }

    public function getDistrict($id){
        $data = MtDistrict::where('kode_kab_kota', $id)->get();
        return response()->json($data);
    }

    public function getSubdistrict($id){
        $data = MtSubDistrict::where('kode_kecamatan', $id)->get();
        return response()->json($data);
    }

    public function index(){
        $companies = RegisterCompany::get();
        return view('admin.company.index', compact('companies'));
    }

    public function update(Request $request){
        try{
            $this->registerService->update($request);
            return response()->json([
                'message' => 'success update user'
            ]);
        }catch (\Exception $e){
            DB::rollBack();
            return response()->json([
                'message' => 'error update user'
            ]);
        }
    }

    public function getCompany($id)
    {
        $data = RegisterCompany::where('company_id', $id)->first();
        return response()->json($data);
    }

    public function checkKTP($ktp)
    {
        $exists = RegisterCompany::where('nationality_id', $ktp)->whereIn('status', ['SUBMIT', 'APPROVED'])->exists();
        return response()->json(['exists' => $exists]);
    }

    public function checkEmail($email)
    {
        $exists = RegisterCompany::where('email', $email)->whereIn('status', ['SUBMIT', 'APPROVED'])->exists();
        return response()->json(['exists' => $exists]);
    }

}
