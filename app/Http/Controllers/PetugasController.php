<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = DB::table('petugas')->get();
        
        return view('petugas' ,['petugas' => $petugas]);
    }
}
