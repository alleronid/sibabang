<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\TrxPayment;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    private $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    public function index(){
        $data = TrxPayment::where('company_id', Auth::user()->company_id)->get();
        return view('transaction.index', compact('data'));
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
        try{
            $this->transactionService->save($request);
            return redirect(route('transaction.index'))->with('toast_success', 'Create Transaction Successfully');
        }catch (\Exception $e){
            return redirect(route('transaction.index'))->with('toast_error', 'Create Transaction Failed');
        }
    }


}
