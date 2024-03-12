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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Lepas Menengah</h5>
                        <h3 class="display-5 mb-0">Objektif</h3>
                    </div>

                    <div class="obj-frame">
                        <ul>
                            <li>Meningkatkan taraf pendidikan ke arah yang lebih tinggi.</li>
                            <li>Memberi pendidikan berdasarkan sistem penggal dan berdaya saing yang tinggi.</li>
                            <li>Memberi pendidikan yang setara dengan program prauniversiti yang lain.</li>
                            <li>Memastikan murid lulusan Sijil Tinggi Persekolahan Malaysia (STPM) mempunyai nilai kebolehpasaran yang tinggi.</li>
                            <li>Membentuk kepemimpinan menuju ke arah membina Negara Bangsa meliputi aspek perpaduan, patriotisme, dan jati diri bagi mendokong aspirasi nasional.</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('lepas_menengah') }}" class="btn btn-primary">Kembali ke Pendidikan Lepas Menengah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
