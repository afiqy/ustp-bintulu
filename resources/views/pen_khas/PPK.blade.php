@extends('layouts.app')
@section('content')
    <section>
        <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title mb-3">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Khas')}}</h5>
                            <h1 class="display-6 mb-0">{{__('messages.Pusat Perkhidmatan Pendidikan Khas (3PK)')}}</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion" id="PPK-accordion">
                            <!-- Syarat 1-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-1" aria-expanded="false" aria-controls="objektif-collapse-1">
                                    {{__('messages.Pengenalan')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-1" class="accordion-collapse collapse" aria-labelledby="objektif-heading-1" data-bs-parent="#PPK-accordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>{{__('messages.Pusat Perkhidmatan Pendidikan Khas (3PK) merupakan pusat khidmat setempat yang menyediakan perkhidmatan sokongan berbentuk intervensi, rehabilitasi, dan konsultasi dalam bidang khusus iaitu Audiologi, Psikologi, Patologi Pertuturan Bahasa, Terapi Carakerja, dan Peripatetik.')}}</li>
                                        <li>{{__('messages.Sokongan 3PK bertujuan meminimakan impak ketidakupayaan Murid Berkeperluan Khas (MBK) bagi membolehkan MBK menjalani proses pembelajaran dengan lebih baik selain membimbing MBK ke arah hidup berdikari serta bermakna.')}}</li>
                                        <li>{{__('messages.Pengurusan 3PK negeri berada di bawah seliaan Cawangan Latihan dan Khidmat Bantu (CLKB), Bahagian Pendidikan Khas, Kementerian Pendidikan Malaysia. Terdapat 12 buah 3PK di seluruh Malaysia yang beroperasi di Sekolah Pendidikan Khas dan satu (1) beroperasi di Bahagian Pendidikan Khas.')}}</li>
                                    </ul>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Sarawak</td>
                                                <td>{{__('messages.Terapi Carakerja JOCV')}}</td>
                                                <td>d/a SKPK Samarahan, Jalan Dato Mohd Musa <br>
                                                    94300 Samarahan, Sarawak. <br>
                                                    Tel : 082-673672 <br>
                                                    Faks : 082-672016
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>          
                                </div>
                            </div>
                        </div>

                        

                            <!-- Syarat 2-->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="objektif-heading-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-2" aria-expanded="false" aria-controls="objektif-collapse-2">
                                        {{__('messages.Peranan Dan Fungsi Pusat Perkhidmatan Pendidikan Khas (3PK)')}}
                                    </button>
                                </h2>
                                <div id="objektif-collapse-2" class="accordion-collapse collapse" aria-labelledby="objektif-heading-2" data-bs-parent="#PPK-accordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <ol>
                                                <li>{{__('messages.Melaksanakan program saringan kepada murid yang mempunyai ciri-ciri berkeperluan khas.')}}</li>
                                                <li>{{__('messages.Melaksanakan ujian/penilaian dengan menggunakan peralatan khas/instrumen standard bagi mengenal pasti masalah-masalah spesifik yang dihadapi oleh kanak-kanak dan MBK.')}}</li>
                                                <li>{{__("messages.Melaksanakan program intervensi/rehabilitasi bagi meminimakan impak ketidakupayaan kanak-kanak dan MBK.")}}</li>
                                                <li>{{__('messages.Melaksanakan program intervensi awal dari aspek domain-domain perkembangan bagi kesediaan kanak-kanak ke alam persekolahan.')}}</li>
                                                <li>{{__('messages.Menyediakan perkhidmatan konsultasi mengikut bidang khusus iaitu Peripatetik, Audiologi, Patalogi Pertuturan Bahasa, Terapi Carakerja, dan Psikologi bagi menyokong pendidikan MBK secara menyeluruh.')}}</li>
                                            </ol>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Syarat 3-->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="objektif-heading-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-3" aria-expanded="false" aria-controls="objektif-collapse-3">
                                        {{__('messages.Perkhidmatan Sokongan Yang Disediakan')}}
                                    </button>
                                </h2>
                                <div id="objektif-collapse-3" class="accordion-collapse collapse" aria-labelledby="objektif-heading-3" data-bs-parent="#PPK-accordion">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>{{__('messages.Audiologi')}}</li>
                                            <ol style="list-style-type: upper-roman">
                                                <li>{{__('messages.Ujian audiologikal')}}</li>
                                                <li>{{__('messages.Penilaian diagnostik pendengaran')}}</li>
                                                <li>{{__('messages.Program rehabilitasi pendengaran')}}</li>
                                                <li>{{__('messages.Pemeriksaan dan penilaian alat bantu pendengaran dan assistive listening devices')}}</li>
                                                <li>{{__('messages.Memberi konsultasi kepada ibu bapa/penjaga dan guru')}}</li>
                                            </ol>
                                            <br>
                                            <li>{{__("messages.Patologi Pertuturan Bahasa")}}</li>
                                            <ol style="list-style-type: upper-roman">
                                                <li>{{__('messages.Ujian saringan')}}</li>
                                                <li>{{__('messages.Penilaian diagnostik pertuturan bahasa')}}</li>
                                                <li>{{__('messages.Program rehabilitasi pertuturan bahasa')}}</li>
                                                <li>{{__('messages.Konsultasi berkaitan komunikasi dan pertuturan bahasa kepada ibu bapa/penjaga dan guru')}}</li>
                                            </ol>
                                            <br>
                                            <li>{{__('messages.Peripatetik')}}</li>
                                            <ol style="list-style-type: upper-roman">
                                                <li>{{__('messages.Ujian saringan dengan menggunakan instrumen standard')}}</li>
                                                <li>{{__('messages.Program Intervensi masalah pembelajaran')}}</li>
                                                <li>{{__('messages.Pengurusan klien dengan profesional atau agensi yang berkaitan')}}</li>
                                                <li>{{__('messages.Konsultasi berkaitan dengan keperluan pembelajaran/pendidikan MBK')}}</li>
                                            </ol>
                                            <br>
                                            <li>{{__('messages.Terapi Carakerja')}}</li>
                                            <ol style="list-style-type: upper-roman">
                                                <li>{{__('messages.Ujian saringan')}}</li>
                                                <li>{{__('messages.Penilaian terapi carakerja')}}</li>
                                                <li>{{__('messages.Program intervensi terapi carakerja')}}</li>
                                                <li>{{__('messages.Konsultasi kepada ibu bapa/penjaga dan guru')}}</li>
                                            </ol>
                                            <br>
                                            <li>{{__('messages.Psikologi')}}</li>
                                            <ol style="list-style-type: upper-roman">
                                                <li>{{__('messages.Ujian saringan')}}</li>
                                                <li>{{__('messages.Penilaian diagnostik bagi mengesan masalah spesifik MBK')}}</li>
                                                <li>{{__('messages.Program Intervensi')}}</li>
                                                <li>{{__('messages.Konsultasi kepada ibu bapa/penjaga dan guru')}}</li>
                                            </ol>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('pen_khas') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Khas')}}</a>
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
