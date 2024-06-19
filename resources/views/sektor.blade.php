@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<style>
    .sector-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(135deg, #f6d365, #fda085);
    }

    .sector-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .sector-card:hover::before {
        opacity: 1;
    }

    .sector-card img {
        border-radius: 15px 15px 0 0;
        object-fit: cover;
        width: 100%;
        height: 300px;
        transition: transform 0.3s ease;
    }

    .sector-card:hover img {
        transform: scale(1.05);
    }

    .sector-card .card-body {
        display: flex;
        flex-direction: column;
        align-items: center; /* Center items horizontally */
        justify-content: center; /* Center items vertically */
        padding: 1.5rem;
        background-color: transparent;
        position: relative;
        z-index: 1;
    }

    .sector-card .card-title {
        text-align:center;
        font-size: 1.8rem;
        font-weight: bold;
        color: #fff;
        margin-bottom: 0.5rem;
        
    }

    .sector-card .card-text {
        color: #f0f0f0;
        margin-bottom: 1.5rem;
    }

    .sector-card .btn {
        background-color: transparent;
        border-color: #fff;
        color: #fff;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        margin-top: auto; /* Push the button to the bottom */
        width: 150px; /* Adjust the width as needed */
        text-align: center; /* Center the text horizontally */
    }


    .sector-card .btn:hover {
        background-color: #fff;
        color: #f6d365;
    }

    .welcome-message {
        font-size: 2.5rem;
        font-weight: bold;
        color: #000000;
        text-align: center;
        margin-bottom: 3rem;
        animation: fadeInUp 1s ease;
    }

    /* Animation Keyframes */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
</style>

<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">{{__('messages.SEKTOR & UNIT')}}</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 border-0 shadow sector-card animate__animated animate__fadeInUp">
                <img src="{{ asset('img/perancangan.png') }}" class="card-img-top" alt="Sektor 1 Logo">
                <div class="card-body">
                    
                    <a href="{{ route('BigData.sektor-perancangan') }}" class="btn btn-primary">{{__('messages.Klik')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow sector-card animate__animated animate__fadeInUp">
                <img src="{{ asset('img/pembelajaran.png') }}" class="card-img-top" alt="Sektor 1 Logo">
                <div class="card-body">
                   
                    <a href="{{ route('BigData.sektor-pembelajaran') }}" class="btn btn-primary">{{__('messages.Klik')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow sector-card animate__animated animate__fadeInUp">
                <img src="{{ asset('img/pengurusansekolah.png') }}" class="card-img-top" alt="Sektor 1 Logo">
                <div class="card-body">
                    
                    <a href="{{ route('BigData.sektor-pengurusan-sekolah') }}" class="btn btn-primary">{{__('messages.Klik')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow sector-card animate__animated animate__fadeInUp">
                <img src="{{ asset('img/pembangunanmurid.png') }}" class="card-img-top" alt="Sektor 1 Logo">
                <div class="card-body">
                    
                    <a href="{{ route('BigData.sektor-pembangunan-murid') }}" class="btn btn-primary">{{__('messages.Klik')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow sector-card animate__animated animate__fadeInUp">
                <img src="{{ asset('img/psikologi.png') }}" class="card-img-top" alt="Sektor 1 Logo">
                <div class="card-body">
                   
                    <a href="{{ route('BigData.sektor-psikologi') }}" class="btn btn-primary">{{__('messages.Klik')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow sector-card animate__animated animate__fadeInUp">
                <img src="{{ asset('img/pentaksiran.png') }}" class="card-img-top" alt="Sektor 1 Logo">
                <div class="card-body">
                    
                    <a href="{{ route('BigData.sektor-pentaksiran') }}" class="btn btn-primary">{{__('messages.Klik')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow sector-card animate__animated animate__fadeInUp">
                <img src="{{ asset('img/pengurusan.png') }}" class="card-img-top" alt="Sektor 1 Logo">
                <div class="card-body">
                    
                    <a href="{{ route('BigData.sektor-pengurusan') }}" class="btn btn-primary">{{__('messages.Klik')}}</a>
                </div>
            </div>
        </div>
        <!-- Repeat similar card structures for other sectors -->
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block">Laman Utama</a>
        </div>
    </div>
</div>

@endsection
