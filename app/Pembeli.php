<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable = ['no_ktp', 'nama', 'alamat', 'telepon', 'hp'];
    public $timestamps = true;

    public function Beli_kridit()
    {
        return $this->hasOne('App\Beli_kridit');
    }
    
    public function Beli_cash()
    {
        return $this->hasOne('App\Beli_cash');
    }
}
