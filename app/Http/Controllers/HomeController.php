<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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
        'no_hp'=>$request->no_hp,
        'role'=>'customer'
    ]);
return view('admin.login');
    }

    public function login(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
        // Pengguna berhasil login (Auth sudah terisi)

        // Gunakan intended() untuk mengarahkan ke URL yang diinginkan sebelumnya,
        // atau ke /home jika tidak ada
        $request->session()->regenerate();
        
        return redirect()->intended('/cekrole'); // Laravel akan secara otomatis tahu user mana yang login

    } else {
        // Login gagal (email tidak ditemukan atau password salah)
        return redirect()->back()->withErrors('Kredensial tidak valid');
    }

        // $users = Users::where('email', $request->email)->first();
        // if($users){
        //  return Hash::check($request->password, $users->password)? view('costumer.product'): redirect()->back()->withErrors('password salah');

        // }
        // else{
        //     return redirect()->back()->withErrors('email tidak ditemukan');
        // }
     
    
    }
    public function loginView(){
  return view('admin.login');
    }
   public function logout(Request $request)
    {
        Auth::logout(); // 1️⃣ Logout user dari sesi

        $request->session()->invalidate(); // 2️⃣ Hapus semua data sesi

        $request->session()->regenerateToken(); // 3️⃣ Regenerasi token CSRF agar aman

        return redirect('/')->with('status', 'Anda telah logout.'); // 4️⃣ Redirect ke halaman login
    }
 
}
