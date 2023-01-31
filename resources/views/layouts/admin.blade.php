<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard | Admin</title>

        <link rel="stylesheet" href="/assets/css/main/app.css">

        <link rel="shortcut icon" href="/assets/images/logo/favicon.svg" type="image/x-icon">
        <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">
    </head>

    <body>
        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="sidebar-header position-relative">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html" style="font-size: 25px">Perpustakaan</a>
                            </div>
                            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                            opacity=".3"></path>
                                        <g transform="translate(-210 -1)">
                                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                            <circle cx="220.5" cy="11.5" r="4"></circle>
                                            <path
                                                d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="form-check form-switch fs-6" id="toggle-dark">
                                    <label class="form-check-label"></label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                    height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    
                                </svg>
                            </div>
                            <div class="sidebar-toggler  x">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                        class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-title">Menu</li>
    
                            <li class="sidebar-item active ">
                                <a href={{ route('admin.dashboard') }} class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
    
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Data Peminjaman</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="{{ route('admin.peminjaman.form') }}">Daftar Peminjaman Buku</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{ route('admin.peminjaman.riwayat') }}">Riwayat Peminjaman Buku</a>
                                    </li>
                                </ul>
                            </li>
    
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Katalog Buku</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="#">Kategori Buku</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="#">Data Anggota</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="#">Data Penerbit</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="#">Data Administrator</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="#">Data Buku</a>
                                    </li>
                                </ul>
                            </li>
    
                            <li class="sidebar-item  ">
                                <a href="form-layout.html" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-medical-fill"></i>
                                    <span>Laporan Perpustakaan</span>
                                </a>
                            </li>
    
                            <li class="sidebar-item  ">
                                <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-fill"></i>
                                    <span>Pesan</span>
                                </a>
                            </li>
    
                            <li class="sidebar-item  ">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-medical-fill"></i>
                                    <span>Identitas Aplikasi</span>
                                </a>
                            </li>
    
                            <li class="sidebar-item  ">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-medical-fill"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
    
                            <li class="sidebar-item     ">
                                 <a class="sidebar-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <i class="bi bi-arrow-left-square-fill"></i>
                                            {{-- {{ __('Logout') }} --}}
                                            <span>Logout</span>
                                        {{-- </a> --}}
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="main" class="layout-navbar">
                <header class='mb-3'>
                    <nav class="navbar navbar-expand navbar-light ">
                        <div class="container-fluid">
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown me-1">
                                        <a class="nav-link active dropdown-toggle text-gray-600" href="#"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class='bi bi-envelope bi-sub fs-4'></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <h6 class="dropdown-header">Mail</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">No new mail</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown me-3">
                                        <a class="nav-link active dropdown-toggle text-gray-600" href="#"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class='bi bi-bell bi-sub fs-4'></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <h6 class="dropdown-header">Notifications</h6>
                                            </li>
                                            <li><a class="dropdown-item">No notification available</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="dropdown">
                                    <div class="card mt-5 m-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="card-body">
                                    <a href="{{ route('user.profile') }}" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="user-menu d-flex">
                                            <div class="user-name text-end me-3">
                                                <h6 class="mb-0 text-gray-600">{{ Auth::user()->fullname }}</h6>
                                                <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->role }}</p>
                                            </div>
                                            <div class="user-img d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="/assets/images/faces/1.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                </div>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                                        style="min-width: 11rem;">
                                        <li>
                                            <h6 class="dropdown-header">Hello, John!</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="icon-mid bi bi-person me-2"></i> My
                                                Profile</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="icon-mid bi bi-gear me-2"></i>
                                                Settings</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="icon-mid bi bi-wallet me-2"></i>
                                                Wallet</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                @yield('main')
            </div>
            
        </div>
        <script src="/assets/js/app.js"></script>
        
    </body>

    </html>