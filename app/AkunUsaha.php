<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AkunUsaha extends Model
{
    protected $table ='akunUsaha';

    protected $fillable=[
        'nama_usaha',
        'deskripsi_usaha',
        'alamat_kota',
        'alamat_provinsi',
        'alamat_lengkap',
        'email',
        'link_gmaps',
        'foto_usaha',
        'password',
        'id_kategori_usaha'
    ];
    
    use SoftDeletes;
    public function kategoriUsaha(){
        return $this->belongsTo('App\KategoriUsaha', 'id_kategori_usaha');
    }
}
