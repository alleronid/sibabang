<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantPaymentController extends Controller
{
    public function qris()
    {
        $data = Merchant::with(['payment'])->where('company_id', Auth::user()->company_id)->get();
        return view('merchant.qris',compact('data'));
    }
}
