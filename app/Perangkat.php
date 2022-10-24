<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class Perangkat extends Model
{
    protected $table = 'form_perangkat';
    protected $fillable = [
        'nama_perangkat',
        'serial_number'
    ];
    protected $primaryKey = 'id_perangkat';

    public function Reques()
    {
        return $this->hasOne(Reques::class,'id_request','id_perangkat');
    }
}
