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
                        <h4 class="display-5 mb-0">Kerangka Konseptual</h4>
                    </div>

                    <div class="obj-frame">
                        <ul>
                            <li>Kerangka Konseptual Tingkatan 6 yang merangkumi dua komponen utama iaitu kurikulum dan kokurikulum.</li>
                            <li>Matlamat pendidikan Tingkatan 6 adalah bagi membentuk kepimpinan menuju ke arah Membina Negara Bangsa meliputi aspek perpaduan, patriotisme, jati diri bagi mendokong aspirasi nasional. Mendidik murid secara menyeluruh berdasarkan Falsafah Pendidikan Kebangsaan dan berupaya memikul tanggungjawab, prihatin, berinovatif, matang, berjiwa kendiri, berpandangan jauh, keteguhan jati diri dan berbudaya penyayang.</li>
                            <li>Tiga kemahiran utama yang diterapkan dalam pendidikan Tingkatan 6 ialah kemahiran kognitif, kemahiran manipulatif dan kemahiran insaniah (soft skills).</li>
                            <li>Tempoh pengajian di Tingkatan 6 adalah selama 1½ tahun yang merangkumi tiga penggal. Penggal 1 bermula dari bulan Mei hingga November, Penggal 2 bermula dari bulan Januari hingga Mei dan Penggal 3 bermula dari bulan Mei hingga November.</li>
                            <li>Sijil Tinggi Persekolahan Malaysia (STPM) mendapat pengiktirafan daripada Kerajaan Malaysia, Jabatan Perkhidmatan Awam (JPA), dan Cambridge Assessment, England. Sijil STPM turut diterima oleh JPA untuk menjawat perjawatan dalam perkhidmatan kerajaan. Murid yang memperoleh keputusan cemerlang dalam peperiksaan STPM dan kokurikulum layak memohon untuk melanjutkan pelajaran ke Institusi Pengajian Tinggi (IPT) dalam dan luar negara.</li>
                            <li>Kegiatan kokurikulum Tingkatan 6 mesti dinilai berdasarkan format atau kaedah yang tetap dan diiktiraf agar keesahan dan kebolehpercayaan hasil penilaian itu tidak dipertikaikan, lebih-lebih lagi apabila markah kokurikulum dijadikan sebahagian daripada markah penilaian kemasukan ke Institusi Pengajian Tinggi Awam (IPTA). Penstrukturan dan penjenamaan semula Tingkatan 6 turut melibatkan perubahan pengoperasian kokurikulum. Oleh itu, pengurusannya boleh diadakan secara berasingan daripada kegiatan kokurikulum arus perdana.</li>
                        </ul>
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
