<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli_cash extends Model
{
    protected $fillable = ['cash_kode', 'no_ktp', 'motor_kode',
     'tanggal', 'bayar'];
    public $timestamps = true;

    public function Pembeli()
    {
        return $this->belongsTo('App\Pembeli')
    }
}
