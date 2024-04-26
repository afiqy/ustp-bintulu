@extends('layouts.app')

@section('content')

<style>
.card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    transition: box-shadow 0.3s ease;
}

.card:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15), 0 3px 6px rgba(0, 0, 0, 0.1);
}

.card-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
}

.card-text {
    color: #666;
}

.card-body {
    padding: 20px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 5px;
    padding: 8px 20px;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

}


</style>
    <!-- Page content -->
    <div class="container-fluid px-0 bg-primary py-5 hero-header mb-5" style="padding-left: 0; padding-right: 0;">
        <div class="row py-3" style="padding-left: 0; padding-right: 0;">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Sektor Pembangunan Murid</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">APPI Sekolah Menengah</h5>
                        <a href="https://appimr.moe.gov.my/login" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">APPI Sekolah Rendah</h5>
                        <a href="https://appisr.moe.gov.my/login" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sistem Sahsiah Diri Murid (SSDM)</h5>
                        <a href="https://ssdm.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Aplikasi Pengurusan Bantuan (APB)</h5>
                        <a href="https://apb1.moe.gov.my/demomanual.cfm" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sistem e-Profil Kerjaya Murid (SePKM)</h5>
                        <a href="https://epkm.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Aplikasi Pangkalan Data Murid (APDM)</h5>
                        <a href="https://apdm.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sistem Pengurusan Asrama Harian (i-Asrama) </h5>
                        <a href="https://tah.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Pentaksiran Aktiviti Jasmani, Sukan & Kokurikulum (PAJSK)</h5>
                        <a href="https://pajsk.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sistem Pengurusan Latihan Kementerian Pendidikan Malaysia (SPLKPM)</h5>
                        <a href="https://splkpm.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <!-- Add more cards for other links -->
        </div>
    </div>

@endsection
