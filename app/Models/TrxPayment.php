<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrxPayment extends Model
{
    protected $guarded = [];

    public function merchant(){
        return $this->hasOne(Merchant::class, 'merchant_id', 'merchant_id');
    }

    public function company(){
        return $this->hasOne(RegisterCompany::class, 'company_id', 'company_id');
    }
}
