<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])
<style>
  
    @media (max-width: 600px) {
    .hero-section {
         height: 600px;
 background-image: url('/images/hero-mobile.svg');
    }
}
    @media (min-width: 601px) {
   .hero-section{
        background-image: url('/images/hero-md.svg');
      height: 500px;
    }
 
}
    @media (min-width: 1024px) {
   .hero-section{
        background-image: url('/images/hero-lg.svg');
      height: 680px;
    }
 
}
</style>
</head>

<body class="p-8 w-auto">

    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <nav class="relative bg-[#e4c6ba]">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500 menu">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center  sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company" class="h-8 w-auto" />
                    </div>
                    <div class="hidden sm:ml-6 lg:pl-60 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            <a href="{{ route('dashboard') }}" aria-current="page"
                                class="rounded-md tombol px-3 py-2 text-sm font-medium  hover:text-white">Dashboard</a>
                            <a href="{{ route('product') }}"  
                                class="rounded-md tombol px-3 py-2 text-sm font-medium {{ request()->routeIs('product') ? 'bg-gray-600 text-white' : 'text-gray-800 hover:bg-white/5 hover:text-white' }}">Produk</a>

                            <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->

                            <el-dropdown class="inline-block">
                                <button
                                    class="tombol px-3 py-2 inline-flex justify-center text-sm rounded-md font-medium {{ request()->routeIs('product.kategori') ? 'bg-gray-600 text-white' : 'text-gray-800 hover:bg-white/5 hover:text-white' }} hover:text-white">
                                    Kategori
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="-mr-1 size-5 text-gray-400 tombol">
                                        <path
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                </button>

                                <el-menu anchor="bottom end" popover
                                    class="w-56 origin-top-right rounded-md bg-white shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                                    <div class="py-1">
                                        <a href="{{ route('product.kategori', ['kategori' => 'ayam hidup']) }}"
                                          class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Ayam
                                            Hidup</a>
                                        <a href="{{ route('product.kategori', ['kategori' => 'ayam potong']) }}"
                                            class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Ayam
                                            Potong</a>
                                        <a href="{{ route('product.kategori', ['kategori' => 'telur']) }}"
                                            class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Telur
                                            Ayam</a>
                                    </div>
                                </el-menu>
                            </el-dropdown>



                            <a href="{{ route('beritapromo') }}"
                                class="rounded-md tombol px-3 py-2 text-sm font-medium {{ request()->routeIs('beritapromo') ? 'bg-gray-600 text-white' : 'text-gray-800 hover:bg-white/5 hover:text-white' }} hover:bg-white/5 hover:text-white">Berita
                                & Promo</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button" class="relative rounded-full p-1 text-gray-100 keranjang">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Lihat Keranjang</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 2.25h1.386c.51 0 .956.343 1.09.835l.383 1.435M7.5 14.25h9.75m-9.75 0L6 6.75h12.75a.75.75 0 0 1 .735.91l-1.5 6a.75.75 0 0 1-.735.59H7.5zm0 0L6 6.75m1.5 7.5L5.25 18a.75.75 0 0 0 .75 1h12a.75.75 0 0 0 .75-1l-2.25-3.75" />
                        </svg>

                    </button>

                    <!-- Profile dropdown -->
                    <el-dropdown class="relative ml-3">
                        <button
                            class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 ">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt=""
                                class="size-8 rounded-full bg-gray-800 outline -outline-offset-1 outline-white/10" />
                        </button>

                        <el-menu anchor="bottom end" popover
                            class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your
                                profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign
                                out</a>
                        </el-menu>
                    </el-dropdown>
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                <a href="#" aria-current="page"
                    class="tombol block rounded-md text-gray-900 hover:bg-gray-50 px-3 py-2 text-base font-medium text-gray-800 hover:text-white">Dashboard</a>
                <button type="button" 
                    class="toggle-products flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                    Product
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                        class="size-5 flex-none in-aria-expanded:rotate-180">
                        <path
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                </button>
                <div id="products" hidden class="mt-2 block space-y-2">
                    <a href="#"
                        class="tombol block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-medium text-gray-800 hover:text-white">Ayam Hidup</a>
                    <a href="#"
                        class="tombol block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-medium text-gray-800 hover:text-white">Ayam Potong</a>
                    <a href="#"
                        class="tombol block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-medium text-gray-800 hover:text-white">Telur Ayam</a>
                   
                </div>
                <a href="#"
                    class="tombol block rounded-md px-3 py-2 text-base font-medium font-medium text-gray-800 hover:text-white">Kategori</a>
                <a href="#"
                    class="tombol block rounded-md px-3 py-2 text-base font-medium font-medium text-gray-800 hover:text-white">Calendar</a>
            </div>
        </el-disclosure>
    </nav>
    <div class="container fixed top-25 right-0 hidden w-1/3 h-screen bg-white mx-10">
        <div class="shadow-md rounded p-10  w-full">
            <div class="icon-silang flex justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <h2 class="text-lg font-semibold">Keranjang Anda</h2>
            </div>
            <div class="list overflow-auto">



                <!-- List Item -->
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div class="flex items-center justify-between border-b pb-3">
                        <div class="flex items-center space-x-3">
                            <img src="https://via.placeholder.com/60" alt="Produk"
                                class="w-16 h-16 rounded-md object-cover">
                            <div>
                                <p class="font-medium">Ayam Potong Segar</p>
                                <p class="text-sm text-gray-500">Rp35.000/kg</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold">2x</p>
                            <p class="text-gray-600">Rp70.000</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-center justify-between border-b pb-3">
                        <div class="flex items-center space-x-3">
                            <img src="https://via.placeholder.com/60" alt="Produk"
                                class="w-16 h-16 rounded-md object-cover">
                            <div>
                                <p class="font-medium">Telur Kampung</p>
                                <p class="text-sm text-gray-500">Rp25.000/kg</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold">1x</p>
                            <p class="text-gray-600">Rp25.000</p>
                        </div>
                    </div>
                </div>

                <!-- Total & Tombol Checkout -->
                <div class="mt-6 border-t pt-4">
                    <div class="flex justify-between text-lg font-semibold mb-3">
                        <span>Total</span>
                        <span>Rp95.000</span>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                        Checkout
                    </button>
                </div>

            </div>
        </div>
    </div>

    <main class="w-full ">
        @yield('content')
    </main>


    {{-- <el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
      <div tabindex="0" class="fixed inset-0 focus:outline-none">
        <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto" />
            </a>
            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <div class="-mx-3">
                  <button type="button" command="--toggle" commandfor="products" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                    Product
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none in-aria-expanded:rotate-180">
                      <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                  </button>
                  <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch demo</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact sales</a>
                  </el-disclosure>
                </div>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
              </div>
              <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
              </div>
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog> --}}

 


    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>


</html>
