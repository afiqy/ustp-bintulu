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
    <!-- Maklumat Prasekolah Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Prasekolah</h5>
                        <h4 class="display-5 mb-0">Maklumat Prasekolah</h4>
                    </div>

                    <div class="obj-frame">
                        <a href="https://smpk.moe.gov.my/" target="_blank"><p>Klik sini untuk ke Sistem Maklumat Prasekolah Kebangsaan.</p></a>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('pra_sekolah') }}" class="btn btn-primary">Kembali ke Pendidikan Prasekolah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- Maklumat Prasekolah End -->
