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
                        <h4 class="display-5 mb-0">{{__('messages.Pengenalan')}}</h4>
                    </div>

                    <div class="obj-frame">
                        <p>{{__('messages.Pendidikan Menengah Rendah adalah untuk murid-murid yang berumur 13 hingga 15 tahun (Tingkatan Satu hingga Tingkatan Tiga) dan diberikan pendedahan pelbagai bidang ilmu dengan menggunakan bahasa kebangsaan sebagai bahasa pengantar utama. Pendidikan Menengah Atas disediakan kepada murid-murid berumur 16 hingga 17 tahun (Tingkatan Empat hingga Tingkatan Lima) menjurus kepada aliran sastera, sains, agama, teknik, vokasional dan kemahiran termasuk menyediakan murid-murid untuk melanjutkan pelajaran ke peringkat pendidikan tinggi atau alam pekerjaan.')}}</p>
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
