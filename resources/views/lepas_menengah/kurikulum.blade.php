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
    <!-- Kurikulum Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Lepas Menengah</h5>
                        <h3 class="display-5 mb-0">Kurikulum</h3>
                    </div>

                    <div class="obj-frame">
                        <p>Pelaksanaan sistem pentaksiran baharu STPM telah dimulai pada pengambilan sesi 2012 setelah diluluskan oleh Mesyuarat Jemaah Menteri (MJM) pada 4 Januari 2012.</p>
                        <p>Sebanyak 22 mata pelajaran ditawarkan dalam sistem pentaksiran baharu STPM. Namun begitu, hanya empat atau lima mata pelajaran sahaja yang perlu dipilih termasuk mata pelajaran Pengajian Am sebagai mata pelajaran wajib. Manakala mata pelajaran MUET wajib diambil oleh semua murid.</p>
                        <p>Mulai tahun 2019 mata pelajaran Tahfiz Al-Quran telah dimasukkan sebagai salah satu mata pelajaran STPM, menjadikan jumlah keseluruhan mata pelajaran yang ditawarkan adalah sebanyak 23 mata pelajaran.</p>
                        <p>Mata pelajaran STPM yang ditawarkan adalah seperti yang berikut :</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>Kod</th>
                                    <th>Mata Pelajaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>900</td>
                                    <td>Pengajian Am</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>910</td>
                                    <td>Bahasa Melayu</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>911</td>
                                    <td>Bahasa Cina</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>912</td>
                                    <td>Bahasa Tamil</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>913</td>
                                    <td>Bahasa Arab</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>920</td>
                                    <td>Literature in English</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>922</td>
                                    <td>Kesusasteraan Melayu Komunikatif</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>930</td>
                                    <td>Syariah</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>931</td>
                                    <td>Usuluddin</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>940</td>
                                    <td>Sejarah</td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>942</td>
                                    <td>Geografi</td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>944</td>
                                    <td>Ekonomi</td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>946</td>
                                    <td>Pengajian Perniagaan</td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>948</td>
                                    <td>Perakaunan</td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>950</td>
                                    <td>Mathematics (M)</td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>954</td>
                                    <td>Mathematics (T)</td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>958</td>
                                    <td>Information and Communications Technology (ICT) </td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td>960</td>
                                    <td>Physics</td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td>962</td>
                                    <td>Chemistry</td>
                                </tr>
                                <tr>
                                    <td>20.</td>
                                    <td>964</td>
                                    <td>Biology</td>
                                </tr>
                                <tr>
                                    <td>21.</td>
                                    <td>966</td>
                                    <td>Sains Sukan</td>
                                </tr>
                                <tr>
                                    <td>22.</td>
                                    <td>970</td>
                                    <td>Seni Visual</td>
                                </tr>
                                <tr>
                                    <td>23.</td>
                                    <td>932</td>
                                    <td>Tahfiz Al-Quran</td>
                                </tr>
                                <!-- Add other subjects as needed -->
                            </tbody>
                        </table>
                        <p>Tiga kemahiran utama yang diterapkan dalam pendidikan Tingkatan 6 ialah kemahiran kognitif, kemahiran manipulatif, dan kemahiran insaniah (soft skills).</p>
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
