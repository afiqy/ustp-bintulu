@extends('layouts.app')

@section('content')
<style>
.obj-frame {
    background-color: #f0f0f0; 
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.sector-list {
    list-style-type: none;
    padding: 0;
}

.sector-list li {
    margin-bottom: 10px;
}

.sector-list li a {
    display: block;
    padding: 15px;
    border-radius: 5px;
    background-color: #fff;
    color: #333;
    transition: all 0.3s ease;
}

.sector-list li a:hover {
    background-color: #f0f0f0;
    color: #555;
}
</style>

<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">{{__('messages.direktori')}}</h1>
        </div>
    </div>
</div>

<section>
    <div class="container py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary">{{__('messages.direktori_2')}}</h5>
                    <h4 class="display-5 mb-0">{{__('messages.Sektor PPD Bintulu')}}</h4>
                </div>

                <div class="obj-frame">
                    <p>{{__('messages.Sila Pilih Sektor:')}}</p>
                    <ul class="sector-list">
                        <li><a href="{{ url('Direktori/perancangan') }}">{{__('messages.Sektor Perancangan')}}</a></li>
                        <li><a href="{{ url('Direktori/pembelajaran') }}">{{__('messages.Sektor Pembelajaran')}}</a></li>
                        <li><a href="{{ url('Direktori/pengurusan_sekolah') }}">{{__('messages.Sektor Pengurusan Sekolah')}}</a></li>
                        <li><a href="{{ url('Direktori/pembangunan_murid') }}">{{__('messages.Sektor Pembangunan Murid')}}</a></li>
                        <li><a href="{{ url('Direktori/psikologi') }}">{{__('messages.Sektor Psikologi & Kaunseling')}}</a></li>
                        <li><a href="{{ url('Direktori/pentaksiran') }}">{{__('messages.Sektor Pentaksiran & Peperiksaan')}}</a></li>
                        <li><a href="{{ url('Direktori/pengurusan') }}">{{__('messages.Sektor Pengurusan')}}</a></li>
                        <li><a href="{{ url('Direktori/unit_ict') }}">{{__('messages.Unit Pasukan Teknikal ICT Sekolah')}}</a></li>
                        <!-- Add more sectors as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection