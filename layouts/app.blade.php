<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.header')
    <body class="d-flex flex-column min-vh-100">
        <x-app-layout>
            {{-- <x-body class="sb-nav-fixed" data-main-id="layoutSidenav"> --}}
            <x-body>
                {{-- @if(Auth::check()) --}}
                    @include('layouts.top-nav')
                {{-- @else
                    @include('layouts.general.top-nav')
                @endif --}}
                @yield('page_sidenav')
                <x-content id="user_content" data-content-class="container-fluid vh-100 px-0">
                    <div class="mt-3 pt-3 px-4">
                        @yield('content')
                    </div>
                    @include('layouts.footer')
                    {{-- @if(app('request')->route()->getName() != 'donation')
                        @include('layouts.general.footer')
                    @else
                        <div id="layoutSidenav_content" style="top: auto !important;min-height: 29rem !important; overflow-x: clip;overflow-y: unset;">
                            @include('layouts.general.footer')
                        </div>
                    @endif --}}
                </x-content>
            </x-body>
        </x-app-layout>
    </body>
</html>