@extends('template')

@section('title', 'Detail Produk')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-2 bg-gray-100 justify-items-stretch p-10">


        <div class="card rounded-md bg-white justify-items-center p-10">

            <img src="{{ asset('images/product/' . $product->gambar) }}" alt="{{ $product->nama_product }}"
                class="object-cover rounded">


        </div>
        <div class="card rounded-md bg-white justify-items-center py-5">


            <h1 class="px-2 py-3 font-bold" id="nama_product">{{ $product->nama_product }}</h1>
            <h1 class="px-2 py-3 font-bold hidden" id="kode_product">{{ $product->kode_product }}</h1>

            <h2 class="font-thin">Jumlah</h2>

            <div class="flex items-center">
                <button class="kurangi border border-gray-400 px-2 py-2 mx-0">-</button>
                <span class="jumlah border-y border-gray-400 px-2 py-2  mx-0" id="jumlah" data-jumlah="0">0</span>
                <button class="tambah border border-gray-400 px-2 py-2  mx-0">+</button>
            </div>
            <form action="{{ route('simpan.keranjang') }}" method="POST" id="formKeranjang">
                @csrf
                <button type="submit" class=" flex items-center border border-indigo-500 p-3 my-5" id="keranjang"
                    data-kode={{ $product->kode_product }}>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 2.25h1.386c.51 0 .96.343 1.09.835l.383 1.437m0 0 1.35 5.072a2.25 2.25 0 0 0 2.183 1.706h8.647a2.25 2.25 0 0 0 2.183-1.706l1.35-5.072H5.109Zm3.141 12a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm9.75 0a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" />
                    </svg>
                
                    <span class="font-semibold ">TAMBAHKAN KE KERANJANG</span>

                </button>
            </form>
            <button class="p-3 bg-indigo-500 flex justify-items-center">
                <span class="font-semibold P-3">BELI SEKARANG</span>
            </button>
            <hr class="my-5  border-1/2 border-gray-500 w-full mx-3">

            <div class="deskripsi p-5">
                <p>{{ $product->deskripsi }}</p>
            </div>


        </div>

    </div>

@endsection
