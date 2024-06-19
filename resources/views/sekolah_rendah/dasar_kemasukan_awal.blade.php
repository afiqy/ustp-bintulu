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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Sekolah Rendah')}}</h5>
                        <h1 class="display-5 mb-0">{{__('messages.Dasar Pengoperasian Kemasukan Awal Kanak-Kanak Di Bawah Umur Ke Tahun 1')}}</h1>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>{{__('messages.Penyataan Dasar')}}</strong></h5>
                        <p>{{__('messages.Kemasukan awal kanak-kanak di bawah umur ke Tahun 1 pada setiap tahun persekolahan berdasarkan permohonan daripada ibubapa. Kementerian Pendidikan Malaysia (KPM) akan mempertimbangkan permohonan kemasukan awal bagi kanak-kanak bawah umur warganegara Malaysia yang lahir mulai 2 Januari hingga 15 Januari pada tahun persekolahan berkenaan.')}}</p>
                        <h5><strong>{{__('messages.Punca Kuasa')}}</strong></h5>
                        <ul>
                            <li>{{__('messages.Surat Pekeliling Ikhtisas Bil. 10/1998 - Kelonggaran Syarat Kemasukan Kanak-Kanak Di Bawah Umur Ke Tahun 1 bertarikh 7 Mei 1998.')}}</li>
                        </ul>
                        <h5><strong>{{__('messages.Kaedah Pelaksanaan')}}</strong></h5>
                        <ul>
                            <li>{{__('messages.Kanak-kanak telah mengikuti mengikuti pendidikan prasekolah / tadika.')}}</li>
                            <li>{{__('messages.Kanak-kanak mencapai tahap yang munasabah dari segi ‘mental and reading age’.')}}</li>
                            <li>{{__('messages.Kanak-kanak perlu menghadiri sesi modul saringan dan modul temu bual yang dikendalikan oleh pegawai di jabatan pendidikan negeri bagi memastikan kesahihan perkara 1 dan 2.')}}</li>
                            <li>{{__('messages.Pertimbangan permohonan adalah berdasarkan merit ’case by case’ tertakluk kepada kekosongan tempat di sekolah yang dimohon.')}}</li>
                            <li>{{__('messages.Permohonan hendaklah dikemukakan kepada jabatan pendidikan negeri berkenaan dengan menyertakan bersama-sama sijil lahir, surat pengesahan prasekolah / tadika dan laporan kemajuan murid yang telah disahkan.')}}</li>
                            <li>{{__('messages.Jabatan pendidikan negeri hendaklah memanjangkan semua permohonan dan dokumen sokongan kepada Pengarah Bahagian Pengurusan Sekolah Harian, KPM.')}}</li>
                            <li>{{__('messages.Semua permohonan kemasukan murid di bawah umur ke Tahun 1 hendaklah diproses oleh Jabatan Pendidikan Negeri terlebih dahulu sebelum dipanjangkan ke KPM untuk pertimbangan.')}}</li>
                            <li>{{__('messages.Keputusan Jawatankuasa Penilaian KPM adalah muktamad.')}}</li>
                        </ul>
                        <h5><strong>{{__('messages.Tarikh Kuatkuasa :')}}</strong>{{__('messages.7 Mei 1998')}}</h5>
                    </div>

                    <!-- Back to Pendidikan Sekolah Rendah button -->
                    <div class="mt-4">
                        <a href="{{ route('sek_rendah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Sekolah Rendah')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>
@endsection
