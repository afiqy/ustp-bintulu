@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sektor Pengurusan Sekolah</div>

                    <div class="card-body">
                        <!-- Add your page content here -->
                        <!-- Embed Power BI content -->
                        <iframe width="1250" height="800" src="https://app.powerbi.com/view?r=eyJrIjoiZTBmMmQ2OTgtNDA3My00NDYxLTg2MWEtZDViMmI5ZmZlMmZlIiwidCI6ImQ3M2UwNDFkLWE2MzAtNDg5NS05NmZlLWRiMGUxZTc0Y2Y5OCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('sektor') }}" class="btn btn-secondary">Kembali ke Sektor</a>
                </div>
            </div>
        </div>
    </div>
@endsection
