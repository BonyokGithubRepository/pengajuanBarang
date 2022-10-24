<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reques extends Model
{
    protected $table = 'form_request';
    protected $fillable = [
        'id_ptl',
        'id_perangkat',
        'id_mitra',
        'spa',
        'barcode',
        'tgl_request',  
    ];
    protected $primaryKey = 'id_request';

    public function Mitra()
    {
      return  $this->belongsTo(Mitra::class,'id_mitra','id_mitra');
    }

    public function Ptl()
    {
      return  $this->belongsTo(Ptl::class,'id_ptl','id_ptl');
    }
    public function Perangkat()
    {
      return  $this->belongsTo(Perangkat::class,'id_perangkat','id_perangkat');
    }
}
