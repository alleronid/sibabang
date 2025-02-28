<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class MtRole extends Model
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
}
