<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
    <body>
    <x-app-layout>
        <x-body class="sb-nav-fixed" data-main-id="layoutSidenav">
        @include('layouts.admin.top-nav')
        
        @include('layouts.admin.sidebar')
        <x-content id="layoutSidenav_content" data-content-class="container-fluid">
            <main>                
                @yield('content')
            </main>
        </x-content>
        </x-body>
    </x-app-layout>
</body>
        @include('layouts.footer')
</html>