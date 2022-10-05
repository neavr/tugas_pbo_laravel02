<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota =DB::table('anggota')->get();
        
        return view('anggota' ,['anggota' => $anggota]);
    }
}
