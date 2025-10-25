<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
     public function index()
    {
       

        // Kirim ke view
        return view('admin.regis', );  
    }


    public function regis(Request $request ){
    $validation = $request->validate(
[
    'email' => 'unique:users,email',
    'nama' => 'string',
    'password'=> 'min:8|confirmed',
    'no_hp'=> 'numeric|digits_between:12,13'
        ],
[
    'email.unique'=>'Email sudah terdaftar, silahkan gunakan email lain',
    'password.required' => 'Password waib diisi',
    'password.min'=> 'Password minimal 8 karakter',
    'password.confirm'=>'Konfirmasi Kata sandi tidak cocok',
    'no_hp.numeric'=> 'harus berisi nomor',
    'no_hp.digits_between' => 'Nomor HP harus berisi antara 12 sampai 13 angka.',

    ]);


    Users::create([
        'nama'=>$request->nama,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'no_hp'=>$request->no_hp
    ]);
return view('admin.login');
    }

    public function login(Request $request){



        $users = Users::where('email', $request->email)->first();
        if($users){
         return Hash::check($request->password, $users->password)? view('costumer.product'): redirect()->back()->withErrors('password salah');

        }
        else{
            return redirect()->back()->withErrors('email tidak ditemukan');
        }
     
    
    }
    public function loginView(){
  return view('admin.login');
    }
 
}
