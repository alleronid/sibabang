<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrxDisbursement extends Model
{
    protected $guarded = [];

    public function bank(){
        return $this->belongsTo(MerchantBank::class, 'merchant_id', 'merchant_id');
    }
}
