<?php

namespace App\Http\Controllers;

use App\AkunUsaha;
use App\KategoriUsaha;
use App\Loker;
use App\PelamarKerja;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getKategoriUsaha() {
        $data = KategoriUsaha::all();
        return response()->json($data);
    }

    public function getAkunUsaha() {
        $data = AkunUsaha::all();
        return response()->json($data);
    }

    public function getLoker() {
        $data = Loker::all();
        return response()->json($data);
    }

    public function getPelamarKerja() {
        $data = PelamarKerja::all();
        return response()->json($data);
    }
}
