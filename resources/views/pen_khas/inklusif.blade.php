@extends('layouts.app')
@section('content')
    <section>
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-3">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Khas')}}</h5>
                        <h1 class="display-6 mb-0">{{__('messages.Program Pendidikan Inklusif')}}</h1>
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
                                    {{__('messages.Konsep Program')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-1" class="accordion-collapse collapse" aria-labelledby="objektif-heading-1" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <p><strong>{{__('messages.Konsep Program Pendidikan Inklusif (PPI) adalah selaras dengan penyataan dalam Peraturan - peraturan Pendidikan (Pendidikan Khas) 2013 seperti di bawah : ')}}</strong></p>
                                    <ul>
                                        <li>{{__('messages."Program Pendidikan Inklusif" ertinya suatu program pendidikan bagi murid berkeperluan pendidikan khas yang dihadiri oleh murid berkeperluan khas bersama-sama dengan murid lain dalam kelas yang sama di sekolah kerajaan atau sekolah bantuan kerajaan.')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 2-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-2" aria-expanded="false" aria-controls="objektif-collapse-2">
                                    {{__('messages.Matlamat')}} 
                                </button>
                            </h2>
                            <div id="objektif-collapse-2" class="accordion-collapse collapse" aria-labelledby="objektif-heading-2" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <ul>
                                        <li>{{__('messages.Meningkatkan penyertaan dan memberi peluang kepada MBK mengikuti program akademik dan bukan akademik bersama-sama murid di arus perdana. PPI juga memberi kesedaran kepada masyarakat supaya tidak menafikan potensi MBK dan percaya bahawa ketidakupayaan mereka boleh diminimakan jika diberi peluang yang sama.')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat 3-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="objektif-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objektif-collapse-3" aria-expanded="false" aria-controls="objektif-collapse-3">
                                    {{__('messages.Pendekatan Program')}}
                                </button>
                            </h2>
                            <div id="objektif-collapse-3" class="accordion-collapse collapse" aria-labelledby="objektif-heading-3" data-bs-parent="#pra-sekolah-accordion">
                                <div class="accordion-body">
                                    <i><b><p style="font-size: 18px;"></p></b></i>
                                    <p><strong>{{__('messages.Inklusif Penuh')}}</strong></p>
                                    <ul>
                                        <li>{{__('messages.MBK belajar secara sepenuh masa bersama-sama murid arus perdana. MBK mengikuti pembelajaran bagi semua mata pelajaran akademik berasaskan kurikulum kebangsaan atau kurikulum kebangsaan yang diubahsuai dengan bantuan atau tanpa bantuan perkhidmatan sokongan.')}}</li>
                                    </ul>
                                    <p><strong>{{__('messages.Inklusif Separa')}}</strong></p>
                                    <ul>
                                        <li>{{__("messages.MBK belajar bersama-sama murid arus perdana bagi mata pelajaran akademik atau aktiviti koakademik atau aktiviti kokurikulum tertentu sahaja mengikut keupayaan mereka. MBK yang mengikuti inklusif separa bagi mata pelajaran akademik berasaskan kurikulum kebangsaan atau kurikulum kebangsaan yang diubahsuai dengan sedikit atau tanpa bantuan perkhidmatan sokongan. Inklusif separa bagi aktiviti koakademik atau kokurikulum adalah berdasarkan potensi, bakat dan keupayaan mereka.")}}</li>
                                    </ul>
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
