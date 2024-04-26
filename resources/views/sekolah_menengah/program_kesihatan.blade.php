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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Sekolah Menengah</h5>
                        <h4 class="display-5 mb-0">Program Kesihatan Di Sekolah</h4>
                    </div>

                    <div class="obj-frame">
                        <h5><strong>Pengenalan</strong></h5>
                        <p>KPM menubuhkan JK Induk 3K (Kebersihan, Kesihatan dan Keselamatan) yang dipengerusikan oleh Timbalan Menteri Pelajaran bagi menangani isu-isu nasional berkaitan 3 aspek di atas. Bahagian Pengurusan Sekolah Harian dipertanggungjawabkan untuk melaksanakan Program 3K ini.</p>
                        <h5><strong>Taarifan</strong></h5>
                        <ul>
                            <li><strong>Kebersihan:</strong> Personaliti diri warga sekolah yang cemerlang dan persekitaran sekolah yang bersih, indah dan kondusif dalam membantu proses pengajaran dan pembelajaran yang berkualiti dan berkesan.</li>
                            <li><strong>Kesihatan:</strong> Sihat, cergas dan cerdas dari segi jasmani, emosi , rohani dan intelek supaya murid dapat mengawal dan mengurus diri dalam membantu meningkatkan pencapaian akademik dan pembangunan sahsiah diri.</li>
                            <li><strong>Keselamatan:</strong> Suasana yang selamat di dalam atau di luar sekolah boleh meningkatkan keyakinan dan kekuatan dalaman diri (jati diri murid) daripada sebarang pengaruh dan ancaman luar.</li>
                        </ul>
                        <h5><strong>Skop dan Bidang Tugas</strong></h5>
                        <p><strong>1. Bertanggungjawab merancang Pelan Tindakan Pengurusan Kebersihan iaitu;</strong></p>
                        <ul>
                            <li>Menentukan program pembangunan kebersihan murid dilaksanakan di sekolah</li>
                            <li>Menyelaras aktiviti-aktiviti program kebersihan sekolah dengan agensi-agensi berkaitan</li>
                            <li>Menentukan keperluan-keperluan kebersihan untuk kesejahteraan murid-murid di sekolah</li>
                            <li>Merancang keperluan sumber kewangan dan tenaga dalam Pendidikan Kebersihan</li>
                            <li>Mengenal pasti keperluan latihan kepada warga sekolah</li>
                            <li>Memastikan syarat-syarat perjanjian dan bidang tugas berkaitan dengan perjanjian/kontrak seperti syarikat pembersihan, pengusaha kantin sekolah, pengusaha dewan makan asrama, pembekal makanan RMT dan SBT serta pembekal susu sekolah.</li>
                        </ul>    
                        <p><strong>2. Mewujudkan polisi kebersihan dan kepimpinan yang berkaitan dengan pengurusan kebersihan murid.</strong></p>
                        <p><strong>3. Melaksanakan pemeriksaan, pemantauan dan penilaian kebersihan murid dan sekolah;</strong></p>
                        <ul>
                            <li>Mewujud serta melaksanakan manual penjagaan kebersihan murid dan program kebersihan sekolah.</li>
                            <li>Mengkaji dan menilai keberkesanan program secara berterusan</li>
                        </ul> 
                        <p><strong>4. Menyediakan pelan kontigensi kebersihan untuk menangani kes-kes seperti banjir, jerebu, keracunan makanan dan lain-lain.</strong></p>
                        <p><strong>5. Meningkatkan kerjasama dengan agensi-agensi yang berkaitan program kebersihan</strong></p>
                        <p><strong>6. Menyediakan laporan secara berkala.</strong></p>
                        </ul>

                        <h5><strong>Cadangan Pelaksanaan Aktiviti</strong></h5>
                        <ul>
                            <li>Melaksanakan program kebersihan seperti Program Penjagaan Gigi dan Mulut, Program Bebas Kutu, Program Cuci Tangan, Program Penjagaan Kuku, Program Kemas Diri, dan Program Membasmi Kudis Buta.</li>
                            <li>Melaksanakan pertandingan kebersihan seperti Pertandingan Kebersihan, Pertandingan landskap, Pertandingan Kantin, Pertandingan Angkat Kelas, Pertandingan Melukis dan Mewarna, dan Pertandingan Kuiz, Pidato dan Bahas.</li>
                            <li>Melaksanakan pameran.</li>
                            <li>Melaksanakan program-program lain seperti Program Bebas Denggi dan menyediakan sudut keceriaan serta sekolah kawasan Larangan Merokok.</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('sek_menengah') }}" class="btn btn-primary">Kembali ke Pendidikan Sekolah Menengah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
