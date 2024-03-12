@extends('layouts.app')
@section('content')
    <section>
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-3">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Khas</h5>
                        <h1 class="display-6 mb-0">Rancangan Pendidikan Individu</h1>
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
                                    Pengenalan
                                </button>
                            </h2>
                            <div id="objektif-collapse-1" class="accordion-collapse collapse" aria-labelledby="objektif-heading-1" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <p>Akta Pendidikan bagi Individu Kurang Upaya atau IDEA (Individuals With Disabilities Education Act) merupakan peraturan persekutuan, yang turut merangkumi penyediaan proses formal bagi menjalankan penialaian terhadap murid kurang upaya serta menyediakan program dan perkhidmatan khusus untuk membantu mereka berjaya dalam pendidikan di sekolah (Siegel 2009).</p>
                                    <p>Di bawah IDEA, program dan perkhidmatan yang diperlukan oleh kanak-kanak kurang upaya akan ditentukan menerusi Rancangan Pengajaran Individu (RPI). RPI merupakan dokumen bertulis yang menjelaskan tentang perkhidmatan yang akan disediakan untuk kanak-kanak, dan ini merupakan bahagian yang sangat penting dalam pendidikan bagi kanak-kanak kurang upaya (Siegel 2009).</p>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 2-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-2" aria-expanded="false" aria-controls="objektif-collapse-2">
                                    Definasi Dan Konsep 
                                </button>
                            </h2>
                            <div id="objektif-collapse-2" class="accordion-collapse collapse" aria-labelledby="objektif-heading-2" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>Rancangan Pendidikan Individu (RPI) adalah satu dokumen bertulis. Ia dirancang khusus untuk seseorang murid. Ia juga dibentuk bertujuan mendokumentasikan segala pengubahsuaian dan penerapan ke atas program pembelajaran serta perkhidmatan yang disediakan.</li>
                                        <li>RPI berfungsi sebagai satu alat atau instrument untuk menentukan kerjasama dan kolaborasi antara sekolah, ibu bapa, murid itu sendiri dan jika perlu, dengan pegawai pendidikan daerah, dan individu dari agensi atau khidmat sokongan lain.</li>
                                        <li>RPI pada dasarnya adalah satu pernyataan ringkas tentang :</li>
                                        <ol><br>
                                            <li>Tahap prestasi seseorang murid</li>
                                            <li>Perancangan yang merangkumi aspek akademik dan bukan akademik</li>
                                            <li>Matlamat tahunan yang boleh dicapai oleh murid</li>
                                            <li>Maklumat yang mengandungi satu siri objektif yang boleh diukur bagi setiap matlamat yang dikenal pasti</li>
                                            <li>Objektif, prosedur dan urutan penilaian bagi menentukan pencapaian satu huraian berhubung dengan perkhidmatan yang diperlukan oleh murid</li>
                                            <li>Perancangan jangka masa dan tarikh perkhidmatan yang disediakan untuk murid</li>
                                            <li>Satu perancangan dan persediaan untuk membantu murid berkeperluan khas menghadapi alam sekitar</li>
                                        </ol><br>
                                        <li>Kesimpulannya RPI adalah rancangan program penilaian berterusan untuk seseorang murid, dan sebagai teras perancangan pendidikan dalam program pendidikan khas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 3-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-3" aria-expanded="false" aria-controls="objektif-collapse-3">
                                    Sistem Rancangan Pendidikan Individu (E-RPI)
                                </button>
                            </h2>
                            <div id="objektif-collapse-3" class="accordion-collapse collapse" aria-labelledby="objektif-heading-3" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>Sila klik <a href="https://ppirpi.moe.gov.my/" target="_blank">di sini</a> untuk ke Sistem Rancangan Pendidikan Individu (e-RPI)</li>
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
