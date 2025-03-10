<?php

namespace App\Http\Controllers;

use App\Models\DetailCompany;
use App\Models\MtCity;
use App\Models\MtDistrict;
use App\Models\MtProvince;
use App\Models\MtSubDistrict;
use App\Models\RegisterCompany;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{

    private $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index(){
        $data = RegisterCompany::where('company_id', Auth::user()->company_id)->first();
        $province = MtProvince::all();
        $detail = DetailCompany::with(['propinsi', 'kota_kabupaten', 'kecamatan', 'desa_kelurahan'])
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
        }catch (\Exception $e){
            return redirect(route('company.index'))->with('toast_error', 'failed update company data');
        }
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
}
