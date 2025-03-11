<?php

namespace App\Services;

use App\Models\TrxDisbursement;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DisbursementService{

    public function save(Request $request){
        DB::beginTransaction();
        $data = new TrxDisbursement();
        $data->no_trx = self::noTrx($request->merchant_id);
        $data->merchant_bank = $request->merchant_bank;
        $data->nominal = $request->nominal;
        $data->company_id = Auth::user()->company_id;
        $data->merchant_id = $request->merchant_id;
        $data->save();
        DB::commit();
    }

    public function process(Request $request){
        DB::beginTransaction();
        $data = TrxDisbursement::where('no_trx', $request->no_trx)->first();
        if($request->status == "SUCCESS"){
            $data->status = $request->status;
            $wallet = Wallet::where('merchant_id', $data->merchant_id)->first();
            $wallet->avail_balance = $wallet->avail_balance - $data->nominal;
            $wallet->approved_by = Auth::user()->id;
            $wallet->proccess_date = Carbon::now();
            $wallet->save();
        }else{
            $data->status == $request->status;
        }
        $data->save();

        DB::commit();
    }

    private function noTrx($merchantId){
        $year = date('Y');
        $Digityear = substr($year, 2,4);
        $month = date('m');
        $day = date('d');
        $rand= rand(0000,9999);
        $noTrx = "DIR{$merchantId}{$Digityear}{$month}{$day}{$rand}";

        $cek = TrxDisbursement::where('no_trx', $noTrx)->first();

        if($cek){
            self::noTrx($merchantId);
        }

        return $noTrx;
    }

}
