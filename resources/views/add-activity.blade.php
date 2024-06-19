<!-- resources/views/add-activity.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Activity</div>
                    <div class="card-body">
                        <form id="add-activity-form" action="{{ route('activities.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Activity Title</label>
                                <textarea class="form-control" id="title" name="title" placeholder="Enter activity title" rows="4"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{ route('takwim') }}" class="btn btn-secondary">Go Back to Calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
