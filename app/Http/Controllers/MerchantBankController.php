<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\MerchantBank;
use App\Models\MtBank;
use App\Services\MerchantBankService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class MerchantBankController extends Controller
{

    private $merchantbankService;

    public function __construct(MerchantBankService $merchantbankService)
    {
        $this->merchantbankService = $merchantbankService;
    }

    public function index(){
        $data = MerchantBank::with(['merchant'])->where('company_id', Auth::user()->company_id)->get();
        return view('merchant.bank.index', compact('data'));
    }

    public function create()
    {
        $banks = MtBank::all();
        $merchant = Merchant::where('company_id', Auth::user()->company_id)->get();
        return view('merchant.bank.create', compact('banks', 'merchant'));
    }

    public function store(Request $request)
    {
        try{
            $this->merchantbankService->save($request);
            return redirect(route('merchant-bank.index'))->with('toast_success', 'Create Merchant Bank Successfully');
        }catch (\Exception $e){
            return redirect(route('merchant-bank.index'))->with('toast_error', 'Create Merchant Bank Failed');
        }
    }

    public function edit($idHash){
        $id = Crypt::decrypt($idHash);
        $data = MerchantBank::with(['merchant'])->find($id);
        $banks = MtBank::all();
        $merchant = Merchant::where('company_id', Auth::user()->company_id)->get();
        return view('merchant.bank.edit', compact('data', 'banks','merchant'));
    }

    public function update(Request $request)
    {
        try{
            $this->merchantbankService->updated($request);
            return redirect(route('merchant-bank.index'))->with('toast_success', 'Update Merchant Bank Successfully');
        }catch (\Exception $e){
            return redirect(route('merchant-bank.index'))->with('toast_error', 'Update Merchant Bank Failed');
        }
    }

    public function getBank($id){
        $bank = MtBank::find($id);
        return response()->json($bank);
    }

    public function getDetail($id){
        $data = MerchantBank::find($id);
        return response()->json($data);
    }
}
