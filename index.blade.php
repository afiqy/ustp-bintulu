@extends('layouts.app')
@section('content')

<style>
    .container-fluid {
        margin-left: 0 !important;
        margin-right: 0 !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    * {
    margin: 0;
    padding: 0;
    
}
.carousel-item {
    min-height: 300px; /* Adjust the height as needed */
    
}
.carousel-item img {
            width: 100%; /* Ensure pictures fill the entire carousel item */
            height: auto; /* Maintain aspect ratio */
        }
        .service-item {
        height: 350px; /* Set a fixed height for consistency */
    }
</style>

    <section>
        <!-- Carousel Start -->
        <div class="container-fluid">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center" style="height: 75vh;">
                        <img class="w-100 pe-0" style="max-height: 100vh; object-fit: contain;" src="{{ asset('images/background.png') }}" alt="Image1">
                    </div>
                        <div class="carousel-caption-main d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                    <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center" style="height: 75vh;">
                    <img class="w-100 pe-0" style="max-width: 200vh; object-fit: contain;" src="{{ asset('images/background2.png') }}" alt="Image2">
                        </div>
                        <div class="carousel-caption-sub d-flex flex-column align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Kembali</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Seterusnya</span>
                </button> 
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Banner Start -->
        
    <div class="container-fluid banner my-4 p-0" >
        <div class="container-fluid">
            <div class="row gx-3 mb-5">
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-4 w-100" style="height: 200px;"> 
                        <h3 class="text-white mb-3">{{ __('Sektor & Unit') }}</h3>
                        <div class="row">
                            <!-- Sektor Perancangan -->
                            <div class="col">
                                <a class="btn btn-primary border-0" href="{{ url('sektor/sektor_perancangan') }}" style="border-radius: 15px;">
                                    <img src="{{ asset('custom-icons/perancangan.png') }}" width="100px" style="max-width: 100px; border-radius: 15px;" alt="{{ __('Sektor Perancangan') }}">
                                </a>
                            </div>

                            <!-- Sektor Pembelajaran -->
                            <div class="col">
                                <a class="btn btn-primary" href="{{ url('sektor/sektor_pembelajaran') }}" style="border-radius: 15px;">
                                    <img src="{{ asset('custom-icons/pembelajaran.png') }}" width="100px" style="max-width: 100px; border-radius: 15px;" alt="{{ __('Sektor Pembelajaran') }}">
                                </a>
                            </div>

                            <!-- Sektor Pengurusan Sekolah -->
                            <div class="col">
                                <a class="btn btn-primary" href="{{ url('sektor/sektor_pengurusan_sekolah') }}" style="border-radius: 15px;">
                                    <img src="{{ asset('custom-icons/pengurusansekolah.png') }}" width="100px" style="max-width: 100px; border-radius: 15px;" alt="{{ __('Sektor Pengurusan Sekolah') }}">
                                </a>
                            </div>

                            <!-- Sektor Pembangunan Murid -->
                            <div class="col">
                                <a class="btn btn-primary" href="{{ url('sektor/sektor_pembangunan_murid') }}" style="border-radius: 15px;">
                                    <img src="{{ asset('custom-icons/pembangunanmurid.png') }}" width="100px" style="max-width: 100px; border-radius: 15px;" alt="{{ __('Sektor Pembangunan Murid')}}">
                                </a>
                            </div>

                            <!-- Sektor Psikologi & Kaunseling -->
                            <div class="col">
                                <a class="btn btn-primary" href="{{ url('sektor/sektor_psikologi') }}" style="border-radius: 15px;">
                                    <img src="{{ asset('custom-icons/psikologi.png') }}" width="100px" style="max-width: 100px; border-radius: 15px;" alt="{{ __('Sektor Psikologi & Kaunseling')}}">
                                </a>
                            </div>

                            <!-- Sektor Pentaksiran & Peperiksaan -->
                            <div class="col">
                                <a class="btn btn-primary" href="{{ url('sektor/sektor_pentaksiran') }}" style="border-radius: 15px;">
                                    <img src="{{ asset('custom-icons/pentaksiran.png') }}" width="100px" style="max-width: 100px; border-radius: 15px;" alt="{{ __('Sektor Pentaksiran & Peperiksaan')}}">
                                </a>
                            </div>

                            <!-- Sektor Pengurusan -->
                            <div class="col">
                                <a class="btn btn-primary" href="{{ url('sektor/sektor_pengurusan') }}" style="border-radius: 15px;">
                                    <img src="{{ asset('custom-icons/pengurusan.png') }}" width="100px" style="max-width: 100px; border-radius: 15px;" alt="{{ __('Sektor Pengurusan')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>


    <!-- CONTENT -->
            <div class="container-fluid banner my-4 p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                            <div class="bg-dark d-flex flex-column p-5" style="height: 250px;">
                                <h3 class="text-white mb-3">{{ __('Pengumuman') }}</h3>
                                <p class="text-white">Sekolah Penggal pertama pada tahun 2024 akan dibuka pada 11 Mac 2024.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-secondary d-flex flex-column p-5" style="height: 250px;">
                                <h3 class="text-white mb-3">Kenyataan Media</h3>
                                <p class="text-white">Sila memakai pelitup muka jika berkunjung ke pejabat kami.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Banner Start -->

                               
        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row g-5 mb-5">
                    <!--
                    <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                        <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                            <img class="position-absolute w-100 h-100" src="img/gambar1.jpg" style="object-fit: cover;">
                            <img class="position-absolute w-100 h-100" src="img/gambar2.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    -->
            <div class="col-lg-8">
                <div class="section-title mb-3">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Galeri Kami</h5>
                    <h1 class="display-6 mb-0">Aktiviti Warga PPD</h1>
                </div>
            </div>
        
            <!-- Galeri Start -->
        <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-2 mb-5">
                                <!-- First Row -->
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="img/calonspm.jpg" alt="Program Solat Hajat Perdana Pelajar Islam SPM Dan STPM 2023/2024 Peringkat Daerah Bintulu" style="height: 250px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Program Solat Hajat Perdana Pelajar Islam SPM Dan STPM 2023/2024 Peringkat Daerah Bintulu</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="img/pengurusanstress.jpg" alt="Program Pengurusan Stres, Kewangan Berhemah Dan Kesihatan Mental" style="height: 250px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Program Pengurusan Stres, Kewangan Berhemah Dan Kesihatan Mental</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="img/riadahjumaat.jpg" alt="The Biggest Loser Siri 1" style="height: 250px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">The Biggest Loser Siri 1</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of First Row -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-2 mb-5">
                                <!-- Second Row -->
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="img/hariterbuka.jpg" alt="Hari Kerjaya & Pendidikan Dan Hari Terbuka PPD Bintulu" style="height: 250px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Hari Kerjaya & Pendidikan Dan Hari Terbuka PPD Bintulu</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="img/maulidur.jpg" alt="Program Maulidur Rasul 2023" style="height: 250px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Program Maulidur Rasul 2023</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="img/pemberkatan.jpg" alt="Program Pemberkatan Calon SPM dan STPM Daerah Bintulu Tahun 2023/2024" style="height: 250px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Program Pemberkatan Calon SPM dan STPM Daerah Bintulu Tahun 2023/2024</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Second Row -->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
                                                            
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </section>
@endsection
@section('page-scripts')
@endsection
