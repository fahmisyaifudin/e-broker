<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rental';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating', 'id_rental', 'id');
    }

    public function rental_kriteria()
    {
        return $this->hasMany('App\Models\RentalKriteria', 'id_rental', 'id');
    }
}