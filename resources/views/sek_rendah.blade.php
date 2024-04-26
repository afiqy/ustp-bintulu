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
                <h1 class="display-3 text-white animated zoomIn">SEKOLAH RENDAH</h1>
            </div>
        </div>
    </div>

    <div class="container py-3 obj-frame animated fadeIn">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mb-3">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                    <h1 class="display-6 mb-0">Pendidikan Sekolah Rendah</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="obj-frame" id="pra-sekolah-accordion">
                    <ul class="sector-list">

                        <!-- Pendaftaran -->
                        <li>
                            <a href="{{ url('/sekolah_rendah/pendaftaran') }}">Pendaftaran</a>
                        </li>

                        <!-- Dasar Pengoperasian Pendidikan Rendah Wajib -->
                        <li>
                            <a href="{{ url('/sekolah_rendah/dasar_op') }}">Dasar Pengoperasian Pendidikan Rendah Wajib</a>
                        </li>

                        <!-- Dasar Pengoperasian Pengecualian Daripada Mengikuti Pendidikan Wajib (Penangguhan Ke Tahun 1) -->
                        <li>
                            <a href="{{ url('/sekolah_rendah/dasar_pengecualian') }}">Dasar Pengoperasian Pengecualian Daripada Mengikuti Pendidikan Wajib (Penangguhan Ke Tahun 1)</a>
                        </li>

                        <!-- Dasar Pengoperasian Kemasukan Awal Kanak-Kanak Di Bawah Umur Ke Tahun 1 -->
                        <li>
                            <a href="{{ url('/sekolah_rendah/dasar_kemasukan_awal') }}">Dasar Pengoperasian Kemasukan Awal Kanak-Kanak Di Bawah Umur Ke Tahun 1</a>
                        </li>

                        <!-- Permohonan Pengecualian Daripada Mengikuti Pendidikan Wajib Di Peringkat Rendah Dan Menjalankan Persekolahan Di Rumah (Home Schooling) -->
                        <li>
                            <a href="{{ url('/sekolah_rendah/home_school') }}">Permohonan Pengecualian Daripada Mengikuti Pendidikan Wajib Di Peringkat Rendah Dan Menjalankan Persekolahan Di Rumah (Home Schooling)</a>
                        </li>

                        <!-- Add other list items for navigation -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
