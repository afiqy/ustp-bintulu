@extends('layouts.app')
@section('content')
<style>
.obj-frame {
    background-color: #f0f0f0; 
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Add margin bottom to prevent overlap with footer */
}
</style>
<section>
    <!-- About Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Sekolah Menengah')}}</h5>
                        <h4 class="display-5 mb-0">{{__('messages.Pengurusan Asrama Harian')}}</h4>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>{{__('messages.Latar Belakang')}}</strong></h5>
                        <p>{{__('messages.KPM telah menyediakan tempat penginapan yang kondusif dan selamat kepada murid-murid yang kurang berkemampuan serta tinggal jauh daripada sekolah.')}}</p>
                        <h5><strong>{{__('messages.Tujuan')}}</strong></h5>
                        <p>{{__('messages.Kemudahan asrama yang disediakan adalah bertujuan melahirkan insan (murid) yang cemerlang dalam aspek intelek iaitu kurikulum dan kokurikulum serta seimbang dari segi jasmani dan rohani seperti yang diaspirasikan oleh Falsafah Pendidikan Kebangsaan.')}}</p>
                        <h5><strong>{{__('messages.Kaedah Pelaksanaan')}}</strong></h5>
                        <p>{{__('messages.Pengurusan asrama harian melaksanakan aktiviti murid berpandukan Buku Panduan Pengurusan Asrama Harian yang berpandukan kepada Surat-Surat Pekeliling Ikhtisas yang dikeluarkan oleh KPM.')}}</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('sek_menengah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Sekolah Menengah')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
