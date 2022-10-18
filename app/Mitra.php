<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class Mitra extends Model
{
    protected $table = 'form_mitra';
    protected $fillable = [
        'nama',
        'email',
        'nama_pict',
    ];
    protected $primaryKey = 'id_mitra';
}
