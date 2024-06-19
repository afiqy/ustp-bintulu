@extends('layouts.app')

@section('content')
<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">{{__('messages.kalendar')}}</h1>
            </div>
        </div>
    </div>

    <!-- FullCalendar -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 mb-4">
                    <!-- Calendar Container -->
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Activity Button - Only for Admins -->
    @if(auth()->user() && auth()->user()->jawatan == 'ADMIN')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <a href="{{ route('add-activity') }}" class="btn btn-primary">Add Activity</a>
                </div>
            </div>
        </div>
    @endif

</section>

<!-- Include FullCalendar CSS -->
<link href="/path/to/fullcalendar/main.min.css" rel="stylesheet">

<!-- Import necessary JavaScript libraries -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        // Calendar configuration options
        initialView: 'dayGridMonth',

        // Load existing events
        events: function(fetchInfo, successCallback, failureCallback) {
            $.ajax({
                url: '/activities',
                method: 'GET',
                success: function(response) {
                    var events = response.map(function(activity) {
                        return {
                            id: activity.id,
                            title: activity.title,
                            start: activity.start_date, // Assuming start_date is the field for activity start date
                            textColor: 'black'
                        };
                    });
                    successCallback(events);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    failureCallback(error);
                }
            });
        },

        // Event handler for when a date is clicked
        dateClick: function(info) {
            var date = info.dateStr; // Get the clicked date
            // Make an AJAX request to fetch activities for the clicked date
            $.ajax({
                url: '/activities/' + date,
                method: 'GET',
                success: function(response) {
                    // Clear existing events on the calendar
                    calendar.removeAllEvents();
                    // Add fetched activities as events to the calendar
                    response.forEach(function(activity) {
                        calendar.addEvent({
                            id: activity.id,
                            title: activity.title,
                            start: activity.start_date, // Assuming start_date is the field for activity start date
                            textColor: 'black'
                        });
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        },
        eventClick: function(info) {
            // Event handler for when an event is clicked
            var eventId = info.event.id;

            if(confirm('Are you sure you want to delete this activity?')) {
                $.ajax({
                    url: '/activities/' + eventId,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        info.event.remove(); // Remove the event from the calendar
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        }
    });
    calendar.render();
});
</script>
@endsection
