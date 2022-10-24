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
        'id_user'
    ];
    protected $primaryKey = 'id_mitra';

    public function Reques()
    {
        return $this->hasOne(Reques::class,'id_request','id_mitra');
    }
    public function User(Type $var = null)
    {
        return $this->belongsTo(User::class,'id_user','id_user');
    }
}
