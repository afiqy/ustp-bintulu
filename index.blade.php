@extends('layouts.app')
@section('content')
    <section>
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('images/background.png') }}" alt="Image">
                        <div class="carousel-caption-main d-flex flex-column align-items-center justify-content-center">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/PEJABAT.png" alt="Image">
                        <div class="carousel-caption-sub d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Shine Bintulu Shine
                                </h5>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Pendidikan Berkualiti Insan Terdidik Negara Sejahtera</h1>
                                <a href="appointment.html"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Temujanji</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Kembali</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Selanjutnya</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Banner Start -->
        <div class="container-fluid banner mb-5">
            <div class="container">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex flex-column p-5" style="height: 450px;">
                            <h3 class="text-white mb-3">{{ __('Sistem Dalam Talian') }}</h3>
                            <div class="row">
                                <div class="col dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                        id="dropdownSpr" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="border-radius: 15px;">
                                        <img src="{{ asset('custom-icons/SPr.png') }}" width="80%"
                                            style="max-width: 100px; border-radius: 15px;"
                                            alt="{{ __('Sektor Perancangan (SPr)') }}">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownSpr">
                                        <a class="dropdown-item" href="{{ url('https://emisonline.moe.gov.my/index.php') }}" target="__blank" alt="{{ __('EMIS') }}" title="{{ __('EMIS') }}">
                                            <img src="{{ asset('custom-icons/EMIS.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('EMIS') }}" title="{{ __('EMIS') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://idme.moe.gov.my/login/') }}" target="__blank" alt="{{ __('MOEIS') }}" title="{{ __('MOEIS') }}">
                                            <img src="{{ asset('custom-icons/MOEIS.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('MOEIS') }}" title="{{ __('MOEIS') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://www.moe.gov.my/pendidikan/pendidikan-rendah/pendaftaran-sr/') }}" target="__blank" alt="{{ __('eDaftar') }}" title="{{ __('eDaftar') }}">
                                            <img src="{{ asset('custom-icons/eDaftar.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('eDaftar') }}" title="{{ __('eDaftar') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://eprestasi.moe.gov.my//') }}" target="__blank" alt="{{ __('ePrestasi') }}" title="{{ __('ePrestasi') }}">
                                            <img src="{{ asset('custom-icons/ePrestasi.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('ePrestasi') }}" title="{{ __('ePrestasi') }}">
                                        </a>
                                    </div>
                                </div>
                                
                                
                                <div class="col dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                        id="dropdownSpr" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="border-radius: 15px;">
                                        <img src="{{ asset('custom-icons/SPM.png') }}" width="80%"
                                            style="max-width: 100px; border-radius: 15px;"
                                            alt="{{ __('Sektor Pembangunan Murid (SPM)') }}">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownSpr">
                                        <a class="dropdown-item" href="{{ url('https://appimr.moe.gov.my/login') }}" target="__blank" alt="{{ __('APPISM') }}" title="{{ __('APPISM') }}">
                                            <img src="{{ asset('custom-icons/APPISM.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('APPISM') }}" title="{{ __('APPISM') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://appisr.moe.gov.my/login/') }}" target="__blank" alt="{{ __('APPISR') }}" title="{{ __('APPISR') }}">
                                            <img src="{{ asset('custom-icons/APPISR.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('APPISR') }}" title="{{ __('APPISR') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://ssdm.moe.gov.my/') }}" target="__blank" alt="{{ __('SSDM') }}" title="{{ __('SSDM') }}">
                                            <img src="{{ asset('custom-icons/SSDM.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('SSDM') }}" title="{{ __('SSDM') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://apb1.moe.gov.my/demomanual.cfm') }}" target="__blank" alt="{{ __('APB') }}" title="{{ __('APB') }}">
                                            <img src="{{ asset('custom-icons/APB.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('APB') }}" title="{{ __('APB') }}">
                                        </a>
                                    </div>
                                </div>
                                


                                {{-- <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSPr" aria-expanded="true"
                                                aria-controls="collapseSPr">
                                                {{ __('Sektor Perancangan (SPr)') }}
                                            </button>
                                        </h2>
                                        <div id="collapseSPr" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="https://nkra.moe.gov.my/index.php">
                                                            <img src="{{ asset('custom-icons/SPr.png') }}" width="80%;" style="border-radius: 25px;" alt="{{ __('Sektor Perancangan (SPr)') }}">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="https://nkra.moe.gov.my/index.php">
                                                            <img src="{{ asset('custom-icons/SKPMG2.png') }}" width="80%;" style="border-radius: 25px;" alt="{{ __('Sektor Perancangan (SPr)') }}">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="https://emisonline.moe.gov.my/index.php">
                                                            <img src="{{ asset('custom-icons/EMIS.png') }}" width="80%;" style="border-radius: 25px;" alt="{{ __('Sektor Perancangan (SPr)') }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div class="bg-dark d-flex flex-column p-5" style="height: 450px;">
                            <h3 class="text-white mb-3">{{ __('Warga PPD') }}</h3>
                            <div class="date mb-3" id="date" data-target-input="nearest">
                                <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                    placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker"
                                    style="height: 40px;">
                            </div>
                            <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                                <option selected>Pilih Urusan</option>
                                <option value="1">Urusan Perpindahan Murid</option>
                                <option value="2">Perkhidmatan Kaunseling</option>
                                <option value="3">Urusan Perkhidmatan</option>
                            </select>
                            <a class="btn btn-light" href="">Carian Pegawai</a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-secondary d-flex flex-column p-5" style="height: 450px;">
                            <h3 class="text-white mb-3">Buat Temujanji</h3>
                            <p class="text-white">Tempah Temujanji Anda Sekarang</p>
                            <h2 class="text-white mb-0">086331627</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Start -->


        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Tentang Kami</h5>
                            <h1 class="display-5 mb-0">Pejabat Pendidikan Daerah Bintulu</h1>
                        </div>
                        <h4 class="text-body fst-italic mb-4">Bintulu Peneraju Transformasi Pendidikan Sarawak Tahun 2030</h4>
                        <p class="mb-4">Dasar Kualiti, PPD Bintulu komited dalam meningkatkan kecekapan dan keberkesanan tadbir urus serta proses penyampaian perkhidmatan bagi memenuhi kehendak pelanggan dan aspirasi negara selaras matlamat dan Falsafah Pendidikan kebangsaan 
                        </p>   
                    
                        <div class="row g-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Pegawai Pendidikan</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Anggota Kumpulan Pelaksana
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Isnin hingga Jumaat buka</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Sabtu dan Ahad Tutup</h5>
                            </div>
                        </div>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                            data-wow-delay="0.6s">Temujanji</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="img/UPPD.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Appointment Start -->
        <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 py-5">
                        <div class="py-5">
                            <h1 class="display-5 text-white mb-4">MEMPERKASAKAN PENDIDIKAN MELESTARIKAN KEMENJADIAN MURID</h1>
                            <p class="text-white mb-0">PPD Bintulu komited dalam meningkatkan kecekapan dan keberkesanan tadbir urus serta 
                                proses penyampaian perkhidmatan bagi memenuhi kehendak pelanggan dan aspirasi negara selaras matlamat dan Falsafah Pendidikan Kebangsaan.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                            data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Tempah Temujanji</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Urusan Perkhidmatan</option>
                                            <option value="1">Bahagian Perkhidmatan</option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Pegawai Urusetia</option>
                                            <option value="1">Ayuk George</option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Full Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control bg-light border-0"
                                            placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control bg-light border-0 datetimepicker-input"
                                                placeholder="Appointment Date" data-target="#date1"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time" id="time1" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control bg-light border-0 datetimepicker-input"
                                                placeholder="Appointment Time" data-target="#time1"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Tempah Temujanji</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5 mb-5">
                    <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                        <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                            <img class="position-absolute w-100 h-100" src="img/JPS08050.jpg" style="object-fit: cover;">
                            <img class="position-absolute w-100 h-100" src="img/JPS08050.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title mb-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Berita Terkini</h5>
                            <h1 class="display-5 mb-0">Annual Dinner Pejabat Pendidikan Bintulu</h1>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/king-and-queen.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">King & Queen Of The Night!</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/JPS07979.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Penerima Anugerah</h5>
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
                                    <img class="img-fluid" src="img/JPS08068.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Nyanyian dan Persembahan</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/JPS08106.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Cabutan Bertuah</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div
                            class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h3 class="text-white mb-3">Retro Dinner Pejabat Pendidikan Bintulu</h3>
                            <p class="text-white mb-3">Majlis Sanjung Budi</p>
                            <h2 class="text-white mb-0"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Offer Start -->
        <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                        <div class="offer-text text-center rounded p-5">
                            <h1 class="display-5 text-white">Anda Perlukan Perkhidmatan Kaunseling?</h1>
                            <p class="text-white mb-4">Buat temujanji anda sekarang bersama Kaunselor Pejabat Pendidikan Daerah bagi membantu masalah anda. </p>
                            <a href="appointment.html" class="btn btn-dark py-3 px-5 me-3">Temujanji</a>
                            <a href="" class="btn btn-light py-3 px-5">Selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->


        <!-- Dapatkan Bantuan Segera -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Hubungi Kaunselor kami</h5>
                            <h1 class="display-5 mb-0">Dapatkan Bantuan Segera</h1>
                        </div>
                        <p class="mb-4">Hubungi Pegawai Kaunseling bagi mendapatkan khidmat nasihat bagi masalah anda</p>
                        <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Tempah Temujanji
                        </h5>
                        <h1 class="wow fadeInUp" data-wow-delay="0.6s">086-331627</h1>
                    </div>
                    <div class="col-lg-7">
                        <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                        style="z-index: 2;">
                                        <h2 class="text-primary m-0"></h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Sekor</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Perkhidmatan</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Nama Pegawai</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>Hubungi</span><i
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
                                        <h2 class="text-primary m-0"></h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Sektor</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Perkhidmatan</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Nama Pegawai</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>Hubungi</span><i
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
                                        <h2 class="text-primary m-0"></h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Sektor</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Perkhidmatan</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Nama Pegawai</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>Hubungi</span><i
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


        <!-- Testimonial Start -->
        <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                            <div class="testimonial-item text-center text-white">
                                <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                                <p class="fs-5"></p>
                                <hr class="mx-auto w-25">
                                <h4 class="text-white mb-0">Nama</h4>
                            </div>
                            <div class="testimonial-item text-center text-white">
                                <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                                <p class="fs-5"></p>
                                <hr class="mx-auto w-25">
                                <h4 class="text-white mb-0">Nama</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Pegawai PPD Bintulu</h5>
                            <h1 class="display-6 mb-4">Timbalan Pegawai dan Ketua Sektor di PPD Bintulu</h1>
                            <a href="appointment.html" class="btn btn-primary py-3 px-5">Temujanji</a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/CgYusup.png" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Yusup Bin Harbi</h4>
                                <p class="text-primary mb-0">Timbalan PPD Sektor Perancangan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/CgNafisah.png" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Nafisah Binti Rosli</h4>
                                <p class="text-primary mb-0">Timbalan PPD Sektor Pembelajaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/CgLaw.png" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Law Siong Lee</h4>
                                <p class="text-primary mb-0">Timbalan PPD Sektor Pengurusan Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/CikguAwg.png" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Awangku Ali Udin Bin Hj Pangeran Adenani</h4>
                                <p class="text-primary mb-0">Timbalan PPD Sektor Pembangunan Murid</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/EnSaufi.png" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Mohamad Saufi Bin usup</h4>
                                <p class="text-primary mb-0">Penolong Pegawai Tadbir (ketua Sektor Pengurusan)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


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
@section('page-scripts')
@endsection
