<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loker extends Model
{
    protected $table ='pelamarKerja';

    protected $fillable=[
        'judul_loker',
        'job_description',
        'persyaratan',
        'gaji',
        'tanggal_kadaluarsa',
        'id_bidang_usaha',
    ];

    use SoftDeletes;

    public function bidangUsaha(){
        return $this->belongsTo('App\BidangUsaha', 'id_kategori');
    }
}
