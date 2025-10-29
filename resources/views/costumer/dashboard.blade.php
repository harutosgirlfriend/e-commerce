@extends('template')

@section('title', 'Detail Produk')

@section('content')
    <div class="relative w-full lg:h-[500px] bg-cover bg-center hero-section">
        
        <div class="relative z-10  grid lg:grid-cols-2 h-full">
            <div class="card px-30 py-30">
                <h1 class="text-4xl font-bold text-gray-800">Wawan</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis doloremque illo obcaecati animi in ut
                    tempore modi cum assumenda tempora accusantium perferendis quae incidunt enim, ea aliquid porro. Ipsa,
                    id.</p>
                
            </div>
        </div>

    </div>
    <div class="relative w-full h-[500px] flex flex-col justify-center items-center">
      <h1 class="text-4xl font-bold text-gray-800">Top 3 Product terlaris</h1>
      <div class="best-product flex flex-row justify-center">
             <div class="card rounded-md bg-white justify-items-center">

                    <img src="{{ asset('../images/best-product2.jpg') }}" alt=""
                        class="object-cover rounded w-70">

                    <ul>

                        <li class="px-2 py-3"></li>
                     
                        <li class="px-2 py-3">Stok </li>

                    </ul>
                </div>
               <div class="card rounded-md bg-white justify-items-center">

                    <img src="{{ asset('../images/best-product2.jpg') }}" alt=""
                        class="object-cover rounded w-70">

                    <ul>

                        <li class="px-2 py-3"></li>
                     
                        <li class="px-2 py-3">Stok </li>

                    </ul>
                </div>
               <div class="card rounded-md bg-white justify-items-center border  border-grey-500">

                    <img src="{{ asset('../images/best-product2.jpg') }}" alt=""
                        class="object-cover rounded w-70">

                    <ul>

                        <li class="px-2 py-3"></li>
                     
                        <li class="px-2 py-3">Stok </li>

                    </ul>
                </div>
                </div>
        </div>


    @endsection
