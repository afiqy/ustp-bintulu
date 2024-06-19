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
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{{__('messages.Pendidikan Prasekolah')}}</h5>
                            <h3 class="display-5 mb-0">{{__('messages.Objektif')}}</h3>
                        </div>

                        <div class="obj-frame">
                        <i><b><p style="font-size: 20px;">{{__('messages.Prasekolah di Aliran Perdana')}}</p></b></i>
                        <ul>
                            <li style="font-size: 18px;">{{__('messages.Menggunakan bahasa untuk berkomunikasi dengan berkesan;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Mengamalkan nilai-nilai Islam dalam kehidupan seharian untuk murid beragama Islam;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Mengamalkan nilai-nilai murni masyarakat Malaysia;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Menghargai dan peka terhadap budaya masyarakat Malaysia;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Menyayangi dan menghargai alam sekitar;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Memperkembangkan konsep kendiri yang positif dan keyakinan diri;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Mempraktikkan amalan kesihatan, membina kecergasan badan dan menjaga keselamatan diri;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Mengembangkan daya kreatif dan estetika; dan')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Mengaplikasikan pemikiran kritis, kreatif dan inovatif serta kemahiran menyelesaikan masalah dalam pembelajaran dan kehidupan seharian.')}}</li>
                        </ul>

                        <i><b><p style="font-size: 20px;">{{__('messages.Prasekolah Pendidikan Khas')}}</p></b></i>
                        <ul>
                            <li style="font-size: 18px;">{{__('messages.Menyediakan peluang pendidikan yang sesuai dan relevan dengan kebolehan Murid Berkeperluan Khas agar dapat berdikari dan menjalani hidup yang berkualiti;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Membangunkan perkembangan kognitif dan kemahiran bersosial serta mengurangkan masalah tingkah laku yang sering dikaitkan dengan kanak-kanak berkeperluan khas;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Meningkatkan perkembangan fizikal, bahasa, dan memahirkan pertuturan, psikologi dan kemahiran urus diri;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Mewujudkan sifat ingin tahu, berinisiatif dan berdisiplin;')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Mengamalkan nilai-nilai Islam dalam kehidupan seharian untuk murid beragama Islam; dan')}}</li>
                            <li style="font-size: 18px;">{{__('messages.Menyediakan diri dengan kemahiran asas yang diperlukan untuk memberikan pengalaman persekolahan yang akan dilalui.')}}</li>
                        </ul>
                    
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('pra_sekolah') }}" class="btn btn-primary">{{__('messages.Kembali ke Pendidikan Pra Sekolah')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- About End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </section>
@endsection
