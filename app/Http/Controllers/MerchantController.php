<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Services\MerchantService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{

    private $merchantService;

    public function __construct(MerchantService $merchantService) {
        $this->merchantService = $merchantService;
    }

    public function index(Request $request){
        $data = Merchant::with(['company'])->where('company_id', Auth::user()->company_id)->get();
        return view('merchant.index', compact('data'));
    }

    public function create(){
        return view('merchant.create');
    }

    public function store(Request $request){
        try{
            $this->merchantService->save($request);
            return redirect(route('merchant.index'))->with('toast_success', 'Create Merchant Successfully');
        }catch (\Exception $e){
            return redirect(route('merchant.index'))->with('toast_error', 'Create Merchant Failed');
        }
    }

    public function getMerchant($id)
    {
        $data = Merchant::find($id);
        return response()->json($data);
    }
}
