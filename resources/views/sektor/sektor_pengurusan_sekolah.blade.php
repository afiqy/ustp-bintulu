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
}
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



</style>
    <!-- Page content -->
    <div class="container-fluid px-0 bg-primary py-5 hero-header mb-5" style="padding-left: 0; padding-right: 0;">
        <div class="row py-3" style="padding-left: 0; padding-right: 0;">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Sektor Pengurusan Sekolah</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">e-Operasi</h5>
                        <a href="https://eoperasi.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Standard Kualiti Prasekolah Kebangsaan(SKPK KPM)</h5>
                        <a href="https://smpk.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Standard Kualiti Prasekolah Kebangsaan(SKPK Swasta)</h5>
                        <a href="https://smpk.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sistem Maklumat Prasekolah Kebangsaan(SMPK KPM)</h5>
                        <a href="https://smpk.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sistem Maklumat Prasekolah Kebangsaan(SMPK Swasta)</h5>
                        <a href="https://smpk.moe.gov.my/" target="_blank" class="btn btn-primary">Klik</a>
                    </div>
                </div>
            </div>
            <!-- Add more cards for other links -->
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block">Kembali ke Laman Utama</a>
            </div>
        </div>
    </div>

@endsection
