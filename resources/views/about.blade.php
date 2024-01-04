@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __("TENTANG KAMI") }}</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">PENGUMUMAN DAN AKTIVITI PPD BINTULU</h5>
                            <h1 class="display-5 mb-0">AKTIVITI PPD BINTULU</h1>
                        
                        </div>
                        <h4 class="text-body fst-italic mb-4">ANNUAL DINNER PPD BINTULU 2022</h4>
                        <h4 class="text-body fst-italic mb-4">HARI PENDIDIKAN DAN KERJAYA & HARI TERBUKA PPD BINTULU 2023</h4>
                        <h4 class="text-body fst-italic mb-4">SAMBUTAN MAULIDUR RASUL PPD BINTULU 2023</h4>
                        <h4 class="text-body fst-italic mb-4">BIGGEST LOSER PPD BINTULU 2023</h4>
                        <p class="mb-4">MUAT TURUN</p>
                        <div class="row g-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Sektor Pengurusan</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Sektor Pembelajaran
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Sektor Pembangunan Murid</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Sektor Psikologi Dan Kaunseling</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Sektor Pentadsiran Dan Peperiksaan</h5>
                            </div>
                        </div>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                            data-wow-delay="0.6s">Make Appointment</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="img/about.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
            <div class="container">
                <div class="bg-primary p-5">
                    <form class="mx-auto" style="max-width: 600px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark px-4">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </section>
@endsection
