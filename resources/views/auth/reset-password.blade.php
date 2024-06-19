@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="email">{{ __('Emel') }}</label>
                                <input id="email" class="form-control" type="email" name="email"
                                    value="{{ old('email', $request->email) }}" required autofocus>
                            </div>
                            <br>
                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">{{ __('Kata Laluan') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required>
                            </div>
                            <br>
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Sahkan Kata Laluan') }}</label>
                                <input id="password_confirmation" class="form-control" type="password"
                                    name="password_confirmation" required>
                            </div>
                            <br>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Menetapkan semula kata laluan') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
