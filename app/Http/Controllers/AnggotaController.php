<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Anggota;
class AnggotaController extends Controller
{
    public function index() 
    { 
        $anggota = Anggota::orderBy('id', 'desc')->get(); 
        return view('v_anggota.index', [ 
            'judul' => 'Data Anggota', 
            'index' => $anggota 
        ]); 
    } 
    
}
