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
                <h1 class="display-3 text-white animated zoomIn">SEKTOR PEMBELAJARAN</h1>
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
                    <img src="{{ asset('img/3.png') }}" alt="Organizational Chart Sektor Pembelajaran">
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
                        <h3>Standard Kecergasan Fizikal Kebangsaan (SEGAK)</h3>
                        <p>Nafisah binti Rosli<br>Timbalan PPD</p>
                        <br><br><p></p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Pentaksiran Bilik Darjah (PBD) - Arus Perdana</h3>
                        <p>Nafisah binti Rosli<br>Timbalan PPD</p>
                        <p>Khadijah binti Yahya<br>SISC+ Bahasa</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras JU PLC PLaN</h3>
                        <p>Khadijah binti Yahya<br>SISC+ Bahasa</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras Highly Immersive Programme (HIP)</h3>
                        <p>Khadijah binti Yahya<br>SISC+ Bahasa</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>The Trends in International Mathematics and Science Study (TIMSS) & The Programme for International Student Assessment (PISA)</h3>
                        <p>Hii Soon Bee<br>SISC+ Sains dan Matematik</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras Amali Sains</h3>
                        <p>Hii Soon Bee<br>SISC+ Sains dan Matematik</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Program Duta Guru</h3>
                        <p>Hii Soon Bee<br>SISC+ Sains dan Matematik</p>
                        <p>Erin anak Chawong<br>SISC+ TVET</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras Kemahiran Berfikir Aras Tinggi (KBAT)</h3>
                        <p>Hii Soon Bee<br>SISC+ Sains dan Matematik</p>
                        <br><br><p></p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras Penafaran Kemahiran Berfikir Aras Tinggi (KBAT)</h3>
                        <p>Erin anak Chawong<br>SISC+ TVET</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras Sub Module STEM</h3>
                        <p>Yiek Soo Huong<br>Penolong PPD<br>Unit Pemulihan Khas</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras National Geographic</h3>
                        <p>Yiek Soo Huong<br>Penolong PPD<br>Unit Pemulihan Khas</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras Prasekolah (Kurikulum-Data IPPK)</h3>
                        <p>Yiek Soo Huong<br>Penolong PPD<br>Unit Pemulihan Khas</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Data Pemulihan Khas</h3>
                        <p>Anita Duyok & Yiek Soo Huong<br>Penolong PPD<br>Unit Pemulihan Khas</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>PBD MBPK</h3>
                        <p>Fatin Izzati Wong & Dorothy anak Julai<br>Penolong PPD<br>Unit Pendidikan Khas</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Penyelaras Inovasi</h3>
                        <p>Fatin Izzati Wong binti Abdullah<br>Penolong PPD<br>Unit Pendidikan Khas</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>Data j-QAF</h3>
                        <p>Mahdi bin Lamit<br>Penolong PPD<br>Unit Pendidikan Islam</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>PAFA</h3>
                        <p>Zamilawati binti Mohamad<br>Penolong PPD<br>Unit Pendidikan Islam</p>
                    </div>
                </div>
                <div class="col-md-6 g-4">
                    <div class="chart-box">
                        <h3>NIPPS</h3>
                        <p>Callie Chen Siew Chan<br>Penolong PPD<br>Unit Sumber Teknologi Pendidikan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('direktori') }}" class="btn btn-primary">Kembali ke Direktori</a>
        </div>

{{-- ... other sections ... --}}

@endsection
