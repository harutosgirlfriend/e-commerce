@extends('template')

@section('title', 'Detail Produk')

@section('content')
    <div class="relative w-full lg:h-[500px] bg-cover bg-center hero-section block">

        <div class="relative z-10  grid lg:grid-cols-2 h-full">
            <div class="card px-30 py-30">
                <h1 class="text-4xl font-bold text-gray-800">Wawan</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis doloremque illo obcaecati animi in ut
                    tempore modi cum assumenda tempora accusantium perferendis quae incidunt enim, ea aliquid porro. Ipsa,
                    id.</p>

            </div>

        </div>

    </div>
    <div class="flex flex-col justify-center items-center ">
        <h1 class="text-4xl font-bold text-gray-800 mb-10">Ada Apa Saja Disini?</h1>
        <div class="best-product flex flex-row justify-center gap-10 py-10 best-pro md:w-full">
            <div class="rounded-md justify-items-center w-70 shadow-xl shadow-[#e4c6ba]/50">

                <img src="{{ asset('../images/best-product2.jpg') }}" alt="" class="object-cover rounded w-70">

                <ul>



                    <li class="px-2 py-3 font-semibold text-center">Stok </li>
                    <p class="py-2 px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae ullam corrupti
                        deleniti tenetur perferendis! Dolores distinctio amet quas accusantium esse! Aliquam tempore ratione
                        labore eius libero eligendi cum molestias velit.</p>

                </ul>
            </div>
            <div class="rounded-md bg- justify-items-center w-70 shadow-xl shadow-[#e4c6ba]/50">

                <img src="{{ asset('../images/best-product2.jpg') }}" alt="" class="object-cover rounded w-70">

                <ul>



                    <li class="px-2 py-3 font-semibold text-center">Stok </li>
                    <p class="py-2 px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae ullam corrupti
                        deleniti tenetur perferendis! Dolores distinctio amet quas accusantium esse! Aliquam tempore ratione
                        labore eius libero eligendi cum molestias velit.</p>

                </ul>
            </div>
            <div class="rounded-md bg- justify-items-center  w-70 shadow-xl shadow-[#e4c6ba]/50">

                <img src="{{ asset('../images/best-product2.jpg') }}" alt="" class="object-cover rounded w-70">

                <ul>



                    <li class="px-2 py-3 font-semibold text-center">Stok </li>
                    <p class="py-2 px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae ullam corrupti
                        deleniti tenetur perferendis! Dolores distinctio amet quas accusantium esse! Aliquam tempore ratione
                        labore eius libero eligendi cum molestias velit.</p>

                </ul>
            </div>

        </div>
    </div>
    <div
        class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-2 items-center header-2 lg:h-[400px] w-full bg-cover bg-[#e4c6ba] shadow-xl shadow-[#e4c6ba]/70 rounded-md">

<p class="px-10 py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas dolorem sed iure nemo aliquam illo eveniet nulla animi velit expedita, possimus maiores ipsum reprehenderit, sint, rerum cum consequuntur. Dolor, iure?</p>

 <img src="{{ asset('../images/ayam.png') }}" alt="" class="object-cover rounded px-10 py-3 block mx-auto">

<p class="px-10 py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas dolorem sed iure nemo aliquam illo eveniet nulla animi velit expedita, possimus maiores ipsum reprehenderit, sint, rerum cum consequuntur. Dolor, iure?</p>
    </div>


@endsection
