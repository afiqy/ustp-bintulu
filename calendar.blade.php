@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">KALENDAR</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Testimonial Start -->
        <div class="container-fluid bg-primary bg-testimonial py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="margin-top: 90px;">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                            <div class="testimonial-item text-center text-white">
                                <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                                <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum.
                                    At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                                <hr class="mx-auto w-25">
                                <h4 class="text-white mb-0">Client Name</h4>
                            </div>
                            <div class="testimonial-item text-center text-white">
                                <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                                <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum.
                                    At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                                <hr class="mx-auto w-25">
                                <h4 class="text-white mb-0">Client Name</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


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
