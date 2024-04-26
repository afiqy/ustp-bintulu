@extends('layouts.app')

@section('content')
    <section>
        <!-- Piagam Pelanggan Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">PIAGAM PELANGGAN</h1>
                </div>
            </div>
        </div>
        <!-- Piagam Pelanggan End -->

        <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Pejabat Pendidikan Daerah Bintulu</h5>
                            <h1 class="display-5 mb-0">PIAGAM PELANGGAN</h1>
                        </div>

                        <div class="piagam-pelanggan-frame">
                            <div class="piagam-pelanggan">
                               <i><b><p style="font-size: 18px;">Pejabat Pendidikan Daerah Bintulu bersedia memberi perkhidmatan kepada pelanggan-pelanggan seperti berikut:</p></b></i>

                                <ul style="font-size: 18px;">
                                    <li style="margin-bottom: 10px;">Semua kanak-kanak warganegara mengikut umur yang ditetapkan mendapat tempat belajar pada hari pertama sesi persekolahan baru dimulakan.</li>
                                    <li style="margin-bottom: 10px;">Semua program hal ehwal murid diurus berdasarkan prosedur dan peraturan yang berkuatkuasa bagi menjamin kebajikan, keselamatan dan pembentukan keperibadian murid diutamakan.</li>
                                    <li style="margin-bottom: 10px;">Semua murid diberi peluang yang sama untuk mendapat bimbingan dan menyertai pelbagai aktiviti mengikut minat, keperluan dan kecenderungan / bakat masing-masing.</li>
                                    <li style="margin-bottom: 10px;">Peluang pendidikan yang sama untuk orang kurang upaya.</li>
                                    <li style="margin-bottom: 10px;">Semua sekolah diurus dan dipimpin dengan cekap dan betul.</li>
                                    <li style="margin-bottom: 10px;">Semua kurikulum Kementerian Pelajaran Malaysia dilaksanakan di sekolah.</li>
                                    <li style="margin-bottom: 10px;">Semua guru melaksanakan pengajaran dan pembelajaran mengikut kehendak kurikulum Kementerian Pelajaran Malaysia.</li>
                                    <li style="margin-bottom: 10px;">Semua guru ditempatkan ke sekolah tidak lewat dari 21 hari bekerja setelah menerima senarai guru dari Jabatan Pendidikan Negeri Sarawak.</li>
                                    <li style="margin-bottom: 10px;">Semua borang permohonan pertukaran guru dibuat secara dalam talian sebanyak diurus empat (4) kali setahun.</li>
                                    <li style="margin-bottom: 10px;">Semua hal ehwal perjawatan dan perkhidmatan kakitangan diurus dalam tempoh 14 hari bekerja dari tarikh penerimaan makluman.</li>
                                    <li style="margin-bottom: 10px;">Semua jenis permohonan diberi akuan terima dalam tempoh 14 hari bekerja dari tarikh penerimaan.</li>
                                    <li style="margin-bottom: 10px;">Semua tuntutan kewangan yang lengkap diproses dalam tempoh 14 hari bekerja dari tarikh penerimaan.</li>
                                    <li style="margin-bottom: 10px;">Semua pentaksiran dan peperiksaan diurus dan dikendalikan dengan cekap dan tepat.</li>
                                    <li style="margin-bottom: 10px;">Memastikan proses pendaftaran calon peperiksaan awam yang dikendalikan oleh Lembaga Peperiksaan dan Majlis Peperiksaan Malaysia dalam tempoh 30 hari mengikut prosedur yang ditetapkan.</li>
                                    <li style="margin-bottom: 10px;">Penggunaan kemudahan dan peralatan ICT secara optimum bagi memantapkan dan memperkasakan sistem penyampaian pengajaran dan pembelajaran serta perkhidmatan.</li>
                                    <li style="margin-bottom: 10px;">Semua kakitangan mendapat perkhidmatan psikologi dan kaunseling jika diperlukan.</li>
                                    <li style="margin-bottom: 10px;">Semua aduan pelanggan diberi surat akuan terima dalam tempoh 1 hari bekerja dari tarikh aduan diterima.</li>
                                    <li style="margin-bottom: 10px;">Semua maklum balas pelanggan diambil tindakan.</li>
                                    <li style="margin-bottom: 10px;">Semua pelanggan diberi layanan yang mesra, tepat dan terperinci.</li>
                                    <li style="margin-bottom: 10px;">Melaksanakan latihan sekurang-kurangnya 5 hari setahun kepada semua pegawai dan anggota kumpulan pelaksana.</li>
                                    <li style="margin-bottom: 10px;">Melaksanakan latihan sekurang-kurangnya empat puluh dua (42) jam Mata Kredit setahun kepada semua pegawai / guru.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    </section>
@endsection

    <style>
        .piagam-pelanggan-frame {
            background-color: #f0f0f0; 
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .piagam-pelanggan {
            padding: 20px;
        }

        .piagam-pelanggan p {
            margin-bottom: 20px;
        }

        .piagam-pelanggan ul {
            list-style-type: none;
            padding-left: 0;
        }

        .piagam-pelanggan ul li {
            padding-left: 20px;
            position: relative;
            margin-bottom: 10px;
        }

        .piagam-pelanggan ul li::before {
            content: '\2022';
            position: absolute;
            left: 0;
            color: #007bff;
        }
    </style>
