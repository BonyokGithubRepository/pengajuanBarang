<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class Perangkat extends Model
{
    protected $table = 'form_perangkat';
    protected $fillable = [
        'nama_perangkat',
    ];
    protected $primaryKey = 'id_perangkat';
}
