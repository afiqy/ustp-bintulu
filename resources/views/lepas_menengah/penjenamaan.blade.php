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
    <!-- Penjenamaan Semula Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Lepas Menengah')}}</h5>
                        <h3 class="display-5 mb-0">{{__('messages.Penjenamaan Semula')}}</h3>
                    </div>

                    <div class="obj-frame">
                        <p>{{__('messages.Penjenamaan Semula Tingkatan 6 menjadi salah satu inisiatif Kementerian Pendidikan Malaysia (KPM) dalam Pelan Pembangunan Pendidikan Malaysia (PPPM) 2013 - 2025 dengan hasrat untuk:')}}</p>
                        <ul>
                            <li>{{__('messages.Memperkasa pendidikan Tingkatan 6 melalui peningkatan imej, sistem, dan kualiti pendidikan setaraf dengan pendidikan lepasan menengah yang lain selepas SPM seperti Matrikulasi atau pusat asasi sains, kerana ianya dilihat sebagai salah satu laluan utama murid-murid untuk melanjutkan pelajaran ke universiti.')}}</li>
                            <li>{{__('messages.Mengubah persepsi masyarakat terhadap pendidikan Tingkatan 6.')}}</li>
                            <li>{{__('messages.Membangun dan memupuk nilai kepimpinan yang tinggi dalam kalangan murid Tingkatan 6.')}}</li>
                        </ul>
                        <p>{{__("messages.Lima fokus utama Penjenamaan Semula Tingkatan 6 adalah seperti yang berikut:")}}</p>
                        <ol>
                            <li>{{__('messages.Imej dan Anjakan Minda')}}</li>
                            <li>{{__('messages.Info dan Infrastruktur')}}</li>
                            <li>{{__('messages.Pengurusan dan Pentadbiran')}}</li>
                            <li>{{__('messages.Mod Pengajaran dan Pembelajaran (PdP)')}}</li>
                            <li>{{__('messages.Kurikulum')}}</li>
                        </ol>
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
