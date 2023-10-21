@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __("DAFTAR MASUK") }}</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        @include('flash::message')

        <!-- Register Form Start -->
        <div class="container-fluid pt-0 pb-5 mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="margin-top: 20px;">
            <div class="container pt-3 pb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-8 mx-5">
                        <div class="card mx-5">
                            <div class="card-body p-4">
                                <h5 class="pb-4">{{ __('Daftar Masuk') }}</h5>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                        
                                    <!-- Name -->
                                    <div class="mt-4">
                                        <label for="firstname">{{ __('Nama') }}</label>
                                        <input class="form-control" id="firstname" class="block mt-1 w-full" type="text" name="firstname" required
                                            autofocus />
                                    </div>
                                    <!-- Name -->
                                    <div class="mt-4">
                                        <label for="lastname">{{ __('Nama Terakhir') }}</label>
                        
                                        <input class="form-control" id="lastname" class="block mt-1 w-full" type="text" name="lastname" required />
                                    </div>
                                    <!-- Username -->
                                    <div class="mt-4">
                                        <label for="username">{{ __('Nama Pengguna') }}</label>
                        
                                        <input class="form-control" id="username" class="block mt-1 w-full" type="text" name="username" required />
                                    </div>
                                    
                                    <!-- Email -->
                                    <div class="mt-4">
                                        <label for="email">{{ __('E-mel') }}</label>
                        
                                        <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" required />
                                    </div>
                        
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <label for="password">{{ __('Kata Laluan') }}</label>
                        
                                        <input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password" required
                                            autocomplete="new-password" />
                                    </div>
                        
                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <label for="password_confirmation">{{ __('Sahkan Kata Laluan') }}</label>
                        
                                        <input class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password"
                                            name="password_confirmation" required />
                                    </div>
                        
                                    <div class="flex items-center justify-end mt-4">
                                        <button class="btn btn-primary">
                                            {{ __('Daftar Masuk') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Form End -->

    </section>
@endsection

