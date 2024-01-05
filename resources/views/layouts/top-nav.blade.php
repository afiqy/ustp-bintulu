@section('page-topnav')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0 float-left">
                <div class="d-inline-flex align-items-center float-left">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Waktu Operasi: Isnin-Jumaat : 8.00 pagi
                        - 5.00 petang, Sabtu & Ahad Tutup </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end float-right">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5 float-right">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>ppdbintulu@moe.gov.my</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+6086 331 627</p>
                    </div>
                    <div class="ms-4 py-2 me-0">
                        <a class="languange_item @if(App::getLocale() == 'bm') active @endif" href="{{ route('locale', 'bm') }}">BM</a> |
                        <a class="languange_item @if(App::getLocale() == 'en') active @endif" href="{{ route('locale', 'en') }}">EN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            {{-- <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>Pejabat Pendidikan Daerah Bintulu</h1> --}}
            <img src="{{ asset('img/loggo.jpg') }}" alt="Pejabat Pendidikan Daerah Bintulu" style="max-height: 6rem !important;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link @if(\Request::route()->getName() == 'home') active @endif">{{ __('UTAMA') }}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle @if(\Request::route()->getName() == 'price' || \Request::route()->getName() == 'team' || \Request::route()->getName() == 'testimonial' || \Request::route()->getName() == 'appointment') active @endif" data-bs-toggle="dropdown">{{ __('KORPORAT')}}</a>
                    <div class="dropdown-menu m-0" style="top: 75% !important;">
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('CARTA ORGANISASI') }}</a>
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('FALSAFAH PENDIDIKAN KEBANGSAAN') }}</a>
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('PEGAWAI PPD') }}</a>
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('STAFF PPD BINTULU') }}</a>
                        <a href="{{ route('about') }}" class="dropdown-item @if(\Request::route()->getName() == 'about') active @endif">{{ __('SEKTOR DAN UNIT') }}</a>
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('SEJARAH PPD') }}</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle @if(\Request::route()->getName() == 'price' || \Request::route()->getName() == 'team' || \Request::route()->getName() == 'testimonial' || \Request::route()->getName() == 'appointment') active @endif" data-bs-toggle="dropdown">{{ __('PENDIDIKAN')}}</a>
                    <div class="dropdown-menu m-0" style="top: 75% !important;">
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('SEKOLAH MENENGAH') }}</a>
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('SEKOLAH RENDAH') }}</a>
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('PRA SEKOLAH') }}</a>
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('PENDIDIKAN KHAS') }}</a>
                    </div>
                </div>
                <a <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle @if(\Request::route()->getName() == 'price' || \Request::route()->getName() == 'team' || \Request::route()->getName() == 'testimonial' || \Request::route()->getName() == 'appointment') active @endif" data-bs-toggle="dropdown">{{ __('KALENDAR')}}</a>
                    <div class="dropdown-menu m-0" style="top: 75% !important;">
                        <a href="{{ route('organizational_chart') }}" class="dropdown-item @if(\Request::route()->getName() == 'organizational_chart') active @endif">{{ __('CARTA ORGANISASI') }}</a>
                    </div>
                </div>
                
            </div>
            {{-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></button> --}}
            <div class="dropdown user_dropdown show ms-4">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-solid fa-user"></i>
                </a>
                
                <div class="dropdown-menu user_dropdown_menu" aria-labelledby="dropdownMenuLink" style="top: 150%">
                    @if(Auth::check())
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{ __('RUANG ADMIN') }}</a>
                        <a class="dropdown-item" href="#">{{ __('PROFIL PENGGUNA') }}</a>
                        <a class="dropdown-item" data-toggle="modal" style="cursor:pointer;"
                            data-target="#confirmLogout" title="{{ __('Log Keluar') }}">{{ __('LOG KELUAR') }}</a>
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('LOG MASUK') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Confirm Logout Modal -->
    <div class="modal fade" id="confirmLogout" tabindex="-1" role="dialog" aria-labelledby="confirmLogoutLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comfirmLogoutModalLabel">{{ __("Log Keluar") }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __("Anda pasti ingin log keluar?")}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("Tutup") }}</button>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __("Pasti") }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
