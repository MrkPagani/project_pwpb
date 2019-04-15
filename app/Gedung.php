<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    public $table = 't_gedung';

    protected $fillable = [
        'id_gedung', 'nama_gedung'
    ];
}
