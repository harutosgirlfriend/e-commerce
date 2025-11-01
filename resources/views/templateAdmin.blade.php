<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Batik Lu-Za</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-atas.jfif" />

    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">



        <aside class="left-sidebar">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src="/assets/images/logos/logo-batik.JFIF" alt="" style="width: 20%;" />
                        <h3 class="mt-1">Lu-Za</h3>
                    </div>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>

                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Admin</span>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin/dashboard">
                                <span><iconify-icon icon="mdi:view-dashboard" class="fs-6"></iconify-icon></span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin/pendaftaran-akun">
                                <span><iconify-icon icon="mdi:account-plus" class="fs-6"></iconify-icon></span>
                                <span class="hide-menu">Pendaftaran Akun</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a class="sidebar-link" href="{{ route('data.product') }}">
                                <span><iconify-icon icon="mdi:currency-usd" class="fs-6"></iconify-icon></span>
                                <span class="hide-menu">Data Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a class="sidebar-link" href="/admin/penghasilan">
                                <span><iconify-icon icon="mdi:currency-usd" class="fs-6"></iconify-icon></span>
                                <span class="hide-menu">Data Penjualan</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a class="sidebar-link" href="/admin/penghasilan">
                                <span><iconify-icon icon="mdi:currency-usd" class="fs-6"></iconify-icon></span>
                                <span class="hide-menu">Penghasilan</span>
                            </a>
                        </li>





                    </ul>
                </nav>
            </div>
        </aside>

        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <div class="container py-30" style="padding-top: 100px;">
                   
                        @yield('content')
                  
                </div>
            </main>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>
