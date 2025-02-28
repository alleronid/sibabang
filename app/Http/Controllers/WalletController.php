<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $data = Wallet::where('company_id', Auth::user()->company_id)->get();
        return view('wallets.index', compact('data'));
    }
}
