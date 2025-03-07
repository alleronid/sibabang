<?php

namespace App\Http\Controllers;

use App\Models\RegisterCompany as Company;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{

    private $registerService;

    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function index(){
        $companies = Company::get();
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
        $data = Company::where('company_id', $id)->first();
        return response()->json($data);
    }

    public function checkKTP($ktp)
    {
        $exists = Company::where('nationality_id', $ktp)->whereIn('status', ['SUBMIT', 'APPROVED'])->exists();
        return response()->json(['exists' => $exists]);
    }

    public function checkEmail($email)
    {
        $exists = Company::where('email', $email)->whereIn('status', ['SUBMIT', 'APPROVED'])->exists();
        return response()->json(['exists' => $exists]);
    }

}
