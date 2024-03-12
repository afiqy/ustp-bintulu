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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Sekolah Menengah</h5>
                        <h4 class="display-5 mb-0">Sekolah Menengah Kebangsaan (Harian)</h4>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>PENDAFTARAN</strong></h5>
                        <p>Melalui Penempatan:</p>
                        <ul>
                            <li>Guru kelas Tahun 6 SK/SRAB/SJKC /SJKT menggunakan aplikasi APDM (Modul e-Daftar Menengah) bagi murid warganegara sahaja berdasarkan Borang Permohonan Penempatan Sekolah (BPPS) yang dilengkapkan oleh ibu bapa/penjaga.</li>
                            <li>Murid warganegara yang tercicir (pendidikan wajib) boleh mohon dengan menggunakan borang ASBS yang boleh didapati di PPD dan JPN.</li>
                            <li>Murid warganegara dari luar negara boleh mohon dengan borang ASBS yang boleh didapati di PPD dan JPN.</li>
                        </ul>
                        <p>Melalui Permohonan:</p>
                        <ul>
                            <li>Murid Bukan Warganegara boleh memohon menggunakan Borang PU(A)275 Jadual Pertama melalui Unit Perhubungan dan Pendaftaran di JPN. Borang boleh diperolehi dari Pejabat Pendidikan Daerah yang berhampiran.</li>
                        </ul>
                        <h5><strong>SENARAI SEKOLAH</strong></h5>
                        <ul>
                            <li>Sekolah Menengah Kebangsaan Bintulu</li>
                            <li>Sekolah Menengah Kebangsaan Bandar Bintulu</li>
                            <li>Sekolah Menengah Kebangsaan Baru Bintulu</li>
                            <li>Sekolah Menengah Kebangsaan Kemena Bintulu</li>
                            <li>Sekolah Menengah Kebangsaan Kidurong Bintulu</li>
                            <li>Sekolah Kebangsaan Asyakirin Bintulu</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('sek_menengah') }}" class="btn btn-primary">Kembali ke Pendidikan Sekolah Menengah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
