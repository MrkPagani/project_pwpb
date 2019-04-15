<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    //

    public $table = 't_spesialis';

    protected $fillable = ['id', 'nama_spesialis'];
}
