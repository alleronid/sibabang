<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Crypt;

class RegisterCompany extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['id_hash'];

    protected $primaryKey = 'company_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public function getIdHashAttribute(){
        return Crypt::encrypt($this->id);
    }

    public function scopeDecrypt($query, $id_hash){
        $id = Crypt::decrypt($id_hash);
        return $id;
    }

    public function merchants(){
        return $this->hasMany(Merchant::class, 'merchant_id', 'merchant_id');
    }

    public function detail(){
        return $this->hasOne(DetailCompany::class, 'company_id','company_id');
    }
}
