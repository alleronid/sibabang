<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserService{

    public function save(Request $request)
    {
        DB::beginTransaction();

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->merchant_id = $request->merchant_id;
        $data->company_id = Auth::user()->company_id;
        $data->save();

        DB::commit();
    }

    public function updated(Request $request)
    {
        DB::beginTransaction();

        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->merchant_id = $request->merchant_id;
        $data->company_id = Auth::user()->company_id;
        $data->save();

        DB::commit();
    }
}
