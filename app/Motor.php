<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = ['motor_kode', 'motor_merk', 'motor_type', 'motor_warna', 'motor_harga', 'motor_gambar'];
    public $timestamps = true;

    public function Beli_kridit()
    {
        return $this->hasOne('App\Beli_kridit');
    }
}
