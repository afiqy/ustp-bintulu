@props(['class' => '', 'onload' => ''])
<body class="{{ $class }}" onload="{{ $onload }}">
    <div id="{{ $attributes['data-main-id'] }}">
        @yield('page-topnav')
        @yield('page-sidebar')
        {{$slot}}
    </div>
    @include('layouts.scripts')
</body>