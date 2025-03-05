<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MtRole;
use App\Services\UserService;
use App\Services\MerchantService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{

    private $userService, $merchantService;

    public function __construct(UserService $userService, MerchantService $merchantService) {
        $this->userService = $userService;
        $this->merchantService = $merchantService;
    }

    public function index(Request $request){
        $data = User::with(['role','merchant','company'])->where('company_id', Auth::user()->company_id)->get();
        return view('user.index', compact('data'));
    }

    public function create(){
        $roles = MtRole::get();
        $merchants = $this->merchantService->all();
        return view('user.create', compact('roles', 'merchants'));
    }

    public function store(Request $request){
        try{
            $this->userService->save($request);
            return redirect(route('user.index'))->with('toast_success', 'Create User Successfully');
        }catch (\Exception $e){
            return redirect(route('user.index'))->with('toast_error', 'Create User Failed');
        }
    }

    public function update(Request $request){
        try{
            $this->userService->edit($request);
            return response()->json([
                'message' => 'success update user'
            ]);
        }catch (\Exception $e){
            dd($e);
           return response()->json([
               'message' => 'error update user'
           ]);
        }
    }

    public function getUser($id)
    {
        $data = User::with(['role','merchant','company'])->where('id', $id)->first();
        return response()->json($data);
    }
}
