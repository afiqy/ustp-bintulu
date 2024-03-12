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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Sekolah Rendah</h5>
                        <h4 class="display-5 mb-0">Dasar Pengoperasian Pengecualian Daripada Mengikuti Pendidikan Wajib (Penangguhan Ke Tahun 1)</h4>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>Penyataan Dasar</strong></h5>
                        <p>Penangguhan ke Tahun 1 adalah merupakan satu pengecualian daripada mengikuti pendidikan wajib berdasarkan kohort umur yang diberikan kepada kanak-kanak yang memerlukannya. Namun demikian, penangguhan ini hanyalah satu keistimewaan dan bukannya hak. Persekolahan biasa adalah diutamakan kepada kanak-kanak kerana ia merupakan satu cara untuk kanak-kanak berinteraksi di antara satu sama lain.</p>
                        <h5><strong>Punca Kuasa</strong></h5>
                        <ul>
                            <li>Akta Pendidikan 1996 (Akta 550)</li>
                            <li>Surat Pekeliling Ikhtisas Bil. 14/2002: Pelaksanaan Pendidikan Wajib di Peringkat Rendah 2003 bertarikh 27 November 2002.</li>
                            <li>Garis Panduan Pelaksanaan Pendidikan Wajib di Peringkat Rendah Tahun 2003.</li>
                        </ul>
                        <h5><strong>Kaedah Pelaksanaan</strong></h5>
                        <ul>
                            <li>Kes permohonan penangguhan kemasukan ke Tahun 1</li>
                            <li>Diputuskan oleh Ketua Pengarah Pelajaran Malaysia (KPPM) selaku Ketua Pendaftar Institusi Pendidikan dan Guru</li>
                            <li>Kategori permohonan pengecualian ialah:
                                <ul>
                                    <li>kes-kes yang tertakluk di bawah Seksyen 29A - merupakan permohonan ibu bapa kohort murid yang lahir pada atau selepas 2 Januari hingga 15 Januari tahun persekolahan semasa;</li>
                                    <li>kes-kes yang tidak tertakluk di bawah Seksyen 29A - merupakan permohonan ibu bapa murid yang lahir sebelum 2 Januari tahun persekolahan semasa.</li>
                                </ul>
                            </li>
                        </ul>
                        <h5><strong>Pelaksanaan Pengecualian Pendidikan Wajib</strong></h5>
                        <ul>
                            <li>Pemohon hendaklah mengemukakan alasan-alasan yang munasabah berdasarkan prinsip utama pengecualian kepada Kementerian Pendidikan Malaysia.</li>
                            <li>Golongan murid yang diberi pertimbangan khas untuk pengecualian ialah:
                                <ul>
                                    <li>Murid kaum Asli dan Bumiputera Sabah dan Sarawak yang tinggal jauh di pedalaman dan secara tradisinya masih mengamalkan hidup secara berpindah randah;</li>
                                    <li>Murid istimewa seperti yang ditetapkan, contohnya melalui Peraturan-Peraturan Pendidikan Khas di bawah Akta Pendidikan 1996 (Akta 550); dan</li>
                                    <li>Lain-lain golongan yang ditentukan oleh KPPM.</li>
                                </ul>
                            </li>
                            <li>Permohonan yang boleh dipertimbangkan untuk pengecualian daripada mengikuti pendidikan wajib di peringkat rendah adalah seperti berikut:
                                <ul>
                                    <li>Murid yang mencapai umur enam tahun pada 1 Januari tahun persekolahan semasa yang memohon untuk menangguhkan kemasukan ke Tahun 1 ke tahun berikutnya; dan</li>
                                    <li>Lain-lain permohonan.</li>
                                </ul>
                            </li>
                            <li>Permohonan dikemukakan oleh ibu bapa/penjaga kanak-kanak kepada Jabatan Pendidikan Negeri.</li>
                            <li>Murid mesti mengikuti pendidikan rendah di sekolah sehingga keputusan permohonan penangguhan diluluskan.</li>
                            <li>Permohonan menggunakan borang permohonan (Borang PPW 2) dan dokumen sokongan yang disahkan :
                                <ul>
                                    <li>Satu (1) salinan kad pengenalan bapa (depan dan belakang);</li>
                                    <li>Satu (1) salinan kad pengenalan ibu (depan dan belakang);</li>
                                    <li>Satu (1) salinan sijil lahir anak (depan dan belakang);</li>
                                    <li>Satu (1) salinan bukti pendaftaran kemasukan ke Tahun 1;</li>
                                    <li>Satu (1) salinan asal laporan doktor; dan</li>
                                    <li>Dokumen lain jika berkenaan.</li>
                                </ul>
                            </li>
                        </ul>
                        <h5><strong>Tarikh Kuatkuasa : </strong>28 Jun 2003</h5>
                    </div>
                        <!-- Back to Pendidikan Sekolah Rendah button -->
                        <div class="mt-4">
                            <a href="{{ route('sek_rendah') }}" class="btn btn-primary">Kembali ke Pendidikan Sekolah Rendah</a>
                        </div><!-- Closing .obj-frame -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>
@endsection
