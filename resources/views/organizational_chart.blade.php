@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __("CARTA ORGANISASI") }}</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Pricing Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">PENGURUSAN TERTINGGI PPD BINTULU</h5>
                            <h1 class="display-10 mb-0">SAMRI BIN SUHAILI</h1>
                            <h1 class="display-10 mb-0">PEGAWAI PENDIDIKAN DAERAH BINTULU</h1>
                            <h1 class="display-10 mb-0">YUSUP BIN HJ. HARBI</h1>
                            <h1 class="display-10 mb-0">TIMBALAN PPD SEKTOR PERANCANGAN</h1>
                            <h1 class="display-10 mb-0">NAFISAH BINTI ROSLI</h1>
                            <h1 class="display-10 mb-0">TIMBALAN PPD SEKTOR PEMBELAJARAN</h1>
                            <h1 class="display-10 mb-0">LAW SIONG LEE</h1>
                            <h1 class="display-10 mb-0">TIMBALAN PPD SEKTOR PENGURUSAN SEKOLAH</h1>
                            <h1 class="display-10 mb-0">SYAHRUL BIN SALLAMUN</h1>
                            <h1 class="display-10 mb-0">TIMBALAN PPD SEKTOR PEMBANGUNAN MURID</h1>
                            <h1 class="display-10 mb-0">IESHA RINA BAWANG ANAK UNDING</h1>
                            <h1 class="display-10 mb-0">KAUNSELOR PENDIDIKAN DAERAH</h1>
                            <h1 class="display-10 mb-0">SEKTOR PSIKOLOGI DAN KAUNSELING</h1>
                            <h1 class="display-10 mb-0">LAKHIRBA BIN ZAIDI</h1>
                            <h1 class="display-10 mb-0">SEKTOR PENTAKSIRAN DAN PEPERIKSAAN</h1>
                            <h1 class="display-10 mb-0">MOHAMAD SAUFI BIN USUP</h1>
                            <h1 class="display-10 mb-0">SEKTOR PENGURUSAN</h1>
                        </div>
                        <p class="mb-4">PEJABAT PENDIDIKAN DAERAH BINTULU</p>
                        <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Appointment</h5>
                        <h1 class="wow fadeInUp" data-wow-delay="0.6s">+086331627</h1>
                    </div>
                    <div class="col-lg-7">
                        <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                        style="z-index: 2;">
                                        <h2 class="text-primary m-0">$35</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Teeth Whitening</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <a href="appointment.html"
                                        class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                                </div>
                            </div>
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                        style="z-index: 2;">
                                        <h2 class="text-primary m-0">$49</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Dental Implant</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <a href="appointment.html"
                                        class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                                </div>
                            </div>
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                        style="z-index: 2;">
                                        <h2 class="text-primary m-0">$99</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Root Canal</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <a href="appointment.html"
                                        class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


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
    </section>
@endsection