@extends('layouts.app')
@section('content')
<style>
.obj-frame {
    background-color: #f0f0f0; 
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}
</style>
<section>
    <!-- About Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Lepas Menengah</h5>
                        <h5 class="display-5 mb-0">Piagam Pelanggan Kemasukan Murid Ke Tingkatan 6</h5>
                    </div>

                    <div class="obj-frame">
                        <p>Lepasan Sijil Pelajaran Malaysia (SPM) ke Tingkatan 6 menerima tawaran dalam tempoh 19 hari bekerja sebelum tarikh murid mendaftar.</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('lepas_menengah') }}" class="btn btn-primary">Kembali ke Pendidikan Lepas Menengah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
