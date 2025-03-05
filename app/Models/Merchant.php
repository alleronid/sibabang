<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Crypt;

class Merchant extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['id_hash'];

    protected $primaryKey = 'merchant_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public function getIdHashAttribute(){
        return Crypt::encrypt($this->merchant_id);
    }

    public function scopeDecrypt($query, $id_hash){
        $id = Crypt::decrypt($id_hash);
        return $id;
    }

    public function company(){
        return $this->belongsTo(RegisterCompany::class, 'company_id', 'company_id');
    }

    public function vendor(){
        return $this->belongsTo(MtVendor::class, 'vendor_id', 'id');
    }

    public function payment(){
        return $this->hasOne(MerchantPayment::class, 'merchant_id', 'merchant_id');
    }
}
