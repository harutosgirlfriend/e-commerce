<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

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
    'email' => 'required|email|unique:users.email',
    'nama' => 'required|string',
    'password'=> 'required|min:8|confirmed'
],
[
    'name.required'=> 'Nama wajib diisi',
    'email.required'=>'Email wajib diisi',
    'email.email'=>'Format email tidak valid',
    'email.unique'=>'Email sudah terdaftar, silahkan gunakan email lain',
    'password.required' => 'Password waib diisi',
    'password.min'=> 'Password minimal 8 karakter',
    'password.confirm'=>'Konfirmasi Kata sandi tidak cocok'
    ]);

    
    Users::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password
    ]);

    }
}
