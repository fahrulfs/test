<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{

    // 1. READ USERS
    public function index()
    {
        $data = DB::table('users')
            ->select('id', 'name', 'email', 'username', 'phone','roles')
            //->limit(10)
            ->get();
        return view('users.data_users', ['data' => $data]);
    }

    // 2. CREATE DATA USERS
    public function tambah_data()
    {
        $header = "ADD DATA USERS";
        return view('users.tambah_data', ['header' => $header]);
    }

    //CREATE --> PROCCESS
    public function proses_tambah_data(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'username' => 'required|unique:users',
            'password' => [
                'required',
                password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ]
        ], [
            'name.required' => "Nama Lengkap Tidak Boleh Kosong",
            'email.required' => "Email Tidak Boleh Kosong",
            'username.required' => "Username Tidak Boleh Kosong",
            'password.required' => "Password Tidak Boleh Kosong",

        ]);
        if ($validated->fails()) {
            $input = $request->all();
            return redirect('/users/tambah_data')
                ->withErrors($validated)
                ->withInput($input);
        } else {
            $name = $request->input("name");
            $email = $request->input('email');
            $username = $request->input('username');
            $password = bcrypt($request->input('password'));
            $phone = $request->input("phone");
            $roles = $request->input("roles");
            DB::table('users')->Insert([
                'name' => $name,
                'email' => $email,
                'username' => $username,
                'phone' => $phone,
                'roles' => $roles,
                'password' => $password,
                'created_at' => date('y-m-d H:i:s'),
                'email_verified_at' => date('y-m-d H:i:s'),
            ]);
            return redirect('/users')->with('berhasil', "Data Pengguna Berhasil Disimpan");
        }
    }

    public function detail_users($id)
    {
        $data = DB::table('users')
            ->where('id', '=', $id)
            ->first();
        print_r($data);
    }


    // 3. EDIT DATA
    public function ubah_data($id)
    {
        $header = "EDIT DATA USERS";
        $data = DB::table('users')
            ->where('id', '=', $id)
            //->limit(10)
            ->first();
        return view('users.ubah_data', [
            'header' => $header,
            'ubah' => $data
        ]);
    }

    // EDIT DATA->PROCCESS

    public function proses_ubah_data(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'username' => 'required',
            'password' => [
                'required',
                password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ]
        ], [
            'name.required' => 'Nama Lengkap Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'username.required' => "Username Tidak Boleh Kosong",
            'email.unique' => "Email Sudah terdaftar,Gunakan email lain",
            'username.unique' => "Username sudah terdaftar, gunakan username lain",

        ]);
        if ($validated->fails()) {
            $input = $request->all();
            return back()
                ->withErrors($validated)
                ->withInput($input);
        } 
        else {
            $users = DB::table('users')
                ->select('password')
                ->where('id', '=', $request->input('id'))
                ->first();
            $id = $request->input('id');
            $name = $request->input('name');
            $email=$request->input('email');
            $username=$request->input('username');
            $password=$request->input('password');
            if(isset($password)){
                $new_password=Hash::make($password);                
            }
            else{
                $new_password=$users->password;
            }
$token=$request->input('_token');
$phone=$request->input('phone');
$roles=$request->input('roles');

DB::table('users')
->where('id',$id)
->update([

'name'=>$name,
'email'=>$email,
'username'=>$username,
'phone'=>$phone,
'roles'=>$roles,
'password'=>$new_password,
'remember_token'=>$token,
'updated_at'=>date('Y-m-d H:i:s'),

]);
            return redirect('/users')->with('berhasil', "Data Pengguna Berhasil Diubah");
        }
    }


}
