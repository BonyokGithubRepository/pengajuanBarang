<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'form_request';
    protected $fillable = [
        'nama_ptl',
        'nama_perangkat',
        'nama_mitra',
        'spa',
        'barcode',
        'tanggal_request',  
    ];
}
