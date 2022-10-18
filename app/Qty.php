<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class Qty extends Model
{
    protected $table = 'form_qty';
    protected $fillable = [
        'nama_perangkat',
        'tanggal_qty',
    ];
    protected $primaryKey = 'id_qty';
}
