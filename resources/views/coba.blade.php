@extends('template')

@section('title', 'Berita dan Promo')

@section('content')
  <div class="flex justify-between bg-gray-100 p-10">
    <div class="berita">
     <h2>beritaaaa</h2>
    <img src="{{ asset('images/product/gambar4.jpg') }}" alt="" class="p-20">   
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, possimus dignissimos minus reprehenderit sapiente dolorem maiores minima earum voluptas, molestiae consequatur dicta ut saepe, recusandae totam deleniti at autem iste.</p>
</div>
<div class="daaftarBerita bg-amber-200 w-1/2 p-10">
    <h1 class="font-bold">Daftar Berita</h1>
    <ul>
        <li> <a href="#" alt="JUdul">JUDUL</a></li>
     
     
    </ul>
    <br>
    <ul>
        <li> <a href="#" alt="JUdul">JUDUL</a></li>
        <li>Tanggal Post 
        </li>
     
    </ul>
   </div>
    </div
@endsection