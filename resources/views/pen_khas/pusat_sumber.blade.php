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
    <!-- Pusat Sumber Bahagian Pendidikan Khas -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Khas')}}</h5>
                        <h4 class="display-5 mb-0">{{__('messages.Pusat Sumber Bahagian Pendikan Khas')}}</h4>
                    </div>

                    <div class="obj-frame">
                        <b><p><strong>{{__('messages.Pangkalan Data Komersil')}}</strong></p></b>

                        <p>{{__('messages.Pangkalan Data komersial boleh diakses secara dalam talian dengan PERCUMA. Pengguna boleh mengakses pangkalan data ini di dalam dan luar premis Bahagian Pendidikan Khas. Perkhidmatan Rujukan Pangkalan Data yang diberikan boleh diakses menggunakan Portal Sumber Elektronik PNM (PNM Digital) melalui alamat URL : http://www.pnmdigital.gov.my Pangkalan data yang disediakan adalah seperti berikut :')}}</p>
                        <ol>
                            <li>Lawnet (E-Rujukan)</li>
                            <li>Emerald (E-Jurnal)</li>
                            <li>Bernama Library and Infolink Services (E-Surat Khabar)</li>
                            <li>Overdrive (E-Buku)</li>
                            <li>Zinio (E-Malaysia)</li>
                            <li>World eBook Library (E-Buku)</li>
                            <li>Score A Programme (E-Pembelajaran)</li>
                            <li>Business Monitor Online (E-Rujukan)</li>
                            <li>Encyclopedia Britannica Online (E-Rujukan)</li>
                            <li>PNM e-Lib (E-Buku)</li>
                            <li>World Almanac Online (E-Rujukan)</li>
                            <li>World Almanac Kids (E-Rujukan)</li>
                            <li>Library Press Display (E-Surat Khabar)</li>
                            <li>Ebrary (E-Buku)</li>
                            <li>NSTP E-Media (E-Berita)</li>
                            <li>Ebschost (E-Jurnal & E-Buku)</li>
                            <li>Travel 42: The Professional Tourism Guides (E-Rujukan)</li>
                            <li>Islamic Finance News (E-Rujukan)</li>
                            <li>National Geographic Virtual Library (E-Majalah)</li>
                            <li>Rosen Digital (E-Rujukan)</li>
                            <li>Alaxander Street Press (E-Surat Khabar)</li>
                            <li>E-Law (E-Rujukan)</li>
                            <li>IG Library (E-Buku)</li>
                        </ol>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('pen_khas') }}" class="btn btn-primary">Kembali ke Pendidikan Prasekolah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- Maklumat Prasekolah End -->
