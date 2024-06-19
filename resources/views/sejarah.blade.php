@extends('layouts.app')
@section('content')
<section>
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{__('messages.sejarah')}}</h1>
                </div>
            </div>
        </div>

         <!-- Sejarah PPD Start -->
        <div class="container py-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-4">
                            <h1 class="display-5 mb-0">{{__('messages.sejarah 2')}}</h1>
                        </div>
                        <p>{{__('messages.Selaras dengan pembangunan pesat Pendidikan di Malaysia, Kementerian Pendidikan Malaysia mewujudkan satu organisasi pendidikan di setiap daerah dalam negeri-negeri di Malaysia yang berpaksikan satu daerah satu pejabat Pendidikan. Pejabat Pendidikan Daerah Bintulu adalah salah sebuah antara 31 buah Pejabat Pendidikan Daerah di Sarawak.')}}</p>
                        <p>{{__('messages.Pada tahun 1977 hingga 1982, bangunan Pejabat Pendidikan Daerah Bintulu terletak di Jalan Law Gek Soon, Bintulu. Dibina bersebelahan dengan bangunan TM (Telekom) dan bertentangan dengan Lapangan Terbang Lama Bintulu. Bangunan yang gah pada masa itu diterajui oleh Pegawai Pendidikan Daerah Bintulu yang pertama iaitu Encik Joseph Lee.')}}</p>
                        <p>{{__('messages.Awal tahun 1983, bangunan Pejabat Pendidikan Bintulu dibina di KM5, Jalan Sultan Iskandar, Bintulu, merupakan lokasi terkini hingga sekarang. Pejabat Pendidikan Daerah Bintulu di Bawah pimpinan Encik Fred Anak Entau, Pegawai Pendidikan Daerah Bintulu kini sentiasa memberi khidmat cemerlang kepada semua pelanggan dan telah merangkul pelbagai anugerah kecermelangan di peringkat bahagian, negeri dan kebangsaan.')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sejarah PPD End -->

    <!-- Sejarah PPD Start -->
    <div class="container py-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">PPD Bintulu</h5>
                            <h1 class="display-5 mb-0">{{__('messages.Pegawai Pendidikan Daerah Bintulu')}}</h1>
                        </div>
                    <div class="timeline">
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/1.jpg') }}" alt="Alias Bin Abu Bakar" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Alias Bin Abu Bakar</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">16.01.1983 - 27.01.1985</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/2.jpg') }}" alt="Awang Salleh Bin Awang Wahab" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Awang Salleh Bin Awang Wahab</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}} </p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">28.01.1985 - 1986</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/3.jpg') }}" alt="Rosli Bin Terhim" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Rosli Bin Terhim</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}} </p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">16.12.1989 - 15.05.1992</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/4.jpg') }}" alt="Bolhassan Bin Hj Manis" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Bolhassan Bin Hj Manis</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}} </p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">21.01.1994 - 15.01.1995</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: -0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/5.jpg') }}" alt="Abdul Rashid Bin Abang" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Abdul Rashid Bin Abang</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}} </p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">16.12.1994 - 15.10.1996</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/6.jpg') }}" alt="Mohd. Jefri Bin Montot" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Mohd. Jefri Bin Montot</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}} </p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">31.12.1996 - 07.09.1998</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/7.jpg') }}" alt="Safiee Bin Dris" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Safiee Bin Dris</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">08.09.1998 - 15.01.2003</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/8.jpg') }}" alt="Abdillah Bin Adam" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Abdillah Bin Adam</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}} </p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">16.01.2003 - 08.01.2004</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/9.jpg') }}" alt="Dr. Loji@Roji Hj Saibi" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Dr. Loji@Roji Hj Saibi</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}} </p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">09.01.2004 - 01.06.2005</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/10.jpg') }}" alt="Hajah Serina Binti Sauni" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Hajah Serina Binti Sauni</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">02.06.2005 - 11.07.2006</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/11.jpg') }}" alt="Fatimah Binti Matair" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Fatimah Binti Matair</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">12.07.2006 - 26.12.2010</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/12.jpg') }}" alt="Tan Kiang Tuang" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Tan Kiang Tuang</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">17.12.2010 - 16.12.2013</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/13.jpg') }}" alt="Abdul Mu'in Bin Abdul Kassim" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Abdul Mu'in Bin Abdul Kassim</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">20.12.2013 - 30.01.2017</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/14.jpg') }}" alt="Fred Anak Entau" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Fred Anak Entau</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">16.02.2017 - 20.12.2019</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/15.jpg') }}" alt="Radin Foji Bin Radin Abdul Rahim" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Radin Foji Bin Radin Abdul Rahim</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">18.12.2019 - 09.01.2021</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <br>
                        <div class="timeline-wrapper">
                            <div class="timeline-content" style="padding: 0px; background-color: #f9f9f9; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div style="border: 2px solid #ccc; padding: 5px; border-radius: 10px; width: 150px; height: 150px; margin-right: 20px; float: left;">
                                    <img src="{{ asset('img/test - Copy.png') }}" alt="Samri Bin Suhaili" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                </div>
                                <h3 class="title" style="font-size: 18px; color: #333; margin-bottom: 10px;">Samri Bin Suhaili</h3>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">{{__('messages.Tahun Berkhidmat:')}}</p>
                                <p class="year" style="font-size: 16px; color: #666; margin-bottom: 5px;">27.06.2022 - hingga kini</p>
                                <div style="border-bottom: 1px solid #ddd; margin-bottom: 10px;"></div>
                                <br>
                                <br>
                           
                                <!-- You can add additional decorative elements here, such as icons or lines -->
                            </div>
                        </div>
                        <!-- Repeat for more entries -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sejarah PPD End -->
</section>
@endsection
