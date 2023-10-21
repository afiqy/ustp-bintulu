<div id="{{ $attributes['id'] }}">
    <main class="{{ $attributes['data-main-class'] }}" style="{{ $attributes['data-main-style'] }}">
        <div class="{{ $attributes['data-content-class'] }}">
            @if (app('request')->route()->getName() !== 'admin.login')
                @if(Session::has("error") || Session::has("success"))
                    <div id="flash-message" style="margin-top: 3.75rem;">
                        @include('components.flash-message')
                    </div>
                @endif
            @endif
            {{$slot}}
        </div>
        <div id="snackbar"><div>
    </main>
</div>
