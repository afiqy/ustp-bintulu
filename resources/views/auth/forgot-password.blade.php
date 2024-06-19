@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lupa Kata Laluan') }}</div>
                    <div class="card-body">
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Lupa kata laluan anda? Tiada masalah. Beritahu kami alamat emel anda dan kami akan menghantar pautan tetapan semula kata laluan melalui emel yang membolehkan anda memilih yang baru.') }}
                        </div>

                        <!-- Session Status -->
                        @if (session('status'))
                            <div class="mb-4 text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Validation Errors -->
                        @if ($errors->any())
                            <div class="mb-4 text-red-600">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="email">{{ __('Emel') }}</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" required autofocus>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Emel Pautan Tetapan Semula Kata Laluan') }}
                                </button>
                            </div>
                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="btn btn-link">Kembali ke Log Masuk</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
