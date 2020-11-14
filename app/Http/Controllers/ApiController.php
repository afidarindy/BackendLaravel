<?php

namespace App\Http\Controllers;

use App\Loker;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getLoker() {
        $loker = Loker::all();
        return response()->json($loker);
    }
}
