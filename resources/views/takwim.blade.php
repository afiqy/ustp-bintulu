@extends('layouts.app')
@section('content')
<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Kalendar</h1>
            </div>
        </div>
    </div>

    <!-- Takwim Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                        <h4 class="display-5 mb-0">Takwim</h4>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="d-flex align-items-start">
                        <embed src="/RUMUSAN AKTIVITI UTAMA DALAM TAKWIM PENGURUSAN PPD BINTULU TAHUN 2024.pdf" type="application/pdf" width="100%" height="300px" />
                    </div>
                    <div class="text-center">
                        <div class="pdf-title">RUMUSAN AKTIVITI UTAMA DALAM TAKWIM PENGURUSAN PPD BINTULU TAHUN 2024</div>
                        <a href="/RUMUSAN AKTIVITI UTAMA DALAM TAKWIM PENGURUSAN PPD BINTULU TAHUN 2024.pdf" class="btn btn-primary mt-3" download>Muat Turun Takwim</a>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="d-flex align-items-start">
                        <embed src="/TAKWIM PENGURUSAN PPD BINTULU TAHUN 2024.pdf" type="application/pdf" width="100%" height="300px" />
                    </div>
                    <div class="text-center">
                        <div class="pdf-title">TAKWIM PENGURUSAN PPD BINTULU TAHUN 2024</div> <br>
                        <a href="/TAKWIM PENGURUSAN PPD BINTULU TAHUN 2024.pdf" class="btn btn-primary mt-3" download>Muat Turun Takwim</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Takwim End -->
</section>
@endsection
