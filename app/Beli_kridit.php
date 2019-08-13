<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli_kridit extends Model
{
    protected $fillable = ['kridit_kode', 'no_ktp', 'paket_kode', 'motor_kode', 'kridit_tanggal', 'fc_ktp', 'fc_kk', 'fc_slip_gaji'];
    public $timestamps = true;

    public function Kridit_paket()
    {
        return $this->belongsTo('App\Kridit_paket');
    }

    public function Motor()
    {
        return $this->belongsTo('App\Motor');
    }

    public function Pembeli()
    {
        return $this->belongsTo('App\Pembeli');
    }
    public function Bayar_cicilan()
    {
        return $this->BelongsTo('App\Bayar_cicilan');
    }
}
