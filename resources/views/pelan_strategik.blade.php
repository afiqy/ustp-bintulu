@extends('layouts.app')
@section('content')
<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">PELAN STRATEGIK</h1>
            </div>
        </div>
    </div>

    <!-- Pelan Strategik Start -->
    <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase" style="font-size: 30px;">PPD Bintulu</h5>
                    </div>
                </div>

                <div class="col-lg-8 offset-lg-2 mb-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <embed src="/Pelan Strategik.pdf" type="application/pdf" width="100%" height="500px" />
                    </div>
                    <div class="text-center">
                        <div class="pdf-title">Pelan Strategik</div>
                        <a href="/Pelan Strategik.pdf" class="btn btn-primary mt-3" download>Muat Turun Pelan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pelan Strategik End -->
</section>
@endsection
