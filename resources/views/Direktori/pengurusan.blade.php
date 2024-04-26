@extends('layouts.app')

@section('content')
<style>
    .obj-frame {
        background-color: #f0f0f0; 
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .chart-container {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        text-align:center;
    }

    .chart-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .chart-header h2 {
        color: #333;
    }

    .chart-box {
        border-radius: 5px;
        background-color: #f0f0f0;
        padding: 10px;
        margin-bottom: 10px;
        margin: 15px; /* Adjust the spacing around each box */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effects */
    }

    .chart-box img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: #d9d9d9;
        margin-bottom: 10px;
    }

    .chart-box h3 {
        margin: 0;
        color: #333;
        font-size: 1.2em;
    }

    .chart-box p {
        color: #666;
    }

    /* Hover effect for chart box */
    .chart-box:hover {
        transform: translateY(-5px); /* Slight lift effect on hover */
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.15); /* Increased shadow on hover for depth */
    }

    .ketua-sektor {
        text-align: center;
        margin-bottom: 30px;
        
    }

    .ketua-sektor img {
        width: 240px; /* Adjust size as needed */
        height: auto;
        border-radius: 20%;
        margin-bottom: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .ketua-sektor h3 {
        margin: 0;
        color: #333;
    }

    .ketua-sektor p {
        color: #666;
    }

    .organizational-chart img {
        width: 100%; /* Ensure the chart fits the container */
        height: auto;
        border-radius: 10px; /* Optional: if you want rounded corners for the image */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }
</style>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">SEKTOR PENGURUSAN</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary">Direktori</h5>
                    <h4 class="display-5 mb-0">PPD Bintulu</h4>
                </div>
                <!-- Ketua Sektor Perancangan -->
                <!--
                <div class="ketua-sektor">
                    <img src="{{ asset('img/Cikgu Yusuf.png') }}" alt="Ketua Sektor Perancangan">
                    <h3>Nama Ketua</h3>
                    <p>Ketua Sektor Perancangan</p>
                </div>
                -->
                <!-- Organizational Chart Image -->
                <div class="organizational-chart">
                    <img src="{{ asset('img/sektorpengurusan.png') }}" alt="Organizational Chart Sektor Pengurusan">
                </div>
            </div>
        </div>
        {{-- ... other sections ... --}}

        <div class="chart-container">
            <!-- Pegawai Meja Section -->
            <div class="chart-header">
                <h2>Pegawai Meja</h2>
            </div>
            <div class="row">
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Sistem Pengurusan Latihan Kementerian Pendidikan Malaysia (SPLKPM) </h3>
                        <p>Mohamad Saufi bin Usup<br>Ketua Sektor Pengurusan</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>HRMIS: Pentadbir HRMIS</h3>
                        <p>Marrylin anak Latan<br>Pembantu Tadbir (P/O)</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>HRMIS: Pengistiharan Harta</h3>
                        <p>Mohamad Saufi bin Usup<br>Ketua Sektor Pengurusan</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>HRMIS: LNPT</h3>
                        <p>Mohamad Saufi bin Usup<br>Ketua Sektor Pengurusan</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>HRMIS: MyPortfolio</h3>
                        <p>Ayuk George<br>Ketua Unit Sumber Manusia</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>HRMIS: Job Description</h3>
                        <p>Ayuk George<br>Ketua Unit Sumber Manusia</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>HRMIS: Cuti</h3>
                        <p>Megawati binti Yaman<br>Pembantu Tadbir (P/O)</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>HRMIS: MyPerformance</h3>
                        <p>Ayuk George & Mordiana binti Peralin<br>Ketua Unit Sumber Manusia Pembantu Tadbir (P/O)</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>e-Proper</h3>
                        <p>Ayuk George & Judah anak Undi<br>Ketua Unit Sumber Manusia Pembantu Tadbir (P/O)</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>e-Pengesahan</h3>
                        <p>Ayuk George & Judah anak Undi<br>Ketua Unit Sumber Manusia Pembantu Tadbir (P/O)</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Sistem Tapisan Keutuhan SPRM (ESTK)</h3>
                        <p>Ayuk George<br>Ketua Unit Sumber Manusia</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>eBil (Laporan Bil. Lewat)</h3>
                        <p>Sharipah Aisah binti Wan Ahmad<br>Ketua Unit Kewangan</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>eSPKWS (Akaun Sekolah)</h3>
                        <p>Sharipah Aisah binti Wan Ahmad<br>Ketua Unit Kewangan</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>laref (JANM)</h3>
                        <p>Sharipah Aisah binti Wan Ahmad<br>Ketua Unit Kewangan</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>EPGA</h3>
                        <p>Sharipah Aisah binti Wan Ahmad<br>Ketua Unit Kewangan</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>SAP LOGON (Gaji)</h3>
                        <p>Ales binti Alli<br>Pembantu Akauntan</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>AP58</h3>
                        <p>Jessica Hanya Wan<br>Pembantu Tadbir (Kew)</p>
                        <br>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('direktori') }}" class="btn btn-primary">Kembali ke Direktori</a>
        </div>

{{-- ... other sections ... --}}

@endsection
