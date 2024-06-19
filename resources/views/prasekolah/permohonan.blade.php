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
    <!-- About Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Prasekolah')}}</h5>
                        <h3 class="display-5 mb-0">{{__('messages.Permohonan Kemasukan Ke Kelas Prasekolah KPM')}}</h3>
                    </div>

                    <div class="obj-frame">
                        <h5>{{__('messages.Kaedah Permohonan Kemasukan Ke Kelas Prasekolah KPM Melalui Dua Cara:')}}</h5>
                        <ol>
                            <li><strong>{{__('messages.Secara dalam talian (online)')}}</strong></li>
                            <ul>
                                <li>{{__('messages.Tempoh permohonan secara dalam talian bermula 1 Mac hingga 30 April tahun sebelumnya.')}}</li>
                                <li>{{__('messages.Permohonan ini boleh dibuat melalui laman sesawang ')}}<a href="https://eprasekolah.moe.gov.my/"> eprasekolah.moe.gov.my</a>.</li>
                                <li>{{__('messages.Ibu bapa/penjaga yang telah mengemukakan permohonan secara dalam talian hendaklah mencetak borang permohonan tersebut.')}}</li>
                                <li>{{__('messages.Borang ini perlu dihantar ke sekolah yang dimohon berserta dokumen-dokumen berkaitan. Borang dan dokumen tersebut perlu dikemukakan kepada pihak sekolah/institusi selewat-lewatnya pada 31 Mei.')}}</li>
                                <li>{{__('messages.Manual pengguna boleh dimuat turun daripada laman sesawang eprasekolah sebagai panduan.')}}</li>
                            </ul>
                            <li><strong>{{('Manual')}}</strong></li>
                            <ul>
                                <li>{{__('messages.Tempoh permohonan secara manual bermula 1 Mac hingga 31 Mei tahun sebelumnya.')}}</li>
                                <li>{{__('messages.Ibu bapa/penjaga boleh mengambil borang permohonan di sekolah yang ingin dimohon.')}}</li>
                                <li>{{__('messages.Pihak sekolah/institusi mesti mencetak borang permohonan kemasukan dari laman sesawang Sistem Maklumat Prasekolah Kebangsaan (SMPK).')}}</li>
                                <li>{{__('messages.Borang permohonan yang lengkap diisi berserta dokumen-dokumen berkaitan hendaklah dihantar ke sekolah yang dimohon.')}}</li>
                            </ul>
                        </ol>
                    </div> <!-- Closing .obj-frame -->
                </div>
                <div class="mt-4">
                    <a href="{{ route('pra_sekolah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Pra Sekolah')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>
@endsection
