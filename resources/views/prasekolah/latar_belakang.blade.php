@extends('layouts.app')
@section('content')
<style>
.latar-frame {
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
                        <h1 class="display-5 mb-0">{{__('messages.Latar Belakang')}}</h1>
                    </div>

                    <div class="latar-frame">
                        <p>{{__('messages.Kementerian Pendidikan Malaysia (KPM) mula terlibat secara langsung dalam pelaksanaan pendidikan prasekolah setelah mendapat kelulusan Mesyuarat Jemaah Menteri pada 18 Disember 1991 untuk melaksanakan program prasekolah yang telah dirancang dan dimulakan bagi tahun 1991/1992.')}}</p>
                        <p>{{__('messages.Mesyuarat antara kementerian yang dipengerusikan oleh Timbalan Perdana Menteri Malaysia pada 27 Januari 1992 bersetuju supaya KPM meneruskan pelaksanaan Projek Pendidikan Prasekolah yang melibatkan 1070 buah sekolah dengan 1131 buah kelas. Program ini dilancarkan pada tahun 1992 yang dikenali sebagai prasekolah annex.')}}</p>
                        <p>{{__('messages.Program Prasekolah di bawah KPM diperluaskan di seluruh negara secara berperingkat-peringkat mulai tahun 2002.')}}</p>
                        <p>{{__('messages.Akta Pendidikan 1996 (Akta 550), memperuntukkan Pendidikan Prasekolah dalam Sistem Pendidikan Kebangsaan. Melalui Dasar Pendidikan Prasekolah, KPM bertanggungjawab memberikan pendidikan prasekolah kepada kanak-kanak yang berumur empat hingga enam tahun.')}}</p>
                        <p>{{__('messages.Dalam Bidang Keberhasilan Utama Negara (NKRA) Pendidikan, kerajaan memberi tumpuan kepada 4 sub-NKRA untuk meluaskan akses kepada pendidikan berkualiti dan berkemampuan di mana pendidikan prasekolah merupakan salah satu daripada Sub-NKRA tersebut. Key Performance Indicator (KPI) yang ditetapkan bagi Sub-NKRA ini adalah meningkatkan kadar penyertaan kanak-kanak berumur (4+ dan 5+) serta meningkatkan kualiti pendidikan prasekolah dengan menjadikan prasekolah swasta dan agensi-agensi lain sebagai sebahagian daripada sistem pendidikan kebangsaan.')}}</p>
                        <p>{{__('messages.Pelan Pembangunan Pendidikan Malaysia (PPPM) 2013-2025 turut mengambil kita kepentingan pendidikan prasekolah. Anjakan 1 PPPM 2013-2025 menggariskan tentang penyediaan kesamarataan akses kepada pendidikan berkualiti bertaraf antarabangsa. Sasaran di bawah anjakan ini adalah untuk meningkatkan kualiti prasekolah dan menggalakkan enrolmen sejagat.')}}</p>
                    </div> <!-- Closing .obj-frame -->
                </div>
                <div class="mt-4">
                    <a href="{{ route('pra_sekolah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Pra Sekolah')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>
@endsection
