@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">Temujanji</h1>
                    <a href="" class="h4 text-white">Laman Utama</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h4 text-white">Temujanji</a>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Appointment Start -->
        <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="margin-top: 90px;">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 py-5">
                        <div class="py-5">
                            <h1 class="display-5 text-white mb-4">Membuat Temujanji 
                                Trust</h1>
                            <p class="text-white mb-0">Jika anda mahu berjumpa Pegawai di Pejabat Pendidikan Daerah Bintulu,
                                Sila buat temujanji dengan pegawai yang anda mahu berjumpa supaya dapat berjumpa tanpa ada halangan.
                             </p>  
                                
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                            data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">TEMU JANJI</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Pilih Sektor</option>
                                            <option value="1">Sektor Sektor Perancangan</option>
                                            <option value="2">Sektor Pembelajaran</option>
                                            <option value="3">Sektor Pengurusan Sekolah</option>
                                            <option value="4">Sektor Pembangunan Murid</option>
                                            <option value="5">Sektor Kaunseling Dan Psikologi</option>
                                            <option value="5">Sektor Pentaksiran Dan Peperiksaan</option>
                                            <option value="7">Sektor Pengurusan</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Pilihan Pegawai</option>
                                            <option value="1">Unit Perancangan</option>
                                            <option value="2">Unit Pembelajaran</option>
                                            <option value="3">Unit Pengurusan Sekolah</option>
                                            <option value="3">Unit Pembangunan Murid</option>
                                            <option value="3">Unit Kaunseling Dan Psikologi</option>
                                            <option value="3">Unit Pentaksiran Dan Peperiksaan</option> 
                                            <option value="3">Unit Pengurusan</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control bg-light border-0"
                                            placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control bg-light border-0 datetimepicker-input"
                                                placeholder="Appointment Date" data-target="#date1"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time" id="time1" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control bg-light border-0 datetimepicker-input"
                                                placeholder="Appointment Time" data-target="#time1"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


        <!-- Newsletter Start -->
        <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
            <div class="container">
                <div class="bg-primary p-5">
                    <form class="mx-auto" style="max-width: 600px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark px-4">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </section>
@endsection
