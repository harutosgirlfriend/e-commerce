<?php

namespace App\Http\Controllers;
use App\Models\Keranjang;
use App\Models\Product;

use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class ProductController extends Controller
{
  private $product;

      public function index()
    {
       $product = Product::all();

        // Kirim ke view
        return view('costumer.product', ['product' => $product]);  
    }
      public function detail($kode_product)
    {
       $kode_product = Product::find($kode_product);

        // Kirim ke view
    //  var_dump($kode_product);
        return view('costumer.detail', ['product' => $kode_product]);  
    }
      public function kategori($kategori)
    {
       $kategori = Product::where('kategori',$kategori)->get();

        // Kirim ke view
    //  var_dump($kategori);
        return view('costumer.product', ['product' => $kategori]);  
    }
      public function keranjang(Request $request)
    {
    //  $keranjang = new Keranjang;
    //  $keranjang->kode_product = $request->kode_product;
    //  $keranjang->jumlah = $request->jumlah;
    //  if( $keranjang->save()){
    //   alert('data berhasil disimpan');
    //  }
    dd($request->jumlah);

        return redirect()->back();
          
    }
}
