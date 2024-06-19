@extends('layouts.app')

@section('content')
<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">{{ __("messages.log_masuk") }}</h1>
            </div>
        </div>
    </div>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="container-fluid pt-0 pb-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 20px;">
        <div class="container pt-3 pb-5">
            <div class="row justify-content-center">
                <div class="col-sm-8 mx-5">
                    <div class="card mx-5">
                        <div class="card-body p-4">
                            <h5 class="pb-4">{{ __('messages.log_masuk') }}</h5>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group pb-3">
                                    <label for="username">{{ __('messages.E-mel Pengguna') }}</label>
                                    <input class="form-control" type="text" name="username" id="username" value="{{ old('username') }}">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group pb-3">
                                    <label for="password">{{ __('messages.Kata Laluan') }}</label>
                                    <input class="form-control" type="password" name="password" id="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group pb-3">
                                    <button class="btn btn-primary d-flex text-right">{{ __('messages.Log Masuk') }}</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <a href="{{ route('password.request') }}" class="btn btn-link">{{ __('messages.Lupa Kata Laluan?') }}</a>
                            </div>
                            <div class="text-center">
                                <div style="width: fit-content; margin: 0 auto;">
                                    <a href="{{ route('register') }}" class="btn btn-primary d-flex text-center" style="padding: 8px 16px;">{{ __('messages.Daftar Masuk') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
