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

    .organizational-chart img {
        width: 100%; /* Ensure the chart fits the container */
        height: auto;
        border-radius: 10px; /* Optional: if you want rounded corners for the image */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        cursor: zoom-in; /* Change cursor to indicate zoomable image */
    }
</style>

<section>
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">{{__('messages.carta')}}</h1>
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
                    <b><u><h4 class="display-5 mb-0">{{__('messages.carta 2')}}</h4></u></b>
                    <div class="organizational-chart">
                        <img src="{{ asset('img/carta organisasi.jpg') }}" alt="Organizational Chart Sektor Pembangunan Murid" data-action="zoom">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-4">
                    <b><u><h4 class="display-5 mb-0">{{__('messages.Pengurusan Tertinggi PPD Bintulu')}}</h4></u></b>
                    <div class="organizational-chart">
                        <img src="{{ asset('img/Pengurusan Tertinggi 2.png') }}" alt="Organizational Chart Sektor Pembangunan Murid" data-action="zoom">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include zoom.min.js script from jsDelivr CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zoom-vanilla.js/dist/zoom.css">
<script src="https://cdn.jsdelivr.net/npm/zoom-vanilla.js/dist/zoom.min.js"></script>

@endsection
