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
                <h1 class="display-3 text-white animated zoomIn">{{__('messages.pra_sekolah')}}</h1>
            </div>
        </div>
    </div>

    <div class="container py-3 obj-frame animated fadeIn">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mb-3">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                    <h1 class="display-6 mb-0">{{__('messages.Pendidikan Prasekolah')}}</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="obj-frame" id="pra-sekolah-accordion">
                    <ul class="sector-list">

                        <!-- Objektif Pendidikan Prasekolah -->
                        <li>
                            <a href="{{ url('/prasekolah/objektif') }}">{{__('messages.Objektif Pendidikan Prasekolah')}}</a>
                        </li>

                        <!-- Latar Belakang -->
                        <li>
                            <a href="{{ url('/prasekolah/latar_belakang') }}">{{__('messages.Latar Belakang')}}</a>
                        </li>

                        <!-- Matlamat -->
                        <li>
                            <a href="{{ url('/prasekolah/matlamat') }}">{{__('messages.Matlamat Pendidikan Prasekolah')}}</a>
                        </li>

                        <!-- Dasar Pendidikan Prasekolah-->
                        <li>
                            <a href="{{ url('/prasekolah/dasar_pra') }}">{{__('messages.Dasar Pendidikan Prasekolah')}}</a>
                        </li>

                        <!-- Konsep Pendidikan Prasekolah -->
                        <li>
                            <a href="{{ url('/prasekolah/konsep') }}">{{__('messages.Konsep Pendidikan Prasekolah')}}</a>
                        </li>

                        <!-- Semak Keputusan Permohonan -->
                        <li>
                            <a href="{{ url('/prasekolah/keputusan') }}">{{__('messages.Semak Keputusan Permohonan')}}</a>
                        </li>

                        <!-- Permohonan Kemasukan Ke Kelas Prasekolah KPM -->
                        <li>
                            <a href="{{ url('/prasekolah/permohonan') }}">{{__('messages.Permohonan Kemasukan Ke Kelas Prasekolah KPM')}}</a>
                        </li>

                        <!-- Maklumat Prasekolah -->
                        <li>
                            <a href="{{ url('/prasekolah/maklumat_pra') }}">{{__('messages.Maklumat Prasekolah')}}</a>
                        </li>

                        <!-- Pemilihan Murid -->
                        <li>
                            <a href="{{ url('/prasekolah/pemilihan') }}">{{__('messages.Pemilihan Murid')}}</a>
                        </li>

                        <!-- Sistem Maklumat Prasekolah Kebangsaan -->
                        <li>
                            <a href="{{ url('/prasekolah/sistem') }}">{{__('messages.Sistem Maklumat Prasekolah Kebangsaan')}}</a>
                        </li>

                        <!-- Add other accordion items in a similar manner -->

                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
