<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function index_mahasiswa()
    {
        $data_mahasiswa = DB::table('mahasiswa')
            ->select('id', 'nim', 'nama', 'usia','alamat','hobi')
            //->limit(10)
            ->get();
        return view('mhs.data_mahasiswa', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function tambah_mahasiswa()
    {

        $header = "Tambah Data Mahasiswa";
        return view('mhs.tambah_mahasiswa', ['header' => $header]);
    }



    public function proses_tambah_mahasiswa(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $validated = Validator::make($request->all(), [
            'nim' => 'required |unique:mahasiswa',
            'nama' => 'required',
            'alamat' => 'required',

        ], [
            'nim.required' => "NIM Tidak Boleh Kosong",
            'nama.required' => "Nama Tidak Boleh Kosong",
            'alamat.required' => "Alamat Tidak Boleh Kosong"
        ]);
        if ($validated->fails()) {
            $input = $request->all();
            return redirect('/mahasiswa/tambah_mahasiswa')
                ->withErrors($validated)
                ->withInput($input);
        } else {
            $nim = $request->input("nim");
            $nama = $request->input('nama');
            $alamat = $request->input('alamat');
            $usia = $request->input('usia');
            $hobi = $request->input("hobi");
            DB::table('mahasiswa')->Insert([
                'nim' => $nim,
                'nama' => $nama,
                'alamat' => $alamat,
                'usia' => $usia,
                'hobi' => $hobi,
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('y-m-d H:i:s'),
            ]);
            return redirect('/mahasiswa')->with('berhasil', "Data Pengguna Berhasil Disimpan");
        }
    }

    // public function edit($id)
    // {
    //     $mahasiswa = data::find($id);
    //     return view("mhs.edit", compact(["mahasiswa"]));
    // }

 // 3. EDIT DATA
 public function ubah_data($id)
 {
     $header = "EDIT DATA MAHASISWA";
     $data = DB::table('mahasiswa')
         ->where('id', '=', $id)
         //->limit(10)
         ->first();
     return view('mhs.ubah_data', [
         'header' => $header,
         'ubah' => $data
     ]);
 }

 // EDIT DATA->PROCCESS

 public function proses_ubah_data(Request $request)
 {
    date_default_timezone_set('Asia/Jakarta');
    $validated = Validator::make($request->all(), [
        'nim' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'usia'=>'required',
        'hobi'=>'required',

    ], [
        'nim.required' => "NIM Tidak Boleh Kosong",
        'nama.required' => "Nama Tidak Boleh Kosong",
        'alamat.required' => "Alamat Tidak Boleh Kosong",
        'usia.required'=>"usia tidak boleh kosong",
        'hobi.required'=>"hobi tidak boleh kosong",
    ]);
     if ($validated->fails()) {
         $input = $request->all();
         return back()
             ->withErrors($validated)
             ->withInput($input);
     } 
     else {
        $mahasiswa = DB::table('mahasiswa')
             ->select('id')
             ->where('id', '=', $request->input('id'))
             ->first();
         $id = $request->input('id');
         $nim = $request->input('nim');
        
         if(isset($nim)){
             $new_nim=$nim;                
         }
         else{
             $new_nim=$mahasiswa->nim;
         }
         $nama=$request->input('nama');
         $alamat=$request->input('alamat');
         $usia=$request->input('usia');
         $hobi=$request->input('hobi');


// $token=$request->input('_token');


DB::table('mahasiswa')
->where('id',$id)
->update([

'nim'=>$new_nim,
'nama'=>$nama,
'alamat'=>$alamat,
'usia'=>$usia,
'hobi'=>$hobi,
// 'remember_token'=>$token,
'updated_at'=>date('Y-m-d H:i:s'),

]);
         return redirect('/mahasiswa')->with('berhasil', "Data Pengguna Berhasil Diubah");
     }
 }
}
