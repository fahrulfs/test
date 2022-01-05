<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index_nilai()
    {
        $data = DB::table('nilai')
        // IPK DIATAS 3.00
        ->where('ipk','<',2.75)

        // //SEMESTER DIATAS 5
        ->where('semester','>=',5)

        // // TOTAL SKS LEBIH DARI 100
        ->where('total_sks','>',100)
            ->get();

        // JIKA AKAN DATANYA DITAMPILKAN PADA SEBUAH VIEWS 
        return view('nilai.data_nilai', ['data' => $data]);
    }  //
}
