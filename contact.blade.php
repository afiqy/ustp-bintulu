@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">PERKHIDMATAN DALAM TALIAN</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
        <div class="container-fluid py-3">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded h-100 p-5">
                            <div class="section-title">
                                <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                                <h3 class="display-6 mb-4">Hubungi Kami</h3>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                                <div class="text-start">
                                    <h5 class="mb-0">Pejabat Kami</h5>
                                    <span>Pejabat Pendidikan Daerah Bintulu</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                                <div class="text-start">
                                    <h5 class="mb-0">Email</h5>
                                    <span>ppdbintulu@moe.gov.my</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                                <div class="text-start">
                                    <h5 class="mb-0">Hubungi Kami</h5>
                                    <span>+086-331627</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 bg-light px-4"
                                        placeholder="Nama" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control border-0 bg-light px-4"
                                        placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subjek"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Mesej"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Hantar Mesej</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </section>
@endsection
