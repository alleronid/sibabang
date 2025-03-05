<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserService{

    public function __construct()
    {
    }

    public function save(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id ?? 1;
        $user->status = 'ACTIVE';
        $user->merchant_id = $request->merchant_id;
        $user->company_id = $request->company_id ?? Auth::user()->company_id;
        $user->created_by = Auth::user()->id;
        $user->save();
    }

    public function edit(Request $request)
    {
        $user = User::find($request->user_id);

        if ($user) {
            $user->name = $request->name ?? $user->name;
            $user->email = $request->email ?? $user->email;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->role_id = $request->role_id ?? $user->role_id;
            $user->status = $request->status ?? $user->status;
            $user->merchant_id = $request->merchant_id ?? $user->merchant_id;
            $user->company_id = $request->company_id ?? $user->company_id;
            $user->save();
        }

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
