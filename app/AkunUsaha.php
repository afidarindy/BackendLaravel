<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AkunUsaha extends Model
{
    protected $table ='akunUsaha';

    protected $fillable=[
        'id_usaha',
        'nama_usaha',
        'deskripsi_usaha',
        'alamat_kota',
        'alamat_provinsi',
        'alamat_lengkap',
        'email',
        'link_gmaps',
        'foto_usaha'
    ];
    
    use SoftDeletes;
}
