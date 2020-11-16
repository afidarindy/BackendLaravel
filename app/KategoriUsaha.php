<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriUsaha extends Model
{
    
    protected $table ='kategoriUsaha';

    protected $fillable=[
        'id_kategori_usaha',
        'nama_kategori'
    ];
    
    use SoftDeletes;
}
