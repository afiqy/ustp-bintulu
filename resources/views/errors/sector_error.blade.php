<!-- resources/views/errors/sector_error.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5"> <!-- Increased mb-5 for more bottom margin -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-danger">Akses Ditolak</h2>
                <p class="lead">Anda tidak dibenarkan untuk mengakses sektor ini.</p>
                <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Laman Utama</a>
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
                <br>
            </div>
        </div>
    </div>
@endsection
