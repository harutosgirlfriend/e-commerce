@extends('template')

@section('title', 'Daftar Produk')

@section('content')
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 bg-gray-100 justify-items-stretch p-10">

        @foreach ($product as $p)
            <a href="{{ route('detail', ['kode_product' => $p->kode_product]) }}">
                <div class="card rounded-md bg-white justify-items-center">

                    <img src="{{ asset('images/product/' . $p->gambar) }}" alt="{{ $p->nama_product }}"
                        class="object-cover rounded">

                    <ul>

                        <li class="px-2 py-3">{{ $p->nama_product }}</li>
                        <li class="px-2 py-3">{{ $p->kode_product }}</li>

                    </ul>
                </div>
            </a>
        @endforeach


    </div>


@endsection
