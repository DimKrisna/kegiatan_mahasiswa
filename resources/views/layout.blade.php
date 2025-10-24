<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-nav-layout="vertical"
    data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-vertical-style="closed"
    data-toggled="close-menu-close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ ($title ? $title . ' | ' : '') . config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ assets('favicon_uty.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ assets('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ assets('css/icons.css') }}">
    <link rel="stylesheet" href="{{ assets('libs/simplebar/simplebar.min.css') }}">
    <link rel="stylesheet" href="{{ assets('libs/datatables/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ assets('libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ assets('libs/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ assets('libs/notif/notifIt.css') }}" />
    <link rel="stylesheet" href="{{ assets('libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ assets('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ assets('css/custom.css') }}">
    @routes
</head>

<body>
    <div id="loader">
        <img src="{{ assets('image/loader.svg') }}" alt="">
    </div>

    <div class="page">
        <header class="app-header">
            <div class="main-header-container container-fluid">
                <div class="header-content-left">
                    <div class="header-element">
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);">
                            <i class="header-icon fe fe-align-left"></i>
                        </a>
                    </div>
                </div>
                <div class="header-content-right">
                    <div class="header-element Search-element d-block d-lg-none">
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="header-link-icon">
                                <path
                                    d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="header-element header-theme-mode">
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24"
                                    viewBox="0 -960 960 960" width="24">
                                    <path
                                        d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
                                </svg>
                            </span>
                            <span class="dark-layout">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" fill="currentColor"
                                    height="24" viewBox="0 -960 960 960" width="24">
                                    <path
                                        d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="header-element header-fullscreen">
                        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="full-screen-open full-screen-icon header-link-icon" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="currentColor">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="full-screen-close full-screen-icon header-link-icon d-none" fill="currentColor"
                                height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M320-200v-120H200v-80h200v200h-80Zm240 0v-200h200v80H640v120h-80ZM200-560v-80h120v-120h80v200H200Zm360 0v-200h80v120h120v80H560Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="header-element headerProfile-dropdown">
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            {{-- <img src="{{ asset('image/user.png') }}" alt="img" width="37" height="37"
                                class="rounded-circle"> --}}
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}&background=0D8ABC&color=fff"
                                alt="img" width="37" height="37" class="rounded-circle">
                        </a>
                        <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu"
                            aria-labelledby="mainHeaderProfile">
                            <li>
                                <div class="main-header-profile bg-primary menu-header-content text-fixed-white">
                                    <div class="my-auto">
                                        @if (Auth::check())
                                            <h6 class="mb-0 lh-1 text-fixed-white">
                                                Welcome <b>{{ Auth::user()->username_display }}</b>
                                            </h6>
                                        @else
                                            <script>
                                                window.location = "{{ route('login') }}";
                                            </script>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex border-block-end" href="#"
                                    data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                    <i class="fa-solid fa-user-gear fs-18 ms-2 me-2 op-7"></i>
                                    Ganti Password
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                    class="dropdown-item d-flex">
                                    <i class="fa-solid fa-right-from-bracket fs-18 ms-2 me-2 op-7"></i>
                                    Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <aside class="app-sidebar sticky" id="sidebar">
            <div class="main-sidebar-header">
                <a>
                    <strong> <img src="/image/logouty-baru.png" style="width: 25%; height: auto;"> SIMAHA UTY</strong>
                </a>
            </div>
            <div class="main-sidebar" id="sidebar-scroll">
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Beranda -->
                        <li class="slide__category"><span class="category-name">Dashboard</span></li>
                        <li class="slide">
                            @php
                                $homeRoute = 'login';

                                if (Auth::check()) {
                                    $roleId = Auth::user()->id_role;

                                    switch ($roleId) {
                                        case 1: // Ormawa
                                            $homeRoute = 'ormawa.home';
                                            break;
                                        case 2: // Kemahasiswaan
                                            $homeRoute = 'kemahasiswaan.home';
                                            break;
                                        default:
                                            $homeRoute = 'login';
                                            break;
                                    }
                                }
                            @endphp

                            <a href="{{ route($homeRoute) }}" class="side-menu__item">
                                <i class="fa-solid fa-house-chimney sidemenu_icon"></i>
                                <span class="side-menu__label">Beranda</span>
                            </a>
                        </li>

    @foreach ($menus as $list)
        <!-- Judul kategori -->
        <li class="slide__category">
            <span class="category-name">{{ $list->menu_kategori }}</span>
        </li>

        @foreach ($list->list as $item)
            @php
                // Cek apakah ada sub yang aktif
                $hasActiveSub = collect($item->sub)->contains(function ($sub) {
                    return $sub->sub_url && request()->is(trim($sub->sub_url, '/') . '*');
                });

                // Cek parent aktif
                $isActiveParent = ($item->url && request()->is(trim($item->url, '/') . '*')) || $hasActiveSub;
            @endphp

            <li class="slide {{ count($item->sub) > 0 ? 'has-sub' : '' }} {{ $isActiveParent ? 'open is-expanded' : '' }}">
                <a href="{{ $item->url && $item->url != '#' ? url($item->url) : 'javascript:void(0)' }}"
                   class="side-menu__item {{ $isActiveParent ? 'active' : '' }}">
                    <i class="{{ $item->icon }} sidemenu_icon"></i>
                    <span class="side-menu__label">{{ $item->menu }}</span>

                    @if (count($item->sub) > 0)
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    @endif
                </a>

                @if (count($item->sub) > 0)
                    <ul class="slide-menu child1" style="{{ $isActiveParent ? 'display:block;' : '' }}">
                        @foreach ($item->sub as $sub)
                            <li class="slide">
                                <a href="{{ $sub->sub_url && $sub->sub_url != '#' ? url($sub->sub_url) : 'javascript:void(0)' }}"
                                   class="side-menu__item {{ $sub->sub_url && request()->is(trim($sub->sub_url, '/') . '*') ? 'active' : '' }}">
                                    {{ $sub->sub_menu }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    @endforeach


                    </ul>


                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
            </div>
        </aside>
        <div class="main-content app-content">
            {{ $slot }}
        </div>
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © {{ date('Y') }}</span>
            </div>
        </footer>
    </div>

    <a href="javascript:void(0)" class="scrollToTop">
        <span class="arrow"><i class="fa-solid fa-arrow-up text-white"></i></span>
    </a>
    <div id="responsive-overlay"></div>
    <script src="{{ assets('libs/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ assets('libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ assets('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ assets('js/defaultmenu.min.js') }}"></script>
    <script src="{{ assets('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ assets('js/simplebar.js') }}"></script>
    <script src="{{ assets('libs/axios.min.js') }}"></script>
    <script src="{{ assets('libs/select2/select2.min.js') }}"></script>
    <script src="{{ assets('libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ assets('libs/datatables/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ assets('libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ assets('libs/notif/notifIt.js') }}"></script>
    <script src="{{ assets('libs/notif/notifit-alert.js') }}"></script>
    <script src="{{ assets('libs/parsley-js/parsley.min.js') }}"></script>
    <script src="{{ assets('libs/parsley-js/i18n/id.js') }}"></script>
    <script src="{{ assets('libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ assets('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    @if (session('success'))
        <script>
            alert_success("{{ session('success') }}");
        </script>
    @endif
    @if (session('error'))
        <script>
            alert_error("{{ session('error') }}");
        </script>
    @endif
    @stack('scripts')

</body>

</html>
<!-- Modal Ganti Password -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('reset.password') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordLabel">Ganti Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="current_password" class="form-label">Password Lama</label>
                        <div class="input-group">
                            <input type="password" name="current_password" id="current_password"
                                class="form-control" required>
                            <button class="btn toggle-password" type="button" data-target="current_password">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="new_password" class="form-label">Password Baru</label>
                        <div class="input-group">
                            <input type="password" name="new_password" id="new_password" class="form-control"
                                required>
                            <button class="btn toggle-password" type="button" data-target="new_password">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                        <div class="input-group">
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                class="form-control" required>
                            <button class="btn toggle-password" type="button"
                                data-target="new_password_confirmation">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButtons = document.querySelectorAll(".toggle-password");

        toggleButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const targetId = this.getAttribute("data-target");
                const input = document.getElementById(targetId);
                const icon = this.querySelector("i");

                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                } else {
                    input.type = "password";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
            });
        });
    });
</script>
