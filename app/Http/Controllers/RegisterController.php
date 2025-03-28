<?php

namespace App\Http\Controllers;

use App\Models\RegisterCompany;
use App\Services\LogService;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    private $registerService, $logService;

    public function __construct(RegisterService $registerService, LogService $logService)
    {
        $this->registerService = $registerService;
        $this->logService = $logService;
    }

    public function index(){
        return view('register.index');
    }

    public function store(Request $request)
    {
        try{
            $this->registerService->save($request);
            return redirect(route('login'))->with('success', 'Pendaftaran berhasil silakan login');
        }catch (\Exception $e) {
            $this->logService->store('error', $request, $e->getMessage(), url()->current());
            DB::rollBack();
            return redirect(route('register'))->with('error', 'Pendaftaran gagal silakan coba lagi');
        }
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
