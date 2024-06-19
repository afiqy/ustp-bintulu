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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Prasekolah')}}</h5>
                        <h1 class="display-5 mb-0">{{__('messages.Pemilihan Murid')}}</h1>
                    </div>

                    <div class="obj-frame">
                        <h5>{{__('messages.Syarat-syarat kemasukan murid ke kelas prasekolah adalah seperti berikut:')}}</h5>
                        <ul>
                            <li>{{__('messages.Surat Siaran Kementerian Pelajaran Malaysia Bil. 2 Tahun 2012 - Hanya untuk Warganegara Malaysia sahaja dan dipilih menerusi JK Pemilihan.')}}</li>
                        </ul>
                        <h5>{{__('messages.Jawatankuasa Pemilihan murid dianggotai oleh:')}}</h5>
                        <ul>
                            <li>{{__('messages.Guru Besar')}}</li>
                            <li>{{__('messages.Penolong Kanan')}}</li>
                            <li>{{__('messages.Guru Prasekolah')}}</li>
                            <li>{{__('messages.Guru Tahap 1 dan 2')}}</li>
                            <li>{{__('PPM')}}</li>
                            <li>{{__('messages.Seorang wakil komuniti')}}</li>
                        </ul>
                    </div> <!-- Closing .obj-frame -->
                    <div class="mt-4">
                        <a href="{{ route('pra_sekolah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Pra Sekolah')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>
@endsection
