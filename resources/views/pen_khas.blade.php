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

    .accordion-button:hover {
        color: #007bff; /* Change to the desired color */
        text-decoration: underline; /* Add underline effect */
    }
</style>

<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5 obj-frame">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">PENDIDIKAN KHAS</h1>
            </div>
        </div>
    </div>

    <div class="container py-3 obj-frame animated fadeIn">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mb-3">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                    <h1 class="display-6 mb-0">Pendidikan Khas</h1><br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="obj-frame" id="pra-sekolah-accordion">
                    <ul class="sector-list">
                        <!-- Sekolah Pendidikan Khas -->
                        <li>
                            <a href="{{ url('/pen_khas/sek_khas') }}">Sekolah Pendidikan Khas</a>
                        </li>
                        <!-- Program Pendidikan Khas Integrasi   -->
                        <li>
                            <a href="{{ url('/pen_khas/integrasi') }}">Program Pendidikan Khas Integrasi</a>
                        </li>
                        <!-- Program Pendidikan Inklusif  -->
                        <li>
                            <a href="{{ url('/pen_khas/inklusif') }}">Program Pendidikan Inklusif</a>
                        </li>
                        <!-- Pendidikan Islam Dalam Pendidikan Khas   -->
                        <li>
                            <a href="{{ url('/pen_khas/pen_islam') }}">Pendidikan Islam Dalam Pendidikan Khas</a>
                        </li>
                        <!-- Pusat Perkhidmatan Pendidikan Khas (3PK) -->
                        <li>
                            <a href="{{ url('/pen_khas/PPK') }}">Pusat Perkhidmatan Pendidikan Khas (3PK)</a>
                        </li>
                        <!-- Rancangan Pendidikan Individu -->
                        <li>
                            <a href="{{ url('/pen_khas/rancangan') }}">Rancangan Pendidikan Individu</a>
                        </li>
                        <!-- Pusat Sumber Bahagian Pendidikan Khas -->
                        <li>
                            <a href="{{ url('/pen_khas/pusat_sumber') }}">Pusat Sumber Bahagian Pendidikan Khas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
