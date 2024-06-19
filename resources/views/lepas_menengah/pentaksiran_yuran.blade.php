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
    <!-- Pentaksiran & Yuran Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Lepas Menengah')}}</h5>
                        <h3 class="display-5 mb-0">{{__('messages.Pentaksiran & Yuran')}}</h3>
                    </div>

                    <div class="obj-frame">
                        <h4>{{__('messages.Pentaksiran')}}</h4>
                        <p>{{__('messages.Pentaksiran dilaksanakan melalui peperiksaan akhir berpusat (wajaran 60% - 80%) dan kerja kursus (wajaran 20% - 40%). Peratusan wajaran adalah berbeza mengikut mata pelajaran. Murid mesti menduduki peperiksaan akhir berpusat S1, S2 dan S3. Murid juga mesti melaksanakan Kerja Kursus.')}}</p>
                        <p>{{__('messages.Murid akan menerima keputusan peperiksaan setiap Semester. Mereka boleh memperbaiki keputusan peperiksaan S1 dan S2 dengan menduduki peperiksaan U1 dan/atau U2. Pentaksiran pencapaian murid dan keputusan peperiksaan adalah berdasarkan ketiga-tiga Semester. Keputusan keseluruhan peperiksaan STPM adalah kumulatif keputusan terbaik bagi ketiga-tiga Semester seperti yang berikut:')}}</p>
                        <p>{{__('messages.Terbaik [(S1 atau U1) + (S2 atau U2) + S3 +  Kerja Kursus]')}}</p>

                        <h4 class="mt-4">{{__('messages.Yuran')}}</h4>
                        <p>{{__('messages.Yuran peperiksaan bagi empat atau / dan lima mata pelajaran adalah percuma bagi calon Sekolah Kerajaan dan Sekolah Bantuan Kerajaan, kecuali calon sekolah swasta dan persendirian individu.')}}</p>
                    
                        <h4>{{__('messages.Jurnal Pendidikan Tingkatan Enam')}}</h4>
                        <p>{{__('messages.Muat Turun')}}</p>
                        <ul>
                            <li><a href="{{ asset('Jurnal Pendidikan Tingkatan Enam 2017.pdf') }}" target="_blank">{{__('messages.Jurnal Pendidikan Tingkatan 6 2017')}}</a></li>
                            <li><a href="{{ asset('Jurnal Pendidikan Tingkatan Enam 2018 Jilid 2.pdf') }}" target="_blank">{{__('messages.Jurnal Pendidikan Tingkatan 6 2018 Jilid 2')}}</a></li>
                            <li><a href="{{ asset('Jurnal Pendidikan Tingkatan Enam 2019 - Jilid 3.pdf') }}" target="_blank">{{__('messages.Jurnal Pendidikan Tingkatan 6 2019 Jilid 3')}}</a></li>
                            <li><a href="{{ asset('Jurnal Pendidikan Tingkatan Enam 2020 - Jilid 4.pdf') }}" target="_blank">{{__('messages.Jurnal Pendidikan Tingkatan 6 2020 Jilid 4')}}</a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('lepas_menengah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Lepas Menengah')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
