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
    <!-- Kokurikulum Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Lepas Menengah')}}</h5>
                        <h3 class="display-5 mb-0">{{__('messages.Kokurikulum')}}</h3>
                    </div>

                    <div class="obj-frame">
                        <p>{{__('messages.Semua murid Tingkatan 6 wajib terlibat dalam aktiviti kokurikulum dan pemarkahan 10 peratus kokurikulum adalah berdasarkan pengiraan dua markah tertinggi dalam bidang berikut :')}}</p>
                        <ol>
                            <li>{{__('messages.Kelab / Persatuan;')}}</li>
                            <li>{{__('messages.Sukan / Permainan; dan')}}</li>
                            <li>{{__('messages.Badan Beruniform.')}}</li>
                        </ol>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('lepas_menengah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Lepas Menengah')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
