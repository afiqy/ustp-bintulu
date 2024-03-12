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
    <!-- Tempoh Pengajian Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Lepas Menengah</h5>
                        <h3 class="display-5 mb-0">Tempoh Pengajian</h3>
                    </div>

                    <div class="obj-frame">
                        <p>Tempoh pengajian di Tingkatan 6 adalah selama 1 ½ tahun:</p>
                        <ol>
                            <li>
                                <strong>Semester 1:</strong> Mei hingga November, 26 minggu termasuk :
                                <ul>
                                    <li>Pengajaran dan Pembelajaran (PdP)</li>
                                    <li>Kerja Kursus (mata pelajaran berkenaan sahaja)</li>
                                    <li>Peperiksaan Semester 1 (S1)</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Semester 2:</strong> Januari hingga Mei, 20 minggu termasuk :
                                <ul>
                                    <li>Pengajaran dan Pembelajaran (PdP)</li>
                                    <li>Kerja Kursus (mata pelajaran berkenaan sahaja)</li>
                                    <li>Peperiksaan Semester 2 (S2)</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Semester 3:</strong> Mei hingga November, 26 minggu termasuk :
                                <ul>
                                    <li>Pengajaran dan Pembelajaran (PdP)</li>
                                    <li>Kerja Kursus (mata pelajaran berkenaan sahaja)</li>
                                    <li>Peperiksaan Semester 3 (S3), peperiksaan Ulang 1 (U1) dan peperiksaan Ulang 2 (U2)</li>
                                </ul>
                            </li>
                        </ol>
                        <p>Kandungan kurikulum dibahagikan kepada tiga bahagian berdasarkan kelompok tajuk atau mengikut kesesuaian bidang kajian disiplin berkenaan untuk mengisi tiga Semester, iaitu S1, S2 dan S3 dalam tempoh pengajian selama 1½ tahun.</p>
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
