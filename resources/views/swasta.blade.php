@extends('layouts.app')

@section('content')
    <section>
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{__('messages.swasta')}}</h1>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-3">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                        <h1 class="display-6 mb-0">{{__('messages.Institut Pendidikan Swasta')}}</h1>
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
                                    {{__('messages.Apakah syarat-syarat pemohonan penubuhan IPS?')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-1" class="accordion-collapse collapse" aria-labelledby="objektif-heading-1" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>{{__('messages.Borang permohonan penubuhan boleh didapati di JPN dan BPSwasta, KPM.')}}</li>
                                        <li>{{__('messages.Pemohon dimiliki oleh syarikat berdaftar di bawah Akta Syarikat 1965 atau Akta Perniagaan 1956 atau organisasi yang didaftarkan di bawah Akta Pertubuhan 1966.')}}</li>
                                        <li>{{__('messages.Syarikat/organisasi hendaklah membuktikan keupayaan kewangan.')}}</li>
                                        <li>{{__('messages.Syarat-syarat lain yang ditetapkan pada borang permohonan penubuhan (BPS01).')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 2-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-2" aria-expanded="false" aria-controls="objektif-collapse-2">
                                    {{__('messages.Apakah syarat-syarat pendaftaran IPS?')}} 
                                </button>
                            </h2>
                            <div id="objektif-collapse-2" class="accordion-collapse collapse" aria-labelledby="objektif-heading-2" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>{{__('messages.Mengemukakan borang permohonan pendaftaran yang boleh didapati dari JPN negeri masing-masing.')}}</li>
                                        <li>{{__('messages.Premis perlu mendapat kelulusan daripada Pihak Berkuasa Tempatan, Jabatan Bomba dan Penyelamat serta Pejabat Kesihatan.')}}</li>
                                        <li>{{__('messages.Mengemukakan nama pengelola, guru dan pekerja institusi pendidikan.')}}</li>
                                        <li>{{__('messages.Memenuhi kelulusan kursus/matapelajaran, bilik darjah, bilik khas dan makmal lain yang ditetapkan.')}}</li>
                                        <li>{{__('messages.Membayar yuran pendaftaran yang ditetapkan.')}}</li>
                                        <li>{{__('messages.Serta syarat lain pada borang permohonan pendaftaran.')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 3-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-3" aria-expanded="false" aria-controls="objektif-collapse-3">
                                    {{__('messages.Bagaimana hendak mengetahui sesebuah tadika berdaftar di sesebuah kawasan?')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-3" class="accordion-collapse collapse" aria-labelledby="objektif-heading-3" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>{{__('messages.Carian tadika melalui Sistem Maklumat Prasekolah Kebangsaan (SMPK) di laman ')}}<a href="https://smpk.moe.gov.my/">https://smpk.moe.gov.my/</a></li>
                                        <li>{{__('messages.Papan tanda di hadapan premis tadika berdaftar.')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 4-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-4" aria-expanded="false" aria-controls="objektif-collapse-4">
                                    {{__('messages.Bolehkah murid dari sekolah swasta/antarabangsa berpindah ke sekolah kerajaan?')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-4" class="accordion-collapse collapse" aria-labelledby="objektif-heading-4" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>{{__('messages.Ya, boleh. Boleh memohon berpindah ke sekolah kerajaan selepas mendapat kelulusan dari JPN negeri berkenaan. Namun syarat kohort umur kemasukan murid ke sekolah kerajaan adalah terpakai.')}}</li>
                                    </ul>
                                </div>
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
