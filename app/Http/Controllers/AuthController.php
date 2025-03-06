<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if ($validators->fails()) {
            return redirect(route('login'))->with('toast_error', 'Login Failed');
        }else{
            $login = ['email' => $request->email, 'password' => $request->password, 'status' => 'ACTIVE'];
            if(Auth::attempt($login)){
                $user = Auth::user();
                if($user->role->role_name === 'admin'){
                    return redirect(route('admin.dashboard'))->with('toast_success', 'Login Success');
                }else{
                    return redirect(route('dashboard'))->with('toast_success', 'Login Success');
                }
            }else{
                return redirect(route('login'))->with('toast_error', 'Login Failed  / Email or Password is incorrect');
            }
        }
    }

    public function logout(Request $request){
        session()->flush();
        Auth::logout();
        return redirect(route('index'))->with('toast_success', 'Successfully logged out !');
    }
}
