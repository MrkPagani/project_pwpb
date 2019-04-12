<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpesialisModel extends Model
{
    public $table = 't_spesialis';

    protected $fillable = [
        'id_spesialis','nama_spesialis'
    ];
}
