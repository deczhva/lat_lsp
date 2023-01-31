<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>

    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="/assets/css/shared/iconly.css">

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
                            
                            <div class="form-check form-switch fs-6" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
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
                                    <a href="#">Daftar Peminjaman Buku</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge.html">Riwayat Peminjaman Buku</a>
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
            <header class="mb-3">
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </div>
                </nav>
            </header>

            @yield('main')

        </div>
    </div>
    <script src="/assets/js/app.js"></script>

    <script src="/assets/js/pages/dashboard.js"></script>

</body>

</html>