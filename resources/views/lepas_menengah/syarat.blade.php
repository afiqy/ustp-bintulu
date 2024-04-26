@extends('layouts.app')
@section('content')
<style>
.entry-frame {
    background-color: #f0f0f0; 
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Add margin bottom to prevent overlap with footer */
}
</style>
<section>
    <!-- Syarat Kemasukan Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pendidikan Lepas Menengah</h5>
                        <h4 class="display-5 mb-0">Syarat Kemasukan</h4>
                    </div>

                    <div class="entry-frame">
                        <h5 class="text-uppercase">Syarat Kemasukan ke Tingkatan 6</h5>
                        <ul>
                            <li><strong>Syarat Am:</strong>
                                <ul>
                                    <li>Lulus SPM dengan mendapat sekurang-kurangnya kepujian bagi mata pelajaran Bahasa Melayu.</li>
                                    <li>Berumur antara 17 hingga 20 tahun pada 1 Januari tahun semasa.</li>
                                </ul>
                            </li>
                            <li><strong>Syarat Khas:</strong>
                                <ul>
                                    <li>Bidang STEM - Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 18 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                    <li>Bidang Sains Sosial - Sekolah Menengah Harian
                                        <ul>
                                            <li>Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 12 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                        </ul>
                                    </li>
                                    <li>Sekolah Menengah Agama Di Sekolah Menengah Kebangsaan Agama (SMKA) dan Sekolah Menengah Agama Bantuan Kerajaan (SABK) 
                                        <ul>
                                            <li>Mendapat sekurang-kurangnya Gred D bagi mata pelajaran Bahasa Arab/Al-Lughah Al-Arabiah Al-Mu'asirah/Turath Bahasa Arab; dan</li>
                                            <li>Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 14 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                        </ul>
                                    </li>
                                    <li>Sekolah Menengah Agama Di Sekolah Berasrama Penuh bagi Kolej Islam Sultan Alam Shah (KISAS) dan Sekolah Menengah Agama Persekutuan (SMAP) Labu
                                        <ul>
                                            <li>Mendapat sekurang-kurangnya Gred C dalam mata pelajaran Bahasa Arab/Al-Lughah Al-Arabiah Al-Mu'asirah/Turath Bahasa Arab; dan</li>
                                            <li>Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 14 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <br>
                        <h5 class="text-uppercase">Syarat Kemasukan ke Tingkatan 6 - Murid Bekerperluan Khas</h5>
                        <ul>
                            <li><strong>Syarat Am:</strong>
                                <ul>
                                    <li>Lulus SPM dengan mendapat sekurang-kurangnya lulus bagi mata pelajaran Bahasa Melayu.</li>
                                    <li>Berumur antara 17 hingga 21 tahun pada 1 Januari tahun semasa.</li>
                                </ul>
                            </li>
                            <li><strong>Syarat Khas:</strong>
                                <ul>
                                    <li>Bidang STEM - Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 18 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                    <li>Bidang Sains Sosial - Sekolah Menengah Harian
                                        <ul>
                                            <li>Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 18 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                        </ul>
                                    </li>
                                    <li>Sekolah Menengah Agama Di Sekolah Menengah Kebangsaan Agama (SMKA) dan Sekolah Menengah Agama Bantuan Kerajaan (SABK) 
                                        <ul>
                                            <li>Mendapat sekurang-kurangnya Gred D bagi mata pelajaran Bahasa Arab/Al-Lughah Al-Arabiah Al-Mu'asirah/Turath Bahasa Arab; dan</li>
                                            <li>Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 18 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                        </ul>
                                    </li>
                                    <li>Sekolah Menengah Agama Di Sekolah Berasrama Penuh bagi Kolej Islam Sultan Alam Shah (KISAS) dan Sekolah Menengah Agama Persekutuan (SMAP) Labu
                                        <ul>
                                            <li>Mendapat sekurang-kurangnya Gred C dalam mata pelajaran Bahasa Arab/Al-Lughah Al-Arabiah Al-Mu'asirah/Turath Bahasa Arab; dan</li>
                                            <li>Mendapat sekurang-kurangnya TIGA kepujian dengan jumlah mata gred tidak melebihi 18 unit bagi 3 mata pelajaran dalam kumpulan yang ditetapkan.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                
                    </div>

                    <!-- If you have different requirements for students with special needs, you can include them below -->

                    <div class="mt-4">
                        <a href="{{ route('lepas_menengah') }}" class="btn btn-primary">Kembali ke Pendidikan Lepas Menengah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
