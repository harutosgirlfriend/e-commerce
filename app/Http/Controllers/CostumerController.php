<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
        public function index()
    {
       

        // Kirim ke view
        return view('costumer.dashboard');  
    }
}
