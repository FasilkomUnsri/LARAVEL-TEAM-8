<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function Pesanan_Detail(){
        return $this->hasMany('App\Models\Pesanan_Detail','barang_id','id');
    }
}