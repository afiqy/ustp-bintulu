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
                        <h3 class="display-5 mb-0">Semak Keputusan Permohonan</h3>
                    </div>

                    <div class="obj-frame">
                        <h5>Semak Keputusan Permohonan Melalui Dua Cara:</h5>
                        <ol>
                            <li>Secara dalam talian (online)</li>
                            <ul>
                                <li>Semakan boleh dibuat melalui laman sesawang <a href="https://eprasekolah.moe.gov.my">eprasekolah.moe.gov.my</a> mulai 5 Ogos (tertakluk kepada pindaan).</li>
                            </ul>
                            <li>Secara manual melalui sekolah dimohon</li>
                            <ul>
                                <li>Semakan boleh dibuat melalui sekolah yang dimohon mulai 5 Ogos (tertakluk kepada pindaan).</li>
                            </ul>
                        </ol>
                    
                        <h5>Rayuan Permohonan:</h5>
                    <ul>
                        <li>Bagi permohonan yang tidak berjaya, ibu bapa/penjaga boleh mengemukakan rayuan melalui laman sesawang <a href="https://eprasekolah.moe.gov.my">eprasekolah.moe.gov.my</a> dalam tempoh dua minggu selepas keputusan diumumkan.</li>
                        <li>Bagi ibu bapa/penjaga yang mengemukakan permohonan secara manual, rayuan boleh dikemukakan sama ada di sekolah yang dimohon atau Pejabat Pendidikan Daerah (PPD) atau Jabatan Pendidikan Negeri (JPN) bagi negeri yang tiada PPD.</li>
                        <li>Keputusan rayuan boleh disemak melalui laman sesawang <a href="https://eprasekolah.moe.gov.my">eprasekolah.moe.gov.my</a> mulai 10 September (tertakluk kepada pindaan).</li>
                        <li>Bagi rayuan secara manual, semakan keputusan boleh dibuat di tempat rayuan dihantar. Ibu bapa/penjaga juga akan dimaklumkan oleh pihak sekolah yang berkenaan bagi rayuan yang berjaya.</li>
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
