<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriUsaha extends Model
{
    
    protected $table ='kategori_usaha';

    protected $fillable=[
        'nama_kategori'
    ];
    
    use SoftDeletes;
}
