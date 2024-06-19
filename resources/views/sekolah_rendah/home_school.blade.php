@extends('layouts.app')
@section('content')
<style>
.obj-frame {
    background-color: #f0f0f0; 
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Add margin bottom to prevent overlap with footer */
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
                        <h4 class="display-5 mb-0">{{__('messages.Permohonan Pengecualian Daripada Mengikuti Pendidikan Wajib di Peringkat Rendah dan Menjalankan Persekolahan di Rumah (Home Schooling)')}}</h4>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>{{__('messages.Penyataan Dasar')}}</strong></h5>
                        <p>{{__('messages.Home Schooling adalah merupakan satu kaedah persekolahan di rumah yang diberikan kepada kanak-kanak yang memerlukannya seperti mempunyai masalah kesihatan kronik dan memerlukan jagaan rapi oleh ibu bapa/ pihak penjaga. Namun demikian, ia hanyalah satu keistimewaan dan bukannya hak. Kanak-kanak diutamakan mengikuti sesi persekolahan seperti biasa kerana proses pengajaran dan pembelajaran yang dilaksanakan di sekolah membolehkan mereka berinteraksi di antara satu sama lain.')}}</p>
                        <h5><strong>{{__('messages.Tujuan')}}</strong></h5>
                        <ol>
                            <li>{{__('messages.Memberi peluang kepada kanak-kanak yang mengalami masalah kesihatan yang kronik dan memerlukan penjagaan yang rapi oleh ibu bapa/ penjaga untuk mendapat pendidikan formal di rumah.')}}</li>
                            <li>Memastikan tidak berlaku keciciran kepada kanak-kanak untuk memperolehi pendidikan wajib seperti termaktub dalam Akta Pendidikan 1996.</li>
                            <li>Mendidik ibu bapa supaya menjalankan tanggungjawab mereka untuk menyekolahkan anak sepanjang tempoh pendidikan wajib.</li>
                        </ol>
                        <h5><strong>{{__('messages.Pelaksanaan Dasar')}}</strong></h5>
                        <ol>
                            <li><strong>{{__('messages.Akta Pendidikan 1996 (Akta 550)')}}</strong><br>{{__('messages.Subseksyen 29A (2), Akta Pendidikan 1996 (Akta 550) memperuntukkan “Menteri boleh, jika difikirkan wajar dan demi kepentingan murid atau awam untuk berbuat demikian, melalui perintah yang disiarkan dalam Warta, mengecualikan mana-mana murid atau mana-mana golongan murid daripada kehendak supaya mengikuti pendidikan wajib, sama ada secara mutlak atau tertakluk kepada apa-apa syarat yang difikirkannya patut dikenakan, dan boleh pada bila-bila masa menurut budi bicaranya membatalkan pengecualian itu atau membatalkan atau mengubah atau menambah syarat-syarat itu”.')}}</li>
                            <li><strong>{{__('messages.Surat Pekeliling Ikhtisas Bil. 14/2002: Pelaksanaan Pendidikan Wajib di Peringkat Rendah 2003 bertarikh 27 November 2002.')}}</strong><br>{{__('messages.Garis Panduan Pelaksanaan Pendidikan Wajib di Peringkat Rendah Tahun 2003.')}}</li>
                            <li><strong>{{__('messages.Surat Pekeliling Ikhtisas Bil. 2/2005: Garis Panduan Memproses Permohonan Pengecualian Daripada Mengikuti Pendidikan Wajib Di Peringkat Rendah bertarikh 31 Mei 2005.')}}</strong></li>
                        </ol>
                        <h5><strong>{{__('messages.Kaedah Pelaksanaan')}}</strong></h5>
                        <ol>
                            <li>{{__('messages.Permohonan Home Schooling boleh dibuat melalui Jabatan Pendidikan Negeri di seluruh negara menggunakan borang yang telah disediakan.')}}</li>
                            <li>{{__('messages.Kes permohonan pengecualian daripada mengikuti pendidikan wajib dan menjalankan persekolahan di rumah (Home Schooling) dirujuk kepada Ketua Pengarah Pelajaran Malaysia (KPPM) untuk mendapat ulasan dan kemudiannya diangkat kepada Menteri Pendidikan untuk keputusan.')}}</li>
                            <li>{{__('messages.Secara amnya, syarat tersebut adalah seperti berikut:')}}
                                <ol type="a">
                                    <li>{{__('messages.pemohon hendaklah terdiri daripada warganegara Malaysia;')}}</li>
                                    <li>{{__('messages.pemohon mestilah memiliki kelulusan ikhtisas perguruan;')}}</li>
                                    <li>{{__('messages.salah seorang ibu bapa mestilah berkesanggupan untuk menjadi pengajar kepada kanak-kanak tersebut secara sepenuh masa di rumah;')}}</li>
                                    <li>{{__('messages.kurikulum kebangsaan wajib digunakan;')}}</li>
                                    <li>{{__('messages.berkemampuan untuk menyediakan prasrana pendidikan yang kondusif dan sempurna untuk tujuan pengajaran dan pembelajaran;')}}</li>
                                    <li>{{__('messages.lawatan ke rumah pemohon akan dilakukan oleh pegawai Kementerian Pendidikan Malaysia, Jabatan Pendidikan Negeri dan Pejabat Pendidikan Daerah untuk tujuan memastikan kesesuaian prasarana Home Schooling;')}}</li>
                                    <li>{{__('messages.pemohon hendaklah membenarkan Pegawai daripada Kementerian Pendidikan Malaysia, Jabatan Pendidikan Negeri atau Pejabat Pendidikan Daerah untuk melawat rumah pada bila-bila masa hari persekolahan bagi tujuan pemantauan proses pengajaran & pembelajaran;.')}}</li>
                                    <li>{{__('messages.kanak-kanak yang diberi kelulusan Home Schooling tidak dibenarkan sama sekali untuk menghadiri sama ada secara tuisyen harian swasta atau kerajaan; dan')}}</li>
                                    <li>{{__('messages.sekiranya didapati pemohon melanggar syarat-syarat yang terkandung dalam kelulusan yang diberikan oleh pihak Kementerian Pendidikan Malaysia, maka kelulusan tersebut adalah dibatalkan. Kanak-kanak tersebut hendaklah didaftarkan semula ke sekolah dengan segera.')}}</li>
                                </ol>
                            </li>
                        </ol>
                        <h5><strong>{{__('messages.Tarikh Kuatkuasa :')}}</strong></h5>
                        <p>{{__('messages.Tarikh kuat kuasa pelaksanaan Home Schooling pada 28 Jun 2003.')}}</p>
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
