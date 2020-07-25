<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function fuzzy()
    {
        return $this->belongsTo('App\Models\Fuzzy', 'id', 'id_kriteria');
    }
}