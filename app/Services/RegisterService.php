<?php

namespace App\Services;

use App\Models\Merchant;
use App\Models\RegisterCompany;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterService{
    public function save(Request $request)
    {
        DB::beginTransaction();
        $data = new RegisterCompany();
        $data->nationality_id = $request->nationality_id;
        $data->tax_number = $request->tax_number;
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->merchant_name = $request->merchant_name;
        $data->business_type = $request->business_type;
        $data->address = $request->address;
        $data->nib = $request->nib ?? '';
        $data->siup = $request->siup ?? '';
        $data->akta = $request->akta ?? '';
        $data->referall = $request->referall ?? '';
        $data->password = $request->password;
        $data->file_ktp = $request->hasFile('file_ktp') ? $request->file('file_ktp')->store('register/file_ktp', 'public') : '';
        $data->save();

        $merchant = new Merchant();
        $merchant->company_id = $data->id;
        $merchant->merchant_name = $data->merchant_name;
        $merchant->token = self::token();
        $merchant->api_key_sb = self::generateKey('api_key', 'SB');
        $merchant->cb_key_sb = self::generateKey('cb_key', 'SB');
        $merchant->save();

        $user = new User();
        $user->name = $data->fullname;
        $user->email = $data->email;
        $user->merchant_id = $merchant->merchant_id;
        $user->company_id = $data->id;
        $user->password = Hash::make($data->password);
        $user->save();


        DB::commit();
    }

    private function generateToken($data){
        $secretKey = 'adudu123';

        if (is_array($data)) {
            $encodedPayload = json_encode($data);
        } else {
            $encodedPayload = $data;
        }


        $base64Payload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($encodedPayload));

        // Buat signature dengan HMAC SHA256
        $signature = hash_hmac('sha256', $base64Payload, $secretKey, true);

        // Base64 encode signature (URL safe)
        $base64Signature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        // Gabungkan payload dan signature dengan titik
        $token = $base64Payload . '.' . $base64Signature;

        return $token;
    }

    private function token(){
        $token = hash('sha256', random_bytes(32));

        return $token;
    }

    private function generateKey($type = 'api_key', $env = 'SB') {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $char_length = strlen($characters);

        $segment1 = '';
        for ($i = 0; $i < 7; $i++) {
            $segment1 .= $characters[rand(0, $char_length - 1)];
        }

        $segment2 = '';
        for ($i = 0; $i < 7; $i++) {
            $segment2 .= $characters[rand(0, $char_length - 1)];
        }

        if($type === 'api_key' && $env === 'SB')
        {
            $key = "SIBBNG-SBX-{$segment1}-{$segment2}";
        }

        if($type === 'api_key' && $env === 'PROD')
        {
            $key = "SIBBNG-{$segment1}-{$segment2}";
        }

        if($type === 'cb_key' && $env === 'SB')
        {
            $key = "SIBBNG-SBX-{$segment1}-{$segment2}";
        }

        if($type === 'cb_key' && $env === 'PROD')
        {
            $key = "SIBBNG-CB-{$segment1}-{$segment2}";
        }

        return $key;
    }
}
