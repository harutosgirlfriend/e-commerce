<?php

namespace App\Http\Controllers;
use App\Models\BeritaPromo;

use Illuminate\Http\Request;

class BeritaPromoController extends Controller
{
       public function index()
    {
       $beritaPromo = BeritaPromo::all();

        // Kirim ke view
        return view('costumer.beritapromo', ['beritaPromo' => $beritaPromo]);  
    }
}
