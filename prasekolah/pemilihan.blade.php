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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Prasekolah</h5>
                        <h1 class="display-5 mb-0">Pemilihan Murid</h1>
                    </div>

                    <div class="obj-frame">
                        <h5>Syarat-syarat kemasukan murid ke kelas prasekolah adalah seperti berikut:</h5>
                        <ul>
                            <li>Surat Siaran Kementerian Pelajaran Malaysia Bil. 2 Tahun 2012 - Hanya untuk Warganegara Malaysia sahaja dan dipilih menerusi JK Pemilihan.</li>
                        </ul>
                        <h5>Jawatankuasa Pemilihan murid dianggotai oleh:</h5>
                        <ul>
                            <li>Guru Besar</li>
                            <li>Penolong Kanan</li>
                            <li>Guru Prasekolah</li>
                            <li>Guru Tahap 1 dan 2</li>
                            <li>PPM</li>
                            <li>Seorang wakil komuniti</li>
                        </ul>
                    </div> <!-- Closing .obj-frame -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>
@endsection
