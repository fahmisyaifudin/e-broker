<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalKriteria extends Model
{
    protected $table = 'rental_kriteria';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function kriteria()
    {
        return $this->hasOne('App\Models\Kriteria', 'id', 'id_kriteria');
    }

}