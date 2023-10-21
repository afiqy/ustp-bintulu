@if( Session::has("error") )
<div class="error-msg-container">
    <p>
        {{ Session::get("error") }}
    </p>
</div>
@endif
@if( Session::has("success") )
<div class="success-msg-container">
    <p>
        {{ Session::get("success") }}
    </p>
</div>
@endif
@if ($errors->any())
<div class="error-msg-container">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif
