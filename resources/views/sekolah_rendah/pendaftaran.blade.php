@extends('layouts.app')
@section('content')
<style>
.obj-frame {
    background-color: #f0f0f0; 
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}
</style>
<section>
    <!-- About Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Sekolah Rendah')}}</h5>
                        <h4 class="display-5 mb-0">{{__('messages.Pendaftaran')}}</h4>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>{{__('messages.PENDAFTARAN')}}</strong></h5>
                        <p>{{__('messages.Pendaftaran Murid Tahun 1 kalendar akademik sesi 2024/2025 dibuka pada 1 Mei 2023 hingga 30 Jun 2023 di pautan')}} <a href="https://idme.moe.gov.my">https://idme.moe.gov.my</a> {{__('messages.bagi kanak-kanak yang lahir dari 2.1.2017 hingga 1.1.2018.')}}</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('sek_rendah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Sekolah Rendah')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
