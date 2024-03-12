@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">VISI DAN MISI</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase" style="font-size: 30px;">PPD Bintulu</h5>
                        </div>
                        <!-- Vision -->
                        <div class="vision-frame p-4 mb-4">
                            <h4 class="text-body fst-italic mb-3">Visi</h4>
                            <p class="text-body fst-italic">Melestarikan Sistem Pendidikan Yang Berkualiti Untuk Membangunkan Potensi Individu bagi Memenuhi Aspirasi Negara</p>
                        </div>
                        
                        <!-- Mission -->
                        <div class="mission-frame p-4">
                            <h4 class="text-body fst-italic mb-3">Misi</h4>
                            <p class="text-body fst-italic">Pendidikan Berkualiti Insan Terdidik Negara Sejahtera</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </section>

    <style>
        .vision-frame, .mission-frame {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease-in-out;
        }

        .vision-frame:hover, .mission-frame:hover {
            transform: translateY(-5px);
        }

        .vision-frame h4, .mission-frame h4 {
            color: #007bff;
            font-weight: bold;
        }
    </style>
@endsection
