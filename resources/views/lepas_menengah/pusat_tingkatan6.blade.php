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
    <!-- Pusat Tingkatan 6 Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Lepas Menengah')}}</h5>
                        <h3 class="display-5 mb-0">{{__('messages.Pusat Tingkatan 6')}}</h3>
                    </div>

                    <div class="obj-frame">
                        <h4>{{__('messages.Kolej Tingkatan 6')}}</h4>
                        <p><strong>{{__('messages.Mod 1')}}</strong>{{__('messages. - Sekolah yang mempunyai sekurang-kurangnya 12 kelas yang menempatkan hanya murid-murid Tingkatan 6 sahaja dan diajar oleh guru-guru akademik yang telah dilantik sebagai guru Tingkatan 6.')}}</p>
                        <p><strong>{{__('messages.Mod 2')}}</strong>{{__('messages. - Sekolah yang mempunyai sekurang-kurangnya 12 kelas, beroperasi di sekolah arus perdana tetapi di blok atau bangunan yang berasingan. Walau bagaimanapun, Pusat Mod 2 ditadbir oleh Pengetua arus perdana dengan kerjasama Penolong Kanan Tingkatan 6.')}}</p>
                        <p><strong>{{__('messages.Mod 3')}}</strong>{{__('messages. - Sekolah yang mempunyai kurang daripada 12 kelas atau sekolah yang jauh daripada bandar, tiada kemudahan asrama atau pengangkutan awam, dan beroperasi di sekolah arus perdana.')}}</p>
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
