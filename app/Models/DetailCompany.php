<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailCompany extends Model
{
    protected $guarded = [];

    public function propinsi(){
        return $this->belongsTo(MtProvince::class, 'client_province_id', 'kode_provinsi');
    }

    public function kota_kabupaten(){
        return $this->belongsTo(MtCity::class, 'client_city_id', 'kode_kab_kota');
    }

    public function kecamatan(){
        return $this->belongsTo(MtDistrict::class, 'client_kecamatan_id', 'kode_kecamatan');
    }

    public function desa_kelurahan(){
        return $this->belongsTo(MtSubDistrict::class, 'client_kel_desa_id', 'kode_desa_kelurahan');
    }
}
