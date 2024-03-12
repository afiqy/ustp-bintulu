@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __('Temujanji') }}</h1>
                    <a href="" class="h4 text-white">{{ __('Laman Utama') }}</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h4 text-white">Temujanji</a>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Appointment Start -->
        <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="margin-top: 90px;">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 py-5">
                        <div class="py-5">
                            <h1 class="display-5 text-white mb-4">Membuat Temujanji 
                                Trust</h1>
                            <p class="text-white mb-0">Jika anda mahu berjumpa Pegawai di Pejabat Pendidikan Daerah Bintulu,
                                Sila buat temujanji dengan pegawai yang anda mahu berjumpa supaya dapat berjumpa tanpa ada halangan.
                             </p>  
                                
                        </div>
                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


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
