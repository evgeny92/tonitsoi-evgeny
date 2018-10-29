<!doctype html>
<html lang="en">
<head>
    @include('partials.header')
</head>
<body>
    @include('partials.navigation')

    @yield('content')

    @include('partials.footer')
    @include('partials.contact_modal')
    @include('partials.scripts')
</body>
</html>