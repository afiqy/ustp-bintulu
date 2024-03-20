@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __("LOG MASUK") }}</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        @include('flash::message')

        <!-- Login Form Start -->
        <div class="container-fluid pt-0 pb-5 mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="margin-top: 20px;">
            <div class="container pt-3 pb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-8 mx-5">
                        <div class="card mx-5">
                            <div class="card-body p-4">
                                <h5 class="pb-4">{{ __('Log Masuk') }}</h5>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group pb-3">
                                        <label for="username">{{ __('Nama Pengguna / E-mel') }}</label>
                                        <input class="form-control" type="text" name="username" id="username">
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="password">{{ __('Kata Laluan') }}</label>
                                        <input class="form-control" type="password" name="password" id="password">
                                    </div>
                                    <div class="form-group pb-3">
                                        <button class="btn btn-primary d-flex text-right">{{ __('Log Masuk') }}</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <a href="{{ route('register') }}" class="btn btn-link">{{ __('Daftar Masuk') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->

    </section>
@endsection
