@extends('layouts.app')

@section('content')
<style>
    .obj-frame {
        background-color: #f0f0f0; 
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .sector-list {
        list-style-type: none;
        padding: 0;
    }

    .sector-list li {
        margin-bottom: 10px;
    }

    .sector-list li a {
        display: block;
        padding: 15px;
        border-radius: 5px;
        background-color: #fff;
        color: #333;
        transition: all 0.3s ease;
    }

    .sector-list li a:hover {
        background-color: #f0f0f0;
        color: #555;
    }
</style>

<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5 obj-frame">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">{{__('messages.LEPAS MENENGAH')}}</h1>
            </div>
        </div>
    </div>

    <div class="container py-3 obj-frame animated fadeIn">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mb-3">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                    <h1 class="display-6 mb-0">{{__('messages.Pendidikan Lepas Menengah')}}</h1><br>
                    <h4 class="display-6 mb-0">{{__('messages.Tingkatan 6')}}</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="obj-frame" id="pra-sekolah-accordion">
                    <ul class="sector-list">

                        <!-- Latar Belakang -->
                        <li>
                            <a href="{{ url('/lepas_menengah/latar_lepas_menengah') }}">{{__('messages.Latar Belakang')}}</a>
                        </li>

                        <!-- Objektif -->
                        <li>
                            <a href="{{ url('/lepas_menengah/objektif_lepas_menengah') }}">{{__('messages.Objektif')}}</a>
                        </li>

                        <!-- Matlamat -->
                        <li>
                            <a href="{{ url('/lepas_menengah/matlamat') }}">{{__('messages.Matlamat')}}</a>
                        </li>

                        <!-- Piagam Pelanggan Kemasukan Murid Ke Tingkatan 6 -->
                        <li>
                            <a href="{{ url('/lepas_menengah/piagam') }}">{{__('messages.Piagam Pelanggan Kemasukan Murid Ke Tingkatan 6')}}</a>
                        </li>

                        <!-- Kerangka Konseptual -->
                        <li>
                            <a href="{{ url('/lepas_menengah/kerangka_konseptual') }}">{{__('messages.Kerangka Konseptual')}}</a>
                        </li>

                        <!-- Syarat Kemasukan -->
                        <li>
                            <a href="{{ url('/lepas_menengah/syarat') }}">{{__('messages.Syarat Kemasukan')}}</a>
                        </li>

                        <!-- Penjenamaan Semula -->
                        <li>
                            <a href="{{ url('/lepas_menengah/penjenamaan') }}">{{__('messages.Penjenamaan Semula')}}</a>
                        </li>

                        <!-- Tempoh Pengajian -->
                        <li>
                            <a href="{{ url('/lepas_menengah/tempoh') }}">{{__('messages.Tempoh Pengajian')}}</a>
                        </li>

                        <!-- Pusat Tingkatan 6 -->
                        <li>
                            <a href="{{ url('/lepas_menengah/pusat_tingkatan6') }}">{{__('messages.Pusat Tingkatan 6')}}</a>
                        </li>

                        <!-- Kurikulum -->
                        <li>
                            <a href="{{ url('/lepas_menengah/kurikulum') }}">{{__('messages.Kurikulum')}}</a>
                        </li>

                        <!-- Kokurikulum -->
                        <li>
                            <a href="{{ url('/lepas_menengah/kokurikulum') }}">{{__('messages.Kokurikulum')}}</a>
                        </li>

                        <!-- Pentaksiran & Yuran -->
                        <li>
                            <a href="{{ url('/lepas_menengah/pentaksiran_yuran') }}">{{__('messages.Pentaksiran & Yuran')}}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
