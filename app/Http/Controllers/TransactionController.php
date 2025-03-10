<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\TrxPayment;
use App\Services\TransactionService;
use App\Services\MerchantService;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    private $transactionService, $registerService, $merchantService;

    public function __construct(TransactionService $transactionService,RegisterService $registerService, MerchantService $merchantService)
    {
        $this->transactionService = $transactionService;
        $this->registerService = $registerService;
        $this->merchantService = $merchantService;
    }

    public function index(){
        $arr = [];

        if (Auth::user()->isAdmin()) {
            $data = TrxPayment::with(['merchant','company'])->get();
            $arr['merchants'] = $this->merchantService->all() ?? null;
            $arr['companies'] = $this->registerService->all() ?? null;
        }else{
            $data = TrxPayment::where('company_id', Auth::user()->company_id)->get();
        }
        $arr['data'] = $data;

        return view('transaction.index', $arr);
    }

    public function detail($noTrx){
        $data = TrxPayment::where('trx_id', $noTrx)->first();
        return view('transaction.detail', compact('data'));
    }

    public function create(){
        $merchants = Merchant::where('company_id', Auth::user()->company_id)->get();
        return view('transaction.create', compact('merchants'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->isAdmin()) {
            $merchant = $this->merchantService->find($request->merchant_id);

            $request->merge([
                'company_id' => $merchant->company_id,
            ]);
        }
        try{
            $this->transactionService->save($request);
            return redirect(route('transaction.index'))->with('toast_success', 'Create Transaction Successfully');
        }catch (\Exception $e){
            return redirect(route('transaction.index'))->with('toast_error', 'Create Transaction Failed');
        }
    }


}
