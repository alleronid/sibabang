<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Crypt;

class MerchantBank extends Model
{
    protected $guarded = [];

    protected $appends = ['id_hash'];

    public function getIdHashAttribute(){
        return Crypt::encrypt($this->id);
    }

    public function scopeDecrypt($query, $id_hash){
        $id = Crypt::decrypt($id_hash);
        return $id;
    }

    public function scopeUsable(Builder $query, $merchant_id=null)
    {
        $query->where('is_active', 1)->where('status', 'VERIFIED');

        if($merchant_id){
            $query->where('merchant_id',$merchant_id);
        }

        return $query;
    }

    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id', 'merchant_id');
    }

    public function company(){
        return $this->hasOne(RegisterCompany::class, 'company_id', 'company_id');
    }

    public function disbursement(){
        return $this->hasMany(TrxDisbursement::class, 'merchant_id', 'merchant_id');
    }
}
