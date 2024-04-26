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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Prasekolah</h5>
                        <h1 class="display-5 mb-0">Dasar Pendidikan Sekolah</h1>
                    </div>

                    <div class="obj-frame">
                        <p>Akta Pendidikan 1996 (Akta 550) memperuntukkan Pendidikan Prasekolah dalam Sistem Pendidikan Kebangsaan. Melalui pernyataan dasar ini, KPM bertanggungjawab untuk memberikan pendidikan prasekolah kepada kanak-kanak yang berumur empat hingga enam tahun.</p>
                        <p>Dari segi pendemokrasian pendidikan, dasar yang khusus membolehkan kanak-kanak menikmati peluang pendidikan prasekolah tanpa mengira pendapatan keluarga, kawasan tempat tinggal dan kumpulan etnik termasuk kanak-kanak berkeperluan khas.</p>
                        <p>Dasar Pendidikan Kebangsaan berkaitan pendidikan prasekolah :</p>
                        <ul>
                            <li>Memastikan kanak-kanak di Malaysia yang berumur 4+ hingga 5+ mendapat pendidikan prasekolah sama ada yang disediakan oleh KPM, agensi kerajaan, pihak swasta dan badan bukan kerajaan.</li>
                            <li>Memastikan pematuhan kepada penggunaan Kurikulum Prasekolah Kebangsaan (KPK) di semua institusi prasekolah kecuali di prasekolah antarabangsa dan ekspatriat.</li>
                        </ul>
                    </div> <!-- Closing .obj-frame -->
                </div>
                <div class="mt-4">
                    <a href="{{ route('pra_sekolah') }}" class="btn btn-primary">Kembali ke Pendidikan Pra Sekolah</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>
@endsection
