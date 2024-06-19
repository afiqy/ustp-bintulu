@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12"> <!-- Half of the width for each iframe -->
                <div class="card mb-4"> <!-- Added mb-4 class for margin bottom -->
                    <div class="card-header">Sektor Pembelajaran</div>

                    <div class="card-body">
                        <!-- Add your first Power BI content here -->
                        <!-- Embed first Power BI content -->
                        <iframe width="100%" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiMDdiZTNjYmMtYTg1NC00Nzc4LTgzMzMtOTYzYmQ2ODNiMGVkIiwidCI6ImQ3M2UwNDFkLWE2MzAtNDg5NS05NmZlLWRiMGUxZTc0Y2Y5OCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-12"> <!-- Half of the width for each iframe -->
                <div class="card mb-4"> <!-- Added mb-4 class for margin bottom -->
                    <div class="card-header">Sektor Pembelajaran</div>

                    <div class="card-body">
                        <!-- Add your second Power BI content here -->
                        <!-- Embed second Power BI content -->
                        <iframe width="100%" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiNmZmM2ZhMDYtZmZkYS00OGUyLWI5NjItMTQxNzgzYTNkYjUwIiwidCI6ImQ3M2UwNDFkLWE2MzAtNDg5NS05NmZlLWRiMGUxZTc0Y2Y5OCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-12"> <!-- Half of the width for each iframe -->
                <div class="card mb-4"> <!-- Added mb-4 class for margin bottom -->
                    <div class="card-header">Sektor Pembelajaran</div>

                    <div class="card-body">
                        <!-- Add your third Power BI content here -->
                        <!-- Embed third Power BI content -->
                        <iframe width="100%" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiZjYzY2Y3NWUtNTdhOS00MjQ4LWJmMTQtNTFhMmI2MmFkZWQ5IiwidCI6ImQ3M2UwNDFkLWE2MzAtNDg5NS05NmZlLWRiMGUxZTc0Y2Y5OCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('sektor') }}" class="btn btn-secondary">Kembali ke Sektor</a>
            </div>
        </div>
    </div>
@endsection

