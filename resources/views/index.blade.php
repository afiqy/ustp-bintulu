@extends('layouts.app')
@section('content')
    <section>
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
<<<<<<< Updated upstream
                        <img class="w-100" src="{{ asset('images/background1.png') }}" alt="Image">
=======
                        <img class="w-100" src="{{ asset('images/background.png') }}" alt="Image">
>>>>>>> Stashed changes
                        <div class="carousel-caption-main d-flex flex-column align-items-center justify-content-center">
                        </div>
                    </div>
                    <div class="carousel-item">
<<<<<<< Updated upstream
                        <img class="w-100" src="img/background2.png" alt="Image">
=======
                        <img class="w-100" src="img/ppd 1.jpg" alt="Image">
>>>>>>> Stashed changes
                        <div class="carousel-caption-sub d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Shine Bintulu Shine
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Bintulu Peneraju Transformasi pendidikan Sarawak Tahun 2030
                                </h1>
                                <a href="appointment.html"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
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
                            <h3 class="text-white mb-3">{{ __('Sistem Online') }}</h3>
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
                                        <a class="dropdown-item" href="{{ url('https://nkra.moe.gov.my/index.php') }}" target="__blank" alt="{{ __('SKPMg2') }}" title="{{ __('SKPMg2') }}">
                                            <img src="{{ asset('custom-icons/SKPMG2.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('SKPMg2') }}" title="{{ __('SKPMg2') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://pidp.moe.gov.my/') }}" target="__blank" alt="{{ __('ePDIP') }}" title="{{ __('ePDIP') }}">
                                            <img src="{{ asset('custom-icons/ePDIP.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('ePDIP') }}" title="{{ __('ePDIP') }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                        id="dropdownSpr" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="border-radius: 15px;">
                                        <img src="{{ asset('custom-icons/SPr.png') }}" width="80%"
                                            style="max-width: 100px; border-radius: 15px;"
                                            alt="{{ __('Sektor Pembangunan (SPbM)') }}">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownSpr">
                                        <a class="dropdown-item" href="{{ url('https://nkra.moe.gov.my/index.php') }}" target="__blank" alt="{{ __('SKPMg2') }}" title="{{ __('SKPMg2') }}">
                                            <img src="{{ asset('custom-icons/SKPMG2.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('SKPMg2') }}" title="{{ __('SKPMg2') }}">
                                        </a>
                                        <a class="dropdown-item" href="{{ url('https://pidp.moe.gov.my/') }}" target="__blank" alt="{{ __('ePDIP') }}" title="{{ __('ePDIP') }}">
                                            <img src="{{ asset('custom-icons/ePDIP.png') }}"  width="80%"
                                            style="max-width: 85px; border-radius: 15px;" alt="{{ __('ePDIP') }}" title="{{ __('ePDIP') }}">
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
                                    placeholder="Tarikh" data-target="#date" data-toggle="datetimepicker"
                                    style="height: 40px;">
                            </div>
                            <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
<<<<<<< Updated upstream
                                <option selected>Perkhidmatan</option>
                                <option value="1">Perpindahan</option>
                                <option value="2">Perjawatan</option>
                                <option value="3">Lain-lain</option>
                            </select>
                            <a class="btn btn-light" href="">Pegawai</a>
=======
                                <option selected>Pilih Sektor</option>
                                <option value="1">Sektor Sektor Perancangan</option>
                                            <option value="2">Sektor Pembelajaran</option>
                                            <option value="3">Sektor Pengurusan Sekolah</option>
                                            <option value="4">Sektor Pembangunan Murid</option>
                                            <option value="5">Sektor Kaunseling Dan Psikologi</option>
                                            <option value="5">Sektor Pentaksiran Dan Peperiksaan</option>
                                            <option value="7">Sektor Pengurusan</option>
                            </select>
                            <a class="btn btn-light" href="">Pilihan Pegawai</a>
>>>>>>> Stashed changes
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-secondary d-flex flex-column p-5" style="height: 450px;">
<<<<<<< Updated upstream
                            <h3 class="text-white mb-3">Tempah Temujanji</h3>
                            <p class="text-white">Sila membuat temujanji bersama Pegawai terlebih dahulu atau hubungi nombor berikut.</p>
                            <h2 class="text-white mb-0">+86-331627</h2>
=======
                            <h3 class="text-white mb-3">Sila Buat Temu Janji</h3>
                            <p class="text-white">Jika Anda ingin berjumpa pegawai yang berkenaan sila membuat temujanji supaya anda tidak lama menunggu.</p>
                            <h2 class="text-white mb-0">+086-331627</h2>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Tentang Kami</h5>
                            <h1 class="display-5 mb-0">Falsafah Pendidikan Kebangsaan</h1>
                        </div>
                        <h4 class="text-body fst-italic mb-4">Pendidikan di Malaysia adalah suatu usaha berterusan ke arah lebih memperkembangkan potensi individu secara menyeluruh dan bersepadu untuk mewujudkan insan yang seimbang dan harmonis dari segi intelek, rohani, emosi dan jasmani, berdasarkan kepercayaan dan kepatuhan kepada Tuhan. Usaha ini adalah bagi melahirkan warganegara Malaysia yang berilmu pengetahuan, berketrampilan, berakhlak mulia, bertanggungjawab dan berkeupayaan mencapai kesejahteraan diri, serta memberi sumbangan terhadap keharmonian dan kemakmuran keluarga, masyarakat dan negara.</h4>
                        <p class="mb-4"></p>
                        <div class="row g-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i></h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i></h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i></h5>
                            </div>
                        </div>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                            data-wow-delay="0.6s">Tempah Temujanji</a>
