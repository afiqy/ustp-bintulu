@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">Services</h1>
                    <a href="" class="h4 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h4 text-white">Services</a>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5 mb-5">
                    <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                        <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                            <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover;">
                            <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title mb-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                            <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services</h1>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Cosmetic Dentistry</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/service-2.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Dental Implants</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/service-3.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Dental Bridges</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/service-4.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Teeth Whitening</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div
                            class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h3 class="text-white mb-3">Make Appointment</h3>
                            <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est
                                magna stet eirmod</p>
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


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
