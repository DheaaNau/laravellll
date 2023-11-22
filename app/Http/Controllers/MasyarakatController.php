<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    function tablemas(){
        $masyarakat = DB::table('masyarakat')-> get();
      return view('table_masyarakat',['masyarakat'=> $masyarakat]);
    }

    function proses_tambah_masyarakat(Request $request){

        $request->validate([
            'isi_laporan' => 'required|min:2'
        ]);
        
    }
    function buat_akun(){
       return view('registrasi'); 
    }



    

}