=======
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                            <h1 class="display-5 mb-0">{{__('Profil Jabatan')}}</h1>
                        </div>
                        <h4 class="text-body fst-italic mb-4">Pejabat Pendidikan Daerah Bintulu terletak di Jln Sultan Iskandar, Kampung Baru Bintulu, 97000 Bintulu, Sarawak, Malaysia, berhampiran tempat ini: Pejabat Mara (1 km), Pejabat PERBINDA Perbandaraan (BDA) (1 km), 
                            Wisma Bintulu (2 km), Jabatan Pendaftaran Bintulu (3 km), Jabatan Tenaga Kerja Bintulu (3 km).</h4>
                         <p class="mb-4">PPD Bintulu komited dalam meningkatkan kecekapan dan keberkesanan tadbir urus serta proses penyampaian perkhidmatan bagi memenuhi kehendak pelanggan dan 
                            aspirasi negara selaras dengan matlamat dan Falsafah Pendidikan Kebangsaan.</p>
                        <div class="row g-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Pegawai Ikhtisas</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Anggota Kumpulan Pelaksana
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Isnin Hingga Jumaat</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>8.00 Pagi Hingga 5 Petang</h5>
                            </div>
                        </div>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                            data-wow-delay="0.6s">Buat Temu Janji Anda</a>
>>>>>>> Stashed changes
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="img/ppd1-1.jpg" style="object-fit: cover;">
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
                            <h1 class="display-5 text-white mb-4">Kami Sedia Membantu Anda Untuk apa-apa yang anda ingin tahu berkaitan 
                                dengan Sekolah-sekolah di Bintulu serta Pejabat Pendidikan Daerah Bintulu</h1>
                               
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                            data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Temu Janji</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Pilih Sektor</option>
                                            <option value="1">Sektor Sektor Perancangan
                                            <option value="2">Sektor Pembelajaran</option>
                                            <option value="3">Sektor Pengurusan Sekolah</option>
                                            <option value="4">Sektor Pembangunan Murid</option>
                                            <option value="5">Sektor Kaunseling Dan Psikologi</option>
                                            <option value="5">Sektor Pentaksiran Dan Peperiksaan</option>
                                            <option value="7">Sektor Pengurusan</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                             <option selected>Pilihan Pegawai</option>
                                            <option value="1">Unit Perancangan</option>
                                            <option value="2">Unit Pembelajaran</option>
                                            <option value="3">Unit Pengurusan Sekolah</option>
                                            <option value="3">Unit Pembangunan Murid</option>
                                            <option value="3">Unit Kaunseling Dan Psikologi</option>
                                            <option value="3">Unit Pentaksiran Dan Peperiksaan</option> 
                                            <option value="3">Unit Pengurusan</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Your Name" style="height: 55px;">
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
                                        <button class="btn btn-dark w-100 py-3" type="submit">Temu Janji</button>
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
                            <img class="position-absolute w-100 h-100" src="img/ppd 1.jpg" style="object-fit: cover;">
                            <img class="position-absolute w-100 h-100" src="img/ppd1-1.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title mb-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Servis</h5>
                            <h1 class="display-5 mb-0">Kami akan memberi layanan yang terbaik kepada anda</h1>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/team-2.png" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Sektor Perancangan</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/team-3.png" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Sektor Pembelajaran</h5>
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
                                    <img class="img-fluid" src="img/Team-4.png" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Sektor Pengurusan Sekolah</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/Team-5.jpg" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Sektor Pembangunan Murid</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div
                            class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h3 class="text-white mb-3">Temu Janji</h3>
                            <p class="text-white mb-3">Ingin Temui kami sila buat Temu janji anda semua seupaya tidak lama menunggu</p>
                             <h2 class="text-white mb-0">086-331627</h2>
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
                            <h1 class="display-5 text-white">Buatlah Temu Janji Anda kepada Pegawai yang Anda ingin Berjumpa</h1>
                            <p class="text-white mb-4">Kedatangan Anda di alu-alukan dan segala cadangan serta pendapat anda kami hargai serta membaiki layanan kami</p>
                            <a href="appointment.html" class="btn btn-dark py-3 px-5 me-3">Appointment</a>
                            <a href="" class="btn btn-light py-3 px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->


        <!-- Pricing Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Matlamat</h5>
                            <h1 class="display-5 mb-0">Matlamat Pejabat Pendidikan Daerah Bintulu</h1>
                        </div>
                        <p class="mb-4">Bintulu Peneraju Transformasi Pendidikan Sarawak Tahun 2030</p>
                        <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Appointment
                        </h5>
                        <h1 class="wow fadeInUp" data-wow-delay="0.6s">086-331627</h1>
                    </div>
                    <div class="col-lg-7">
                        <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="img/ppd1-1.jpg" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                        style="z-index: 2;">
                                        <h2 class="text-primary m-0">$35</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Teeth Whitening</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
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
                                        <h2 class="text-primary m-0">$49</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Dental Implant</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
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
                                        <h2 class="text-primary m-0">$99</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Root Canal</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i
                                            class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
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
        <!-- <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
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
        </div> -->
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Pegawai PPD Bintulu</h5>
                            <h1 class="display-6 mb-4">Timbalan Pegawai dan ketua sektor di PPD Bintulu</h1>
                            <a href="appointment.html" class="btn btn-primary py-3 px-5">Appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-2.png" alt="">
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
                                <img class="img-fluid rounded-top w-100" src="img/team-3.png" alt="">
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
                                <img class="img-fluid rounded-top w-100" src="img/team-4.png" alt="">
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
                                <h4 class="mb-2">Law siong Lee</h4>
                                <p class="text-primary mb-0">Timbalan PPD Sektor Pengurusan Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/image.jpg" alt="">
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
                                <img class="img-fluid rounded-top w-100" src="img/team-6.png" alt="">
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
