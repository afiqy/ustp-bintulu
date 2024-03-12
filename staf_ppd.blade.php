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

    .img-fluid {
        height: 350px; /* Adjust height as necessary */
        object-fit: cover;
    }

    .gradient-background {
        background: linear-gradient(to right, #007bff, #6a11cb); /* Example gradient from blue to purple */
    }
</style>

<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">STAF PPD</h1>
            </div>
        </div>
    </div>

    <!-- Staf PPD start -->
    <div class="container py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                    <h1 class="display-5 mb-0">Staf PPD Bintulu</h1>
                </div>
            </div>
        </div>
    </div>

        <!-- Boss Section -->
        <div class="container my-0" style="background-color: #f0f2f5;">
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <img src="img/Samri.png" class="img-fluid mx-auto d-block mb-3" alt="Boss Name">
                    <h5>Samri Bin Suhaili</h5>
                    <p>Pegawai Pendidikan Daerah</p>
                    <p>samrisuhaili@moe.gov.my</p>
                </div>
            </div>
        </div>
        <br>

        <!-- Subtitle Box: Pegawai Ikhtisas PPD Bintulu -->
        <div class="container-fluid bg-primary py-3 px-5 gradient-background">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center p-4 w-100">
                        <h6 class="display-6" style="font-size: 30px;">PEGAWAI IKHTISAS PPD BINTULU</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4" style="background-color: #f0f2f5;">
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="img/team-2.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Yusup Bin Hj. Harbi</h5>
                    <p>Timbalan PPD<br>Sektor Perancangan</p>
                    <p>yusup.harbi@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/team-3.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Nafisah Binti Rosli</h5>
                    <p>Timbalan PPD<br>Sektor Pembelajaran</p>
                    <p>nafisah.rosli@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/team-4.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Law Siong Lee</h5>
                    <p>Timbalan PPD<br>Sektor Pengurusan Sekolah</p>
                    <p>lawsionglee@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/team-5.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Awangku Aliuddin Bin<br>Pengiran Adenani</h5>
                    <p>Timbalan PPD<br>Sektor Pembangunan Murid</p>
                    <p>syahrul.sallamun@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Iesha.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Iesha Rina Bawang<br>Anak Unding</h5>
                    <p>Kaunselor Pendidikan Daerah<br>Sektor Psikologi Dan Kaunseling</p>
                    <p>iesha.rina@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/lakhirba.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Lakhirba Bin Zaidi</h5>
                    <p>Penolong PPD<br>(Ketua Sektor)<br>Sektor Pentaksiran Dan Peperiksaan</p>
                    <p>iesha.rina@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/saufi.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Mohamad Saufi Bin Usup</h5>
                    <p>Penolong Pegawai Tadbir<br>(Ketua Sektor)<br>Sektor Pengurusan</p>
                    <p>saufi@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Phua Ah Siew1.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Phua Ah Siew</h5>
                    <p>PSIPartners+<br>
                    <p>phuaahsiew@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Anita.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Anita Anak Duyok</h5>
                    <p>Penolong PPD<br>Unit Pemulihan Khas</p>
                    <p>anita.duyok@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Erin.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Erin Anak Chawong</h5>
                    <p>Penolong PPD<br>SISC+ (Bidang TVET)</p>
                    <p>erin.chawong@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Fatin.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Fatin Izzati Wong Abdullah</h5>
                    <p>Penolong PPD<br>Unit Pendidikan Khas</p>
                    <p>fatinizzati.wong@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Dr Hamidah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Dr. Hamidah Binti Mahmud</h5>
                    <p>Penolong PPD<br>Sektor Pengurusan Sekolah</p>
                    <p>hamidah.mahmud@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Hii Soon Bee.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Hii Soon Bee</h5>
                    <p>Penolong PPD<br>SISC+ (Bidang Sains Matematik)</p>
                    <p>soonbee@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Khadijah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Khadijah Binti Yahya</h5>
                    <p>Penolong PPD<br>SISC+ (Bidang Bahasa)</p>
                    <p>khadijahyahya@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Suzaima.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Suzaimawati Binti Sahari</h5>
                    <p>Penolong PPD<br>Unit Sekolah Menengah Dan Tingkatan 6</p>
                    <p>suzaimawati.sahari@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Wong Lian Sin2.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Wong Lian Sin</h5>
                    <p>Penolong PPD<br>Unit Pra Dan Sekolah Rendah</p>
                    <p>wong@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Yiek.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Yiek Soo Huong</h5>
                    <p>Penolong PPD<br>Unit Pemulihan Khas</p>
                    <p>yieksoohuong@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Adelina.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Adelina Miran Jalong</h5>
                    <p>Penolong PPD<br>Unit Hal Ehwal Murid</p>
                    <p>adelina.miranjalong@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Callie.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Callie Chen Siaw Chan</h5>
                    <p>Penolong PPD<br>Unit Sumber Teknologi Pendidikan</p>
                    <p>callie.chen@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Dorothy.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Dorothy Anak Julai</h5>
                    <p>Penolong PPD<br>Unit Pendidikan Khas</p>
                    <p>dorothyjulai@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Evelyn.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Evelyn Eba Anak Nompang</h5>
                    <p>Penolong PPD<br>Sektor Perancangan</p>
                    <p>evelyn.eba@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Haliza.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Haliza Binti Juki</h5>
                    <p>Penolong PPD<br>Unit Prasekolah Rendah</p>
                    <p>haliza.juki@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Mahdi.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Mahdi Bin Lamit</h5>
                    <p>Penolong PPD<br>Unit Pendidikan Islam</p>
                    <p>mahdi.lamit@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Farid.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Muhammad Farrid Bin<br>Che Hassan</h5>
                    <p>Penolong PPD<br>Unit Bakat Murid</p>
                    <p>muhamad.farrid@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Saidi.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Mohd Saidi Bin Suardi</h5>
                    <p>Penolong PPD<br>Unit Pembangunan<br>Bakat Murid</p>
                    <p>mohdsaidi.suardi@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Hafiz.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Muhammad Hafisz Bin Idris</h5>
                    <p>Penolong PPD<br>Sektor Pentaksiran<br>Dan Peperiksaan</p>
                    <p>hafizs@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Norsiah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Norsiah Binti Abu Bakar</h5>
                    <p>Penolong PPD<br>Unit Pendidikan Swasta</p>
                    <p>norsiah.abubakar@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Laila suhana.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Laila Suhana Binti Morshidi</h5>
                    <p>Penolong PPD<br>Unit Hal Ehwal Murid</p>
                    <p>lailasuhana@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Sunita.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Sunita Binti Zaidil</h5>
                    <p>Penolong PPD<br>Sektor Perancangan</p>
                    <p>sunita.zaidil@moe.gov.my</p>
                </div>
                <div class="col-md-3">
                    <img src="img/Zamilawati.png" class="img-fluid mx-auto d-block mb-3" alt="">
                    <h5>Zamilawati Binti Mohamad</h5>
                    <p>Penolong PPD<br>Unit Pendidikan Islam</p>
                    <p>zamilawati@moe.gov.my</p>
                </div>
                <!-- Repeat the above two <div class="col-md-3"> blocks for each staff member -->
            </div>
        </div>
        <br>

    <!-- Anggota Kumpulan Pelaksana PPD Bintulu -->
    <div class="container-fluid bg-primary py-3 px-5 gradient-background">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex flex-column align-items-center p-4 w-100">
                    <h6 class="display-6" style="font-size: 30px;">Anggota Kumpulan Pelaksana PPD Bintulu</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4" style="background-color: #f0f2f5;">
        <div class="row text-center">
            <div class="col-md-3">
                <img src="img/Ayuk.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Ayuk Anak George</h5>
                <p>Penolong Pegawai Tadbir<br>(N29)</p>
                <p>ayuk@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Christina Baking.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Christina Anak Baking</h5>
                <p>Penolong Jurutera<br>(JA29)</p>
                <p>christinabaking@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/christina mamat.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Christina Anak Mamat</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>christinamamat@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Cordelia.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Cordelia Tambong Anak<br>John Luyoh</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>ppdbintulu@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Dora.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Dora Binti Tamin</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>dora@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Hazura.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Hazura Binti Taip</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>hazura.taip@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Hadiah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Hadiah Binti Drahman</h5>
                <p>Pembantu Tadbir(P/O)<br>(N19)</p>
                <p>hadiah@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/judah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Judah Anak Undi</h5>
                <p>Pembantu Tadbir(P/O)<br>(N26 KUP)</p>
                <p>judah.undi@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Jessica.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Jessica Hanya Wan</h5>
                <p>Pembantu Tadbir Kewangan<br>(W19)</p>
                <p>jessica.hanyawan@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Jenny.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Jenny Lau Lee Yee</h5>
                <p>Pembantu Akauntan<br>(W19)</p>
                <p>jennyyee@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Khafida.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Khafida Binti Abdullah</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22)</p>
                <p>khafida.abdullah@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Marylin.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Marrylin Anak Lantan</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>marrylin@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Maimunah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Maimunah Binti Mat</h5>
                <p>Pembantu Pegawai Tadbir<br>(N29 KUP)</p>
                <p>maimunahmat@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Megawati.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Megawati Binti Yaman</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>megawati@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Mordiana.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mordiana Binti Perali</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>mordiana@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Ismail.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mohd. Ismail Bin Hassan</h5>
                <p>Juruteknik Komputer<br>(FA29 KUP)</p>
                <p>ismailhassan88@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Mayini.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mayini Bin Mechang</h5>
                <p>Pembantu Operasi</p>
                <p>mayini.mechang@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Naimah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Naimah Binti Othman</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>ppdbintulu@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Norhayati.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Norhayati Binti Abdul Rahim</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22)</p>
                <p>norhayati.abdulrahim@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/norkusiah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Norkusiah Binti Raini</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>norkusiah.raini@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Sharipah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Sharipah Aisah Binti Wan Ahmad</h5>
                <p>Penolong Pegawai Tadbir<br>(N32)</p>
                <p>sharifah.aisyah@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/siti hajar.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Siti Hajar Binti Mahmud</h5>
                <p>Pembantu Tadbir(P/O)<br>(N22 KUP)</p>
                <p>sitihajarmahmud@moe.gov.my</p>
            </div>
                 <!-- Repeat the above two <div class="col-md-3"> blocks for each staff member -->
        </div>
    </div>
    <br>

    <!-- Pemusatan Juruteknik PPD Bintulu -->
    <div class="container-fluid bg-primary py-3 px-5 gradient-background">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex flex-column align-items-center p-4 w-100">
                    <h6 class="display-6" style="font-size: 30px;">Pemusatan Juruteknik PPD Bintulu</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4" style="background-color: #f0f2f5;">
        <div class="row text-center">
            <div class="col-md-3">
                <img src="img/Ahmad Shahmizam.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Ahmad Shahmizam Narawi</h5>
                <p>Juruteknik Komputer<br>(FT22)</p>
                <p>ahmadshahmizam@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Alexandra1.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Alexandra Jadup Anak Nedy</h5>
                <p>Penolong Pegawai Teknologi Maklumat<br>(FA29)</p>
                <p>alexandranedy@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Junaidah1.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Junaidah Binti Ibrahim</h5>
                <p>Juruteknik Komputer<br>(FT19)</p>
                <p>junaidahibrahim@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Madelina.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Madelina Ngau</h5>
                <p>Juruteknik Komputer<br>(FT19)</p>
                <p>madelina@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Ismail.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mohammad Ismail Bin Hassan</h5>
                <p>Penolong Pegawai Teknologi Maklumat<br>(FA29)</p>
                <p>ismailhassan88@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Mohamad Noraswan.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mohammad Noraswan Bin Julis</h5>
                <p>Juruteknik Komputer<br>(FT22)</p>
                <p>noraswan@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Saiful.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mohammad Saiful Bin Saili</h5>
                <p>Penolong Pegawai Teknologi Maklumat<br>(FA29)</p>
                <p>saifulsaili@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/mohamad khaidzir.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mohamad Khaidzir Bin Hamzah</h5>
                <p>Juruteknik Komputer<br>(FT22)</p>
                <p>khaidzir.hamzah@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Nizam.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Mohamad Hazanizam Bin<br>Abdul Latif</h5>
                <p>Penolong Pegawai Teknologi Maklumat<br>(FA29)</p>
                <p>hazanizam88@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Naim.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Naim Bin Abdul Jalil</h5>
                <p>Juruteknik Komputer<br>(FT19)</p>
                <p>lictsmkbintulu@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Nurzalikha.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Nurzalikha Binti Anua</h5>
                <p>Juruteknik Komputer<br>(FT19)</p>
                <p>nurzalikha@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Nur Afisza.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Nur Afisza Binti Osaman</h5>
                <p>Juruteknik Komputer<br>(FT19)</p>
                <p>afisza.nur@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Sebarina.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Sebarina Binti Siji</h5>
                <p>Penolong Pegawai Teknologi Maklumat<br>(FA29)</p>
                <p>sebarina@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Marziah.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Sharifah Marziah Binti Wan Seh</h5>
                <p>Penolong Pegawai Teknologi Maklumat<br>(FA29)</p>
                <p>marziah.wanseh@moe.gov.my</p>
            </div>
            <div class="col-md-3">
                <img src="img/Zulfaqar.png" class="img-fluid mx-auto d-block mb-3" alt="">
                <h5>Zulfaqar Bin Abdul Jalil</h5>
                <p>Juruteknik Komputer<br>(FT22)</p>
                <p>zulfaqar.abdjalil@moe.gov.my</p>
            </div>
        </div>
    </div>
</section>
@endsection
