<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class Ptl extends Model
{
    protected $table = 'form_ptl';
    protected $fillable = [
        'nama',
        'email',
        'no_wa',
        'area',
    ];
    protected $primaryKey = 'id_ptl';
}
