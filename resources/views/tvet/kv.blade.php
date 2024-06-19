@extends('layouts.app')

@section('content')
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-3">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">TVET</h5>
                        <h1 class="display-6 mb-0">{{__('messages.Kolej Vokasional')}}</h1>
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
                                    {{__('messages.Program Kolej Vokasional Ambilan 2021 Bintulu')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-1" class="accordion-collapse collapse" aria-labelledby="objektif-heading-1" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <p><strong>{{__('messages.Kolej Vokasional Bintulu')}}</strong></p>
                                    <ul>
                                        <li>Kosmetologi</li>
                                        <li>Seni Kulinari</li>
                                        <li>Seni Reka Fesyen.</li>
                                        <li>Teknologi Automotif</li>
                                        <li>Teknologi Elektrik</li>
                                        <li>Teknologi Elektronik</li>
                                        <li>Teknologi Kimpalan</li>
                                        <li>Teknologi Pembinaan</li>
                                        <li>Teknologi Pemesinan Industri</li>
                                        <li>Kimpalan Arka (Projek Link)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 2-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-2" aria-expanded="false" aria-controls="objektif-collapse-2">
                                    {{__('messages.Info Program')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-2" class="accordion-collapse collapse" aria-labelledby="objektif-heading-2" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>{{__('messages.Kosmetologi')}}</td>
                                                <td>{{__('messages.Program ini mendedahkan murid kepada penjagaan dan rawatan wajah dan anggota badan, penggayaan rambut, seni make-up, refleksologi serta amalan kesihatan dan kebersihan, pengurusan dan pengoperasian salon.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Seni Kulinari')}}</td>
                                                <td>{{__('messages.Program ini mendedahkan murid kepada operasi dan penyelenggaraan dapur, penyediaan makanan dan restoran, penyediaan pencuci mulut, masakan Timur dan Barat, kuih tempatan, roti, pasteri dan manisan, seni makanan, penyediaan makanan halal dan pengurusan makanan.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Seni Reka Fesyen')}}</td>
                                                <td>{{__('messages.Program ini menyediakan murid tentang jenis, klasifikasi dan alatan jahitan serta fabrik dan tekstil, memberi pendedahan tentang aliran bagi pakaian yang berkualiti serta bersesuaian dengan tema dan kegunaan pasaran tempatan dan antarabangsa mengikut fesyen terkini.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Teknologi Automotif')}}</td>
                                                <td>{{__('messages.Program ini memberi pendedahan asas enjin kenderaan bagi menimbulkan minat murid supaya bersedia dan berusaha untuk melanjutkan pembelajaran ke peringkat tertinggi dalam bidang automotif, menjadi modal insan yang berkemahiran dan dapat menyumbang ke arah pembangunan negara.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Teknologi Elektrik')}}</td>
                                                <td>{{__('messages.Program ini menyediakan murid kepada sistem kuasa, arus (DC & AC), penyelenggaraan, pemasangan dan menguji elektrik domestik dan industri, kawalan motor, sengaraan kejuruteraan, melukis dan mentafsir litar serta memahami akta elektrikal dan peraturan pemasangan yang ditetapkan.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Teknologi Elektronik')}}</td>
                                                <td>{{__('messages.Program ini memberi penekanan kepada mentafsir dan mengenalpasti simbol, komponen dan lukisan skematik, memahami, menguji dan mengira litar, prinsip kejuruteraan elektronik, pemasangan dan penyelenggaraan sistem audio dan video, digital, elektronik kuasa, sistem kawalan, sistem komunikasi dan industri robotik.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Teknologi Kimpalan')}}</td>
                                                <td>{{__('messages.Program ini menyediakan murid kepada kimpalan mengikut aras bs/aws, proses dan teknik, pengkelasan bahan logam, teknik. Tata cara serta teknik pemotongan mekanikal dan haba, lukisan kejuruteraan, fabrikasi, pemasangan kimpal paku dan kimpal arka logam berperisai. Di samping itu, murid juga didedahkan dengan automasi komputer.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Teknologi Pembinaan')}}</td>
                                                <td>{{__('messages.Program ini memperkenalkan murid kepada asas pembinaan sesuatu struktur. Murid akan didedahkan dengan bahan-bahan binaan, caracara asas pembinaan, asas lukisan pelan, keselamatan industri, asas kejuruteraan elektrik dan elektronik, pengurusan industri')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('messages.Teknologi Pemesinan Industri')}}</td>
                                                <td>{{__('messages.Program ini menawarkan pendedahan kepada amalan bengkel pemesinan industri, lukisan teknikal dan geometri, rekabentuk pembuatan terbantu komputer, mengenalpasti jenis, senarai alatan dan pengoperasian mesin industri.')}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 3-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-3" aria-expanded="false" aria-controls="objektif-collapse-3">
                                    {{__('messages.Penerangan Bidang')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-3" class="accordion-collapse collapse" aria-labelledby="objektif-heading-3" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <p>{{__('messages.Bidang vokasional memberikan peluang kepada pelajar yang berpencapaian baik atau sederhana dalam akademik dan berminat kepada pembelajaran bercorak vokasional (berkaitan pekerjaan).  Isi kandungan bidang vokasional mempunyai komponen teori dan praktikal yang seimbang. Objektif aliran ini adalah untuk membantu melahirkan separa profesional (juruteknik/pembantu teknik) dalam bidang kejuruteraan dan bukan kejuruteraan. Setelah tamat pengajian, murid berpeluang ke IPTA, IPTS, dan institut latihan kemahiran awam dan swasta, atau terus ke alam pekerjaan.')}}</p>
                                    <ul>
                                        <li>{{__('messages.Program ini merangkumi dua (2) tahun pengajian di peringkat Sijil dan dua (2) tahun 6  (6) bulan di peringkat Diploma (termasuk lima (5) bulan On The Job Training)')}}</li>
                                        <li>{{__('messages.Murid yang berjaya di peringkat Sijil akan dianugerahkan Sijil Vokasional Malaysia (SVM)')}}</li>
                                        <li>{{__('messages.Murid yang dianugerahkan SVM dan melepasi syarat kemasukan layak menyambung pengajian di peringkat Diploma di Kolej Vokasional yang sama')}}</li>
                                        <li>{{__('messages.Murid yang tidak melepasi syarat kemasukan ke peringkat Diploma akan menyambung pengajian di Kolej Vokasional yang sama dalam bidang kemahiran dan dianugerahkan Sijil Kemahiran Malaysia (SKM) berdasarkan tahap kompetensi yang dicapai')}}</li>
                                        <li>{{__('messages.Murid yang lulus pengajian di peringkat Diploma akan dianugerahkan Diploma oleh Senat Kolej Vokasional, Kementerian Pendidikan Malaysia')}}</li>
                                        <li>{{__('messages.Matlamat Program Kolej Vokasional untuk melahirkan tenaga kerja yang mahir dan kompeten bagi memenuhi keperluan industri dan entrepreneur')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('tvet') }}" class="btn btn-primary">{{__('messages.Kembali ke TVET')}}</a>
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
