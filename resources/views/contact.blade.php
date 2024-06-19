@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{__('messages.perkhidmatan')}}</h1>
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
                                <h3></h3>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                                <div class="text-start">
                                    <h5 class="mb-0">{{__('messages.Pejabat Kami')}}</h5>
                                    <span>PPD Bintulu, KM5, Jalan Sultan Iskandar, 97000 Bintulu, Sarawak</span>
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
                                    <h5 class="mb-0">{{__('messages.contact_2')}}</h5>
                                    <div class="text-muted"><b>PPD Bintulu:</b></div>
                                    <span>086-331627 | 086-317244<br>| 086-314352</span><br>
                                    <div class="text-muted"><b>Sektor Pembelajaran:</b></div>
                                    <span>086-334272</span><br>
                                    <div class="text-muted"><b>Sektor Pentaksiran Dan Peperiksaan:</b></div>
                                    <span>086-330541</span><br>
                                    <div class="text-muted"><b>Faks:</b> 086-336630</div>
                                </div>
                            </div>
                            <!-- New Facebook Icon -->

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf <!-- Add CSRF token -->
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 bg-light px-4" name="name" placeholder="{{__('messages.Nama')}}" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control border-0 bg-light px-4" name="email" placeholder="{{__('messages.E-mel')}}" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 bg-light px-4" name="subject" placeholder="{{__('messages.Subjek')}}" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="5" placeholder="{{__('messages.Mesej')}}"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">{{__('messages.Hantar Mesej')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/place/Pejabat+Pendidikan+Daerah+Bintulu/@3.1930918,113.0538371,17z/data=!3m1!4b1!4m6!3m5!1s0x321dc10f6031ae41:0xb142ec8eb29539b4!8m2!3d3.1930918!4d113.056412!16s%2Fg%2F11byvvznw9?entry=ttu"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </section>
@endsection
