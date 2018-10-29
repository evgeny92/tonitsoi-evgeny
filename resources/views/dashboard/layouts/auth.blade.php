<!DOCTYPE html>
<html lang="en">

@include('dashboard.partials.header')

<body class="bg-dark">

<div class="container">
    @yield('content')
</div>

@include('dashboard.partials.scripts')

</body>

</html>