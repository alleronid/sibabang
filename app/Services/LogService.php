<?php

namespace App\Services;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LogService{
    public function store($type,$request, $message, $url)
    {
        DB::beginTransaction();

        $data = new Log();

        $config = [
            'data' => $request,
            'message' => $message
        ];

        $config = json_encode($config);


        $data->type = $type;
        $data->date = Carbon::now();
        $data->link = $url;
        $data->data_raw = $config;
        $data->created_by = Auth::user()->id;
        $data->save();

        DB::commit();
    }
}