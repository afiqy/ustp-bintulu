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

    .list-group-item-light:hover {
    background-color: #0dcaf0;; /* Change this color to the shade you prefer */
}

    /* Custom Card Styles */
    .custom-card {
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    }

    .custom-card-header {
        background-color: #007bff; /* Blue header background */
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .custom-card-title {
        color: #fff; /* White title text */
        font-size: 1.5rem;
    }

    .custom-card-body {
        padding: 20px;
    }

    .custom-card-text {
        color: #666;
    }

    .custom-list-group-item {
        background-color: #f8f9fa; /* Light gray background */
        border-color: transparent;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .custom-list-group-item:hover {
        background-color: #e9ecef; /* Lighter gray on hover */
    }

    .custom-list-group-item:focus {
        background-color: #dee2e6; /* Even lighter gray on focus */
    }

    .card-link {
    position: relative;
    overflow: hidden;
    }

    .card-link::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 100%;
        width: 100%;
        height: 2px;
        background-color: #007bff; /* Change this to the desired line color */
        transition: left 0.3s ease;
    }

    .card-link:hover::before {
        left: 0;
    }

    .card-link .card-title {
        position: relative;
        z-index: 1;
    }

    .card-link:hover .card-title {
        background-color: rgba(255, 255, 255, 0.8); /* Change this to the desired background color */
    }

    .gradient-background {
            background: linear-gradient(to right, #007bff, #6a11cb); /* Example gradient from blue to purple */
        }

    .card {
    border: 2px solid #dee2e6; /* Border color */
    border-radius: 10px; /* Border radius */
    transition: border-color 0.3s ease; /* Smooth transition on hover */
    }

    .card:hover {
        border-color: #007bff; /* Border color on hover */
    }

    .video-container {
        width: 1470px;
        height: 530px; /* Adjust the height as needed */
        overflow: hidden;
        position: relative;
    }

    .full-width-video {
        position: absolute;
        top: 50%;
        left: 47.5%;
        transform: translate(-50%, -50%);
        height: 100%; 
        width: 100%;
        object-fit: fill;
    }

    @media (max-width: 767.98px) {
        .carousel-item {
            min-height: 200px;
        }

        .service-item {
            height: auto;
        }

        .video-container {
            height: 200px;
        }

        .full-width-video {
            height: 200px;
        }
    }

</style>


    <section>
        <!-- Carousel Start -->
        <div class="container-fluid">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                  
                    <div class="video-container">
                        <video class="full-width-video" autoplay muted loop>
                            <source src="{{ asset('img/home web.mp4') }}" type="video/mp4">
                        </video>
                    </div>
       


                        <div class="carousel-caption-main d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center" style="height: 530px;">
                            <img style="max-width: 100vw; max-height: 100%; height: auto;" src="{{ asset('img/new_pic.png') }}" alt="Image2">
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
        
        <!-- Announcement and Media Statement -->
            <div class="container-fluid banner my-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                            <div class="bg-dark d-flex flex-column p-5">
                                <h3 class="text-white mb-3">{{__('messages.Pengumuman')}}</h3>
                                <p class="text-white">{{__('messages.Sekolah Penggal pertama pada tahun 2024 akan dibuka pada 11 Mac 2024.')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-secondary d-flex flex-column p-5">
                                <h3 class="text-white mb-3">{{__('messages.Kenyataan Media')}}</h3>
                                <p class="text-white">{{__('messages.Sila memakai pelitup muka jika berkunjung ke pejabat kami.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Pautan Pantas-->
        <div class="container-fluid bg-primary py-4 px-5 gradient-background wow zoomIn" data-wow-delay="0.8s">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center p-0">
                        <h6 class="display-6" style="font-size: 30px;">{{__('messages.Pautan Pantas')}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-7 g-3 wow zoomIn" data-wow-delay="1.0s">
            <div class="col">
                <a href="{{ url('/sektor/sektor_perancangan') }}" class="card card-link h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/nmguxqka.json"
                                trigger="hover"
                                style="width:250px;height:70px">
                            </lord-icon>
                        <h6 class="card-title mb-0">{{__('messages.Sektor Perancangan')}}</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('/sektor/sektor_pembelajaran') }}" class="card card-link h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/bhmovrlt.json"
                                trigger="hover"
                                style="width:250px;height:70px">
                            </lord-icon>
                        <h6 class="card-title mb-0">{{__('messages.Sektor Pembelajaran')}}</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('/sektor/sektor_pengurusan_sekolah') }}" class="card card-link h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/dmslncji.json"
                                trigger="hover"
                                style="width:250px;height:70px">
                            </lord-icon>
                        <h6 class="card-title mb-0">{{__('messages.Sektor Pengurusan Sekolah')}}</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('/sektor/sektor_pembangunan_murid') }}" class="card card-link h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/bvymuvni.json"
                                trigger="hover"
                                style="width:250px;height:70px">
                            </lord-icon>
                        <h6 class="card-title mb-0">{{__('messages.Sektor Pembangunan Murid')}}</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('/sektor/sektor_psikologi') }}" class="card card-link h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/amjaykqd.json"
                                trigger="hover"
                                style="width:250px;height:70px">
                            </lord-icon>
                        <h6 class="card-title mb-0">{{__('messages.Sektor Psikologi & Kaunseling')}}</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('/sektor/sektor_pentaksiran') }}" class="card card-link h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/xsqjakgm.json"
                                trigger="hover"
                                style="width:250px;height:70px">
                            </lord-icon>
                        <h6 class="card-title mb-0">{{__('messages.Sektor Pentaksiran & Peperiksaan')}}</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('/sektor/sektor_pengurusan') }}" class="card card-link h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/dqrpfjei.json"
                                trigger="hover"
                                style="width:250px;height:70px">
                            </lord-icon>
                        <h6 class="card-title mb-0">{{__('messages.Sektor Pengurusan')}}</h6>
                    </div>
                </a>
            </div>
            <!-- Add more similar blocks for other sectors -->
        </div>



        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row g-5 mb-5">
            <div class="col-lg-8">
                <div class="section-title mb-3">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Galeri Kami')}}</h5>
                    <h1 class="display-6 mb-0">{{__('messages.Aktiviti Warga PPD')}}</h1>
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
                                            <img class="img-fluid w-100" src="{{ asset('img/calonspm.jpg')}}" alt="Program Solat Hajat Perdana Pelajar Islam SPM Dan STPM 2023/2024 Peringkat Daerah Bintulu" style="height: 280px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Program Solat Hajat Perdana Pelajar Islam SPM Dan STPM 2023/2024 Peringkat Daerah Bintulu</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="{{ asset('img/pengurusanstress.jpg')}}" alt="Program Pengurusan Stres, Kewangan Berhemah Dan Kesihatan Mental" style="height: 280px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Program Pengurusan Stres, Kewangan Berhemah Dan Kesihatan Mental</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="{{ asset('img/riadahjumaat.jpg')}}" alt="The Biggest Loser Siri 1" style="height: 280px;">
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
                                            <img class="img-fluid w-100" src="{{ asset('img/hariterbuka.jpg')}}" alt="Hari Kerjaya & Pendidikan Dan Hari Terbuka PPD Bintulu" style="height: 280px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Hari Kerjaya & Pendidikan Dan Hari Terbuka PPD Bintulu</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="{{ asset('img/maulidur.jpg')}}" alt="Program Maulidur Rasul 2023" style="height: 280px;">
                                        </div>
                                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                                            <h5 class="m-0">Program Maulidur Rasul 2023</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="rounded-top overflow-hidden">
                                            <img class="img-fluid w-100" src="{{ asset('img/pemberkatan.jpg')}}" alt="Program Pemberkatan Calon SPM dan STPM Daerah Bintulu Tahun 2023/2024" style="height: 280px;">
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
