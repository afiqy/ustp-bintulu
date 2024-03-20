@extends ('layouts.app')
@section ('content')
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
        <div class="container-fluid pt-0 pb-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 20px;">
            <div class="container pt-3 pb-5">
                <div class="row justify-content-center">
                    <div class="col-sm-8 mx-5">
                        <div class="card mx-5">
                            <div class="card-body p-4">
                                <h3 class="pb-4">{{ __('Daftar Masuk') }}</h3>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="mt-4">
                                        <label for="name">{{ __('Nama') }}</label>
                                        <input class="form-control" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                                    </div>

                                    <!-- Email -->
                                    <div class="mt-4">
                                        <label for="email">{{ __('E-mel') }}</label>
                                        <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" required />
                                    </div>

                                    <!-- No Phone -->
                                    <div class="mt-4">
                                        <label for="phone_number">{{ __('No. Telefon') }}</label>
                                        <input class="form-control block mt-1 w-full" id="phone_number" type="tel" name="phone_number" required />
                                    </div>

                                    <!-- Sektor -->
                                     <div class="mt-4">
                                        <label for="sektor">{{ __('Sektor') }}</label>
                                        <select class="form-control" id="sektor" class="block mt-1 w-full" name="sektor" required>
                                            <option value="" disabled selected>{{ __('Pilih Sektor') }}</option>
                                            <option value="1">{{ __('Sektor Perancangan') }}</option>
                                            <option value="2">{{ __('Sektor Pembelajaran') }}</option>
                                            <option value="3">{{ __('Sektor Pengurusan Sekolah') }}</option>
                                            <option value="4">{{ __('Sektor Pembangunan Murid') }}</option>
                                            <option value="5">{{ __('Sektor Psikologi & Kaunseling') }}</option>
                                            <option value="6">{{ __('Sektor Pentaksiran & Peperiksaan') }}</option>
                                            <option value="7">{{ __('Sektor Pengurusan') }}</option>
                                            <!-- Add options for other sectors -->
                                        </select>
                                    </div>

                                    <!-- Jawatan -->
                                    <div class="mt-4">
                                        <label for="jawatan">{{ __('Jawatan') }}</label>
                                        <input class="form-control" id="jawatan" class="block mt-1 w-full" type="text" name="jawatan" required />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <label for="password">{{ __('Kata Laluan') }}</label>
                                        <input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <label for="password_confirmation">{{ __('Sahkan Kata Laluan') }}</label>
                                        <input class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                                    </div>

                                    <div class="text-center mt-5">
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="btn btn-primary btn-block" style="width: 45%;">{{ __('Daftar Masuk') }}</button>
                                            <a href="{{ route('login') }}" class="btn btn-primary btn-block" style="width: 45%;">Kembali ke Log Masuk</a>
                                        </div>
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
