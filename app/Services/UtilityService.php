<?php

namespace App\Services;

class UtilityService{

    public function generateToken($data){
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

    public function token(){
        $token = hash('sha256', random_bytes(32));

        return $token;
    }

    public function generateKey($type = 'api_key', $env = 'SB') {
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
