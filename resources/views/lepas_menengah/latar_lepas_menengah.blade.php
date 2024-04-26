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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Lepas Menengah</h5>
                        <h4 class="display-5 mb-0">Latar Belakang</h4>
                    </div>

                    <div class="obj-frame">
                        <p>Akta Pendidikan 1996 (Akta 550), menyatakan “pendidikan lepas menengah” ertinya Pendidikan yang disediakan untuk seseorang yang sudah tamat mengikut Pendidikan lepas menengah, tetapi tidak termasuk Pendidikan Tinggi.</p>
                        <p>Tingkatan 6 telah mula beroperasi di sekolah menengah kerajaan dan sekolah menengah bantuan kerajaan lebih daripada 50 tahun dahulu. Pada masa itu, bilangan kelas Tingkatan 6 yang di tawarkan ialah minimum 2 kelas dan maksimum 22 kelas. Terdapat 2 bidang yang ditawarkan iaitu bidang Sains Sosial (Kemanusiaan dan Agama) dan Bidang Sains.</p>
                        <p>Mulai tahun 2008, Langkah penambahbaikan dari segi pengurusan dan fungsi Tingkatan 6 serta kebajikan murid diberi tumpuan untuk mendaikan proses pengajaran dan pembelajaran Tingkatan 6 lebih menarik serta menyediakan suasana pembelajaran yang kondusif. Cadangan penambahbaikan yang disarankan oleh Kementerian Pendidikan Malaysia pada tahun 2008 merangkumi beberapa aspek seperti pengurusan dan pentadbiran, pelaksanaan pengajaran dan pembelajaran, penyelidikan an penulisan ilmiah, kemudahan fizikal, serta peranan Jabatan Pendidikan Negeri dan Pejabat Pendidikan Daerah.</p>
                        <p>Manakala pelaksanaan sistem pentaksiran baharu STPM telah dimulakan pada tahun 2012 setelah diluluskan oleh Mesyuarat Jemaah Menteri (MJM) pada 4 Januari 2012.</p>
                        <p>Tempoh pengajian di Tingkatan 6 adalah selama tiga semester. Murid yang telah menamatkan pengajian menengah atas dan telah menduduki peperiksaan Sijil Pelajaran Malaysia (SPM), layak untuk ditawarkan pengajian di Tingkatan 6 jika memenuhi syarat umum dan syarat khusus bagi bidang yang ditawarkan.</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('lepas_menengah') }}" class="btn btn-primary">Kembali ke Pendidikan Lepas Menengah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
