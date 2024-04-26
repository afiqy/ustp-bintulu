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
    <!-- Maklumat Umum TVET Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">TVET</h5>
                        <h4 class="display-5 mb-0">Maklumat Umum TVET</h4>
                    </div>

                    <div class="obj-frame">
                        <p><strong>Apa itu TVET?</strong></p>
                        <p>TVET merupakan singkatan bagi Pendidikan dan Latihan Teknikal dan Vokasional. TVET adalah proses pendidikan dan latihan yang mempunyai hala tuju pekerjaan dengan penekanan utama terhadap amalan industri. Ia bertujuan untuk menghasilkan tenaga kerja yang kompeten dalam bidang-bidang yang tertentu. Skop TVET perlu berdasarkan standard pekerjaan yang diiktiraf, dengan penekanan kepada komponen praktikal, kemahiran psikomotor, dan pendedahan kepada latihan di industri.</p>

                        <p><strong>Tujuan TVET diperkenalkan?</strong></p>
                        <p>Tujuan TVET diperkenalkan adalah bagi memenuhi permintaan industri dan menyumbang kepada pertumbuhan ekonomi, selaras dengan globalisasi, ekonomi berasaskan pengetahuan, kemajuan teknologi, dan mobiliti tenaga kerja global. TVET dengan mengupayakan pendekatan yang diterajui industri adalah penting untuk menyediakan modal insan berkemahiran yang diperlukan industri, terutama untuk menyokong peralihan sektor ekonomi ke arah aktiviti berasaskan pengetahuan, selari dengan aspirasi menjadi negara maju pada tahun 2020.</p>

                        <p><strong>Agensi dan institusi yang terlibat dengan TVET?</strong></p>
                        <p>Dua institusi TVET awam telah ditubuhkan pada tahun 1964 untuk menyediakan latihan kemahiran kepada belia, iaitu Institut Kemahiran Belia dan Negara (IKBN) Dusun Tua dan Institut Latihan Perindustrian (ILP) Kuala Lumpur. Kini lebih daripada 500 institusi TVET awam yang menawarkan pelbagai program TVET bagi semua peringkat pendidikan.</p>

                        <p><strong>Kumpulan / Tumpuan sasaran TVET?</strong></p>
                        <p>Secara umumnya, terdapat dua laluan untuk memasuki bidang TVET iaitu menerusi Sijil Pelajaran Malaysia (SPM) atau Pentaksiran Tingkatan 3 (PT3). Lepasan SPM berpeluang untuk melanjutkan pelajaran sama ada dalam bidang Sijil ataupun Diploma dalam program TVET yang berkemahiran tinggi. Selain itu, bagi pelajar yang kurang kecenderungan dalam akademik dan remaja di luar sistem pendidikan terdapat juga program khas Sijil dan Sistem Latihan Dual Nasional (SLDN).</p>

                        <p><strong>Kelayakan minimum bagi memasuki institusi TVET?</strong></p>
                        <p>Kelayakan minimum bagi kemasukan ke institusi-institusi TVET adalah berdasarkan tawaran yang dikeluarkan kementerian/agensi yang melaksanakan program.</p>

                        <p><strong>Apakah keistimewaan yang diperolehi apabila menyambung pelajaran dalam bidang TVET?</strong></p>
                        <p>Lulusan program TVET mampu menguasai pengetahuan dan kemahiran praktikal dengan lebih baik berbanding lulusan program akademik. Kelebihan ini berpotensi untuk membuka lebih banyak peluang pekerjaan dan menarik minat majikan untuk menawarkan pekerjaan kepada lulusan TVET.</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('tvet') }}" class="btn btn-primary">Kembali ke TVET</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Maklumat Umum TVET End -->
@endsection