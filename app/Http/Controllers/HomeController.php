<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        //$data=Anggota::all(); //Select * (Menampilkan Semua Data)
        //$data=Anggota::where('anggota_id',1)->get(); //Where (Menampilkan Data Spesific)
        $data=Buku::where('buku_judul','LIKE','%slider%')->get();
        return view('welcome',compact('data'));
    }
}
