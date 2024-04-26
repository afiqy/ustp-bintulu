@extends('layouts.app')
@section('content')
    <section>
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-3">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Khas</h5>
                        <h1 class="display-6 mb-0">Program Pendidikan Khas Integriti</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="pra-sekolah-accordion">
                        <!-- Syarat 1-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-1" aria-expanded="false" aria-controls="objektif-collapse-1">
                                    Sejarah
                                </button>
                            </h2>
                            <div id="objektif-collapse-1" class="accordion-collapse collapse" aria-labelledby="objektif-heading-1" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>Tahun 1962- Program Pendidikan Khas Integrasi (PPKI) (Rancangan Percantuman) bagi pendidikan kanak-kanak kurang upaya penglihatan di sekolah rendah dan menegah arus perdana yang terpilih mula diperkenalkan.</li>
                                        <li>Tahun 1963- Pembukaan kelas-kelas pendidikan khas Rancangan Percantuman kurang upaya pendengaran di sekolah rendah dan sekolah menengah mula dilaksanakan.</li>
                                        <li>Tahun 1988- Kementerian Pendidikan Malaysia telah memulakan kelas perintis untuk murid-murid peringkat rendah bermasalah pembelajaran dan seterusnya ke suluruh Negara.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 2-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-2" aria-expanded="false" aria-controls="objektif-collapse-2">
                                    Tujuan Program 
                                </button>
                            </h2>
                            <div id="objektif-collapse-2" class="accordion-collapse collapse" aria-labelledby="objektif-heading-2" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>Semua murid berkeperluan pendidikan Khas (MBK) berpeluang untuk menerima akses pendidikan yang releven dan sesuai</li>
                                        <li>Semua MBK perlu diperkembangkan bakat dan potensi murid melalui pendidikan vokasional bagi menghasilkan insan yang berkemahiran ke arah meningkatkan kualiti hidup.</li>
                                        <li>Semua MBK diberi peluang untuk mengikuti Program Intervensi Awal agar tahap keupayaan mereka dapat dioptimumkan.</li>
                                        <li>Menyediakan peluang MBK untuk mengikuti program pendidikan yang menjurus kepada peningkatan potensi sedia ada bagi melahirkan kumpulan separuh mahir dan seterusnya menjadi aset kepada negara.</li>
                                        <li>MBK yang berpotensi seboleh-bolehnya ditempatkan secara inklusif di kelas-kelas arus perdana..</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 3-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-3" aria-expanded="false" aria-controls="objektif-collapse-3">
                                    Peranan BPKHAS
                                </button>
                            </h2>
                            <div id="objektif-collapse-3" class="accordion-collapse collapse" aria-labelledby="objektif-heading-3" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>Bahagian Pendidikan Khas berperanan merancang, mengurus dan mengawal selia pembangunan pendidikan bagi MBK di peringkat Kementerian.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 4-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-4" aria-expanded="false" aria-controls="objektif-collapse-4">
                                    Peranan Jabatan Pelajaran Negeri (JPN)
                                </button>
                            </h2>
                            <div id="objektif-collapse-4" class="accordion-collapse collapse" aria-labelledby="objektif-heading-4" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>Jabatan Pelajaran Negeri (JPN) berperanan merancang dan mengurus PPKI, serta mengawal selia pelaksanaan pembangunan pendidikan bagi MBK di PPKI peringkat negeri.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('pen_khas') }}" class="btn btn-primary">Kembali ke Pendidikan Khas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                item.addEventListener('click', function () {
                    this.classList.toggle('active');
                });
            });
        });
    </script>
@endpush
