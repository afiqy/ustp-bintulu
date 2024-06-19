@extends('layouts.app')

@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __("messages.falsafah") }}</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Falsafah Start -->
        <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{{ __('messages.falsafah 2') }}</h5>
                            <h1 class="display-5 mb-0">{{ __('messages.Pendidikan di Malaysia') }}</h1>
                        </div>
                        <p class="text-body fst-italic mb-4"><strong>{{ __('messages.Pendidikan di Malaysia adalah suatu usaha berterusan ke arah lebih memperkembangkan potensi individu secara menyeluruh dan bersepadu untuk mewujudkan insan yang seimbang dan harmonis dari segi intelek, rohani, emosi dan jasmani, berdasarkan kepercayaan dan kepatuhan kepada Tuhan.') }}</strong></p>
                        <p class="text-body fst-italic mb-4"><strong>{{ __('messages.Usaha ini adalah bagi melahirkan warganegara Malaysia yang berilmu pengetahuan, berketrampilan, berakhlak mulia, bertanggungjawab dan berkeupayaan mencapai kesejahteraan diri, serta memberi sumbangan terhadap keharmonian dan kemakmuran keluarga, masyarakat dan negara.') }}</strong></p>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.png" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Falsafah End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    </section>
@endsection
