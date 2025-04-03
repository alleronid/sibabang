<?php

namespace App\Http\Controllers;

use App\Models\DetailCompany;
use App\Models\MtCity;
use App\Models\MtDistrict;
use App\Models\MtProvince;
use App\Models\MtSubDistrict;
use App\Models\RegisterCompany;
use App\Services\CompanyService;
use App\Services\LogService;
use Illuminate\Support\Facades\Auth;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MtBank;


class CompanyController extends Controller
{

    private $companyService, $registerService, $logService;

    public function __construct(CompanyService $companyService, RegisterService $registerService, LogService $logService)
    {
        $this->companyService = $companyService;
        $this->registerService = $registerService;
        $this->logService = $logService;
    }

    public function index_profile(){
        $data = RegisterCompany::where('company_id', Auth::user()->company_id)->first();
        $province = MtProvince::all();
        $banks = MtBank::all();
        $detail = DetailCompany::with(['propinsi', 'kota_kabupaten', 'kecamatan', 'desa_kelurahan', 'merchant_propinsi', 'merchant_kota', 'merchant_kecamatan', 'merchant_kelurahan'])
                ->where('company_id', Auth::user()->company_id)->first();
        return view('company.profile', compact('data', 'province', 'detail', 'banks'));
    }

    public function personalData(Request $request){
        try{
            $this->companyService->personal_data($request);
            return redirect(route('company.index'))->with('toast_success', 'Successfully update personal data');
        }catch (\Exception $e){
            $this->logService->store('error', $request, $e->getMessage(), url()->current());
            return redirect(route('company.index'))->with('toast_error', 'failed update personal data');
        }
    }

    public function companyData(Request $request){
        try{
            $this->companyService->company_data($request);
            return redirect(route('company.index'))->with('toast_success', 'Successfully update personal data');
        }catch (\Exception $e){
            $this->logService->store('error', $request, $e->getMessage(), url()->current());
            return redirect(route('company.index'))->with('toast_error', 'failed update company data');
        }
    }

    public function companyFile(Request $request){
        try{
            $this->companyService->company_file($request);
            return redirect(route('company.index'))->with('toast_success', 'Successfully update personal data');
        }catch (\Exception $e){
            $this->logService->store('error', $request, $e->getMessage(), url()->current());
            return redirect(route('company.index'))->with('toast_error', 'failed update company data');
        }
    }

    public function companySubmit(){

        // status company jadi not verify 'a'
    }

    public function aggrement(){
        return view('company.pks');
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
        $province = MtProvince::all();
        $detail = DetailCompany::with(['propinsi', 'kota_kabupaten', 'kecamatan', 'desa_kelurahan', 'merchant_propinsi', 'merchant_kota', 'merchant_kecamatan', 'merchant_kelurahan'])
            ->where('company_id', Auth::user()->company_id)->first();
        return view('admin.company.index', compact('companies','province'));
    }

    public function update(Request $request){
        try{
            $this->registerService->update($request);
            return response()->json([
                'message' => 'success update user'
            ]);
        }catch (\Exception $e){
            $this->logService->store('error', $request, $e->getMessage(), url()->current());
            DB::rollBack();
            return response()->json([
                'message' => 'error update user'
            ]);
        }
    }

    public function getCompany($id)
    {
        $data = RegisterCompany::with('detail','detail.kota_kabupaten')->where('company_id', $id)->first();
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
