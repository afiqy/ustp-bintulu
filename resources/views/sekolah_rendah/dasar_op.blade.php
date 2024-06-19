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
                        <h3 class="display-5 mb-0">{{__('messages.Dasar Pengoperasian Pendidikan Rendah Wajib')}}</h3>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>{{__('messages.Pengenalan')}}</strong></h5>
                        <p>{{__('messages.Dasar ini bertujuan memastikan setiap ibu bapa warganegara yang menetap di Malaysia yang mempunyai anak mencapai umur enam tahun pada hari pertama tahun persekolahan semasa, mestilah mendaftarkannya di sekolah rendah. Di samping itu juga, ibu bapa perlu memastikan anak yang didaftarkan akan terus menjadi murid di sekolah rendah sepanjang tempoh pendidikan rendah.')}}</p>

                        <h5><strong>{{__('messages.Penyataan Dasar')}}</strong></h5>
                        <p>{{__('messages.Pendidikan wajib adalah satu undang-undang yang memerlukan setiap ibu bapa warganegara Malaysia yang menetap di Malaysia hendaklah memastikan bahawa jika anaknya mencapai umur enam tahun pada hari pertama bulan Januari dalam tahun persekolahan semasa, anak itu didaftarkan di sekolah rendah. Tempoh pendidikan wajib adalah selama enam tahun, iaitu tempoh pendidikan rendah.')}}</p>

                        <h5><strong>{{__('messages.Punca Kuasa')}}</strong></h5>
                        <ul>
                            <li>{{__('messages.Akta Pendidikan 1996 (Akta 550) : Subseksyen 29A(1), (2), (3) dan (4).')}}</li>
                            <li>{{__('messages.Surat Pekeliling Ikhtisas Bil. 14/2002: Pelaksanaan Pendidikan Wajib di Peringkat Rendah 2003 bertarikh 27 November 2002.')}}</li>
                            <li>{{__('messages.Garis Panduan Pelaksanaan Pendidikan Wajib di Peringkat Rendah tahun 2003.')}}</li>
                        </ul>

                        <h5><strong>{{__('messages.Kaedah Pelaksanaan')}}</strong></h5>
                        <ul>
                            <li>{{__('messages.Melaksanakan proses pendaftaran yang bermula dengan permohonan dan pengesahan sebelum kanak-kanak mendaftar pada hari pertama persekolahan.')}}</li>
                            <li>{{__('messages.Mematuhi kriteria pelaksanaan pendidikan wajib dari segi tempoh pendidikan dan kanak-kanak yang terlibat.')}}</li>
                            <li>{{__('messages.Peringatan dari segi implikasi perundangan berikutan kegagalan ibu bapa memastikan anaknya mengikuti pendidikan wajib.')}}</li>
                        </ul>

                        <h5><strong>{{__('messages.Penalti')}}</strong></h5>
                        <p>{{__('messages.Kegagalan ibu bapa memastikan anaknya mengikut pendidikan wajib merupakan satu kesalahan dari segi undang-undang. Ibu bapa yang disabitkan dengan kesalahan boleh dikenakan denda tidak melebihi lima ribu ringgit atau dipenjarakan tidak lebih enam bulan atau kedua-duanya sekali.')}}</p>
                        <!-- Other policy details -->

                        <h5><strong>{{__('messages.Tarikh Kuatkuasa :')}} </strong>{{__('messages.1 Januari 2003.')}}</h5>
                    </div> <!-- Closing .obj-frame -->

                    <!-- Button to go back to the Pendidikan Sekolah Rendah page -->
                    <div class="mt-4">
                        <a href="{{ route('sek_rendah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Sekolah Rendah')}}</a>
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
