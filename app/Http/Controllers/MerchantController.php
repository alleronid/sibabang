<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Services\MerchantService;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class MerchantController extends Controller
{

    private $merchantService, $registerService;

    public function __construct(MerchantService $merchantService, RegisterService $registerService) {
        $this->merchantService = $merchantService;
        $this->registerService = $registerService;
    }

    public function index(Request $request){
        $arr = [];

        if (Auth::user()->isAdmin()) {
            $data = $this->merchantService->all() ?? null;
            $arr['companies'] = $this->registerService->all() ?? null;
        }else{
            $data = $this->merchantService->allByCompany() ?? null;
        }
        $arr['data'] = $data;

        return view('merchant.index', $arr);
    }

    public function create(){
        $arr = [];
        if (Auth::user()->isAdmin()) {
            $arr['companies'] = $this->registerService->all();
        }
        return view('merchant.create', $arr);
    }

    public function store(Request $request){
        try{
            $this->merchantService->save($request);
            return redirect(route('merchant.index'))->with('toast_success', 'Create Merchant Successfully');
        }catch (\Exception $e){
            return redirect(route('merchant.index'))->with('toast_error', 'Create Merchant Failed');
        }
    }

    public function update(Request $request){
        try{
            $this->merchantService->edit($request);
            return response()->json([
                'message' => 'success update merchant'
            ]);
        }catch (\Exception $e){
           return response()->json([
            'message' => 'error update merchant'
           ]);
        }
    }

    public function getMerchant($id)
    {
        $data = Merchant::with(['vendor', 'company'])->where('merchant_id', $id)->first();
        return response()->json($data);
    }

    public function fee(){
        return view('merchant.fee');
    }
}
