<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
           public function dashboard()
    {
  

        // Kirim ke view
        return view('admin.template');  
    }
}
