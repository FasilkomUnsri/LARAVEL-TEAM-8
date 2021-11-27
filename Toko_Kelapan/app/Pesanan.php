<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }
    public function Pesanan_Detail(){
        return $this->hasMany('App\Models\Pesanan_Detail','pesanan_id', 'id');
    }
}
