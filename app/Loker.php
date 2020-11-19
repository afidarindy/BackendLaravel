<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loker extends Model
{
    protected $table ='loker';

    protected $fillable=[
        'judul_loker',
        'job_description',
        'persyaratan',
        'gaji',
        'tanggal_kadaluarsa',
        'id_usaha',
    ];

    use SoftDeletes;

    public function akunUsaha(){
        return $this->belongsTo('App\AkunUsaha', 'id_usaha');
    }
}
