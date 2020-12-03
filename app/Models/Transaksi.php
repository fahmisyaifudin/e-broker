<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function location()
    {
        return $this->hasMany('App\Models\OrderLokasi', 'id_transaksi', 'id');
    }
}