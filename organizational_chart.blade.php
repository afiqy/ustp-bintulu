@extends('layouts.app')

@section('content')
 <style>
    .img-fluid {
        height: 400px; /* Adjust height as necessary */
        object-fit: cover;
    }

    .team-item {
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
        background-color: #f9f9f9; /* Background color for staff */
    }

    .staff-info {
        margin-top: -18px;
        display: flex; /* Use flexbox */
        flex-direction: column; /* Stack elements vertically */
        align-items: center; /* Center items horizontally */
        justify-content: center; /* Center items vertically */
        text-align: center;
        background-color: white;
        border: 2px solid #ddd;
        padding: 10px;
        position: relative;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        animation: fadeInUp 1s ease-in-out; /* Add animation to fade in */
    }

    .staff-info h4 {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .staff-info p {
        font-size: 14px;
        color: #666;
        margin-bottom: 0;
    }

    /* Animation for fading in */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* This class is added for the image container */
    .image-container {
        margin-bottom: 30px; /* Space below the image */
    }

    .boss-info {
        text-align: right;
    }
    
</style>

    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">CARTA ORGANISASI</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Main Content Start -->
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pejabat Pendidikan Daerah Bintulu</h5>
                        <b><u><h4 class="display-5 mb-0">Pengurusan Tertinggi PPD Bintulu</h4></u></b>
                    </div>
                </div>
            </div>

            <!-- Boss Section -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-1.png" alt="Boss Image" class="img-fluid mb-3" >
                        </div>
                        <div class="staff-info ">
                            <h4>PEGAWAI PENDIDIKAN DAERAH BINTULU</h4>
                            <p>SAMRI BIN SUHAILI</p>
                        </div>
                    </div>
                </div>
                <!-- Add more columns here for additional information if needed -->
            </div>

            <!-- Staff Section -->
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-2.png" alt="Staff Image" class="img-fluid mb-3">
                        </div>
                        <div class="staff-info">
                            <h4>TIMBALAN PPD<br>SEKTOR PERANCANGAN</h4>
                            <p>YUSUP BIN HJ. HARBI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-3.png" alt="Staff Image" class="img-fluid mb-3">
                        </div>
                        <div class="staff-info">
                            <h4>TIMBALAN PPD<br>SEKTOR PEMBELAJARAN</h4>
                            <p>NAFISAH BINTI ROSLI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-4.png" alt="Staff Image" class="img-fluid mb-3">
                        </div>
                        <div class="staff-info">
                            <h4>TIMBALAN PPD<br>SEKTOR PENGURUSAN SEKOLAH</h4>
                            <p>LAW SIONG LEE</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-5.png" alt="Staff Image" class="img-fluid mb-3" style="object-fit: cover;">
                        </div>
                        <div class="staff-info">
                            <h4>TIMBALAN PPD<br>SEKTOR PEMBANGUNAN MURID</h4>
                            <p>AWANGKU ALIUDDIN BIN PENGIRAN ADENANI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-8.png" alt="Staff Image" class="img-fluid mb-3" >
                        </div>
                        <div class="staff-info">
                            <h4>KAUNSELOR PENDIDIKAN DAERAH SEKTOR PSIKOLOGI DAN KAUNSELING</h4>
                            <p>IESHA RINA BAWANG ANAK UNDING</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-7.png" alt="Staff Image" class="img-fluid mb-3">
                        </div>
                        <div class="staff-info">
                            <h4>SEKTOR PENTAKSIRAN<br>DAN PEPERIKSAAN</h4>
                            <p>LAKHIRBA BIN ZAIDI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="img/team-6.png" alt="Staff Image" class="img-fluid mb-3">
                        </div>
                        <div class="staff-info">
                            <h4>SEKTOR PENGURUSAN</h4>
                            <p>MOHAMAD SAUFI BIN USUP</p>
                        </div>
                    </div>
                </div>
                <!-- Add more columns here for additional staff members -->
            </div>
        </div>
    </section>
@endsection
