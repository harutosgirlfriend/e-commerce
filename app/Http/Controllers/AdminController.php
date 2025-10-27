<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
public function dashboard()
    {
        return view('templateAdmin');  
    }
    public function registrasi(){
        return view('admin.registrasiAkun');
    }
}
