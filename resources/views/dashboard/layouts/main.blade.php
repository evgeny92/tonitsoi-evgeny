<!DOCTYPE html>
<html lang="en">

@include('dashboard.partials.header')

<body id="page-top">

@include('dashboard.partials.navigation')

<div id="wrapper">

    <!-- Sidebar -->
   @include('dashboard.partials.sidebar')

    <div id="content-wrapper">

        <div class="container-fluid">
            <!-- Icon Cards-->
            @yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('dashboard.partials.footer')

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
@include('dashboard.partials.scroll_top')

<!-- Logout Modal-->
@include('dashboard.partials.modal_logout')

@include('dashboard.partials.scripts')

</body>

</html>