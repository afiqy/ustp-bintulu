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
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Khas</h5>
                        <h4 class="display-5 mb-0">Pendidikan Islam Dalam Pendidikan Khas</h4>
                    </div>

                    <div class="obj-frame">
                        <p>Program j-QAF Pendidikan Khas adalah suatu usaha memperkasakan Pendidikan Islam (PI) di Pendidikan Khas untuk :</p>
                        <ol>
                            <li>Murid Berkeperluan Khas (MBK) Bermasalah Pembelajaran, Bermasalah Pendengaran dan Bermasalah Penglihatan.</li>
                        </ol>
                        <p>Bagi Murid Bermasalah Pembelajaran program ini memberi penekanan khusus dalam:</p>
                        <ul>
                            <li>Pengajaran dan Pembelajaran al-Quran menggunakan Modul Kaedah Iqra' dan</li>
                            <li>Pengajaran dan Pembelajaran Fardhu Ain menggunakan Modul Amali Solat.</li>
                        </ul>
                        <ol start="2">
                            <li>Bagi Murid Bermasalah Pendengaran program ini memberi penekanan khusus dalam:</li>
                        </ol>
                        <ul>
                            <li>Pengajaran dan Pembelajaran al-Quran menggunakan Modul Kaedah Iqra',</li>
                            <li>Pengajaran dan Pembelajaran Fardhu Ain menggunakan Modul Amali Solat, dan</li>
                            <li>Pengajaran dan Pembelajaran Jawi menggunakan Modul Pembelajaran Jawi.</li>
                        </ul>
                        <ol start="3">
                            <li>Manakala bagi Murid Bermasalah Penglihatan menggunakan sepenuh modul j-QAF aliran perdana yang dilaksanakan di peringkat sekolah rendah.</li>
                        </ol>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('pen_khas') }}" class="btn btn-primary">Kembali ke Pendidikan Khas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
