<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('include.head')
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
