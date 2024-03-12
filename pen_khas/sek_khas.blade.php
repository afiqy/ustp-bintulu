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
    <!-- Pusat Sumber Bahagian Pendidikan Khas -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Khas</h5>
                        <h4 class="display-5 mb-0">Sekolah Pendidikan Khas</h4>
                    </div>

                    <div class="obj-frame">
                        <p>Sekolah Pendidikan Khas adalah sekolah yang menyediakan pendidikan khas bagi murid berkeperluan khas (MBK) pada semua peringkat persekolahan. Sekolah Pendidikan Khas ini dikendalikan terus oleh Bahagian Pendidikan Khas (BPKhas).</p>
                        <p>Senarai sekolah yang mempunyai pendidikan khas di Bintulu adalah seperti berikut:</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>BIL.</th>
                                        <th>NAMA SEKOLAH</th>
                                        <th>ALAMAT</th>
                                        <th>EMEL [@moe.edu.my]</th>
                                        <th>NO. TELEFON</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>SK Orang Kaya Mohammad</td>
                                        <td>D/A Pejabat Pendidikan Daerah Bintulu<br>
                                            Km. 5, Jalan Sultan Iskandar, <br>
                                            97000 Bintulu, <br>
                                            Sarawak</td>
                                        <td>YBA9101</td>
                                        <td>086331966</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>SK Asyakirin</td>
                                        <td>D/A Pejabat Pendidikan Daerah Bintulu<br>
                                            Km. 5, Jalan Sultan Iskandar, <br>
                                            97000 Bintulu, <br>
                                            Sarawak</td>
                                        <td>YBA9113</td>
                                        <td>086-330461</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>SK Kidurong II</td>
                                        <td>Jalan Datuk Bandar Abg Mustapha <br>
                                            97000 Bintulu, <br>
                                            Sarawak</td>
                                        <td>YBA9111</td>
                                        <td>086-254532</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>SK Kampung Jepak</td>
                                        <td>D/A Pejabat Pendidikan Daerah Bintulu<br>
                                            Km. 5, Jalan Sultan Iskandar, <br>
                                            97000 Bintulu, <br>
                                            Sarawak</td>
                                        <td>YBA9102</td>
                                        <td>086-201273</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>SJK (C) Chung Hua Bintulu</td>
                                        <td>D/A Pejabat Pendidikan Daerah Bintulu<br>
                                            Km. 5, Jalan Sultan Iskandar, <br>
                                            97000 Bintulu, <br>
                                            Sarawak</td>
                                        <td>YCC9101</td>
                                        <td>086-331152</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>SMK Kemena</td>
                                        <td>Lot 830, Blok 37, Kemena Land District,<br>
                                            97000 Bintulu, <br>
                                            Sarawak</td>
                                        <td>YEA9105</td>
                                        <td>086-201013</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>SMK Kidurong</td>
                                        <td>Peti Surat 2078<br>
                                            97011 Bintulu, <br>
                                            Sarawak</td>
                                        <td>YEA9103</td>
                                        <td>086-254225</td>
                                    </tr>
                                </tbody>
                            </table>   
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('pen_khas') }}" class="btn btn-primary">Kembali ke Pendidikan Prasekolah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- Maklumat Prasekolah End -->
