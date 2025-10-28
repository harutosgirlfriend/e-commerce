@extends('templateAdmin')



@section('content')

    
    <div class="col-span-1 xl:col-span-1 md:col-span-6">
        <div class="card">
            <div class="flex justify-between card-header !pb-0 !border-b-0">
                <h5>Data Product</h5>
                <button class="px-4 py-2 border bg-purple-300 hover:text-white transition">Tambah</button>
            </div>
            <div class="card-body table">

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border-collapse min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider border border-gray-300">
                                    Nama
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    gambar
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    stok
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    deskripsi
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    kategori
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    harga
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700">
                            @foreach ($products as $product)
                                 <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 ">{{ $product->nama_product }}</td>
                                <td class="px-6 py-4 h-16 w-16"> <img src=" {{ asset('images/product/' . $product->gambar) }}" alt="">
                                </td>
                                <td class="px-6 py-4 ">{{ $product->stok }}</td>
                                <td class="px-6 py-4 ">{{ $product->deskripsi }}</td>
                                <td class="px-6 py-4 ">{{ $product->kategori }}</td>
                                <td class="px-6 py-4 ">{{ $product->harga }}</td>
                               
                            </tr>
                            @endforeach
                           
                           
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


@endsection