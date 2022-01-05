<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
class PulsaController extends Controller
{
    public function index_pulsa()
    {
        $status = "PENGISIAN PULSA BERHASIL";
        $data_pulsa = DB::table('pulsa')
            ->select('id', 'no_hp', 'nama_provider', 'nominal_beli')
            //->limit(10)
            ->get();
        return view('pulsa.notif_sukses', [
            'status' => $status,
            'data_pulsa' => $data_pulsa
        ]);
    }
    public function tambah_pulsa()
    {
        $header = "Pengisian Pulsa";
        return view('pulsa.tambah_pulsa', [
            'header' => $header,
        ]);
    }
    public function proses_tambah_pulsa(Request $request)
    {
        $validated = Validator::make($request->all(), [

            'no_hp' => 'required',
            'nama_provider' => 'required',
            'nominal_beli' => 'required',
        ], [
            'no_hp.required' => "No Hp Tidak Boleh Kosong",
            'nama_provider.required' => "Nama Tidak Boleh Kosong",
            'nominal_beli.required' => "Alamat Tidak Boleh Kosong"
        ]);
        if ($validated->fails()) {
            $input = $request->all();
            return redirect('/pulsa/tambah_pulsa')
                ->withErrors($validated)
                ->withInput($input);
        } else {
            $no_hp = $request->input("no_hp");
            $nama_provider = $request->input('nama_provider');
            $nominal_beli = $request->input('nominal_beli');
            $nominal_bayar = $request->input('nominal_bayar');

            DB::table('pulsa')->Insert([
                'no_hp' => $no_hp,
                'nama_provider' => $nama_provider,
                'nominal_beli' => $nominal_beli,
                'nominal_bayar' => $nominal_bayar,
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('y-m-d H:i:s'),
            ]);
          
            
            if ($nominal_bayar > $nominal_beli) {
                return redirect('/pulsa')->with('berhasil', "Data Pengguna Berhasil Disimpan");
            }
            else{
                echo"gagal";
            }
        }
    }

}
