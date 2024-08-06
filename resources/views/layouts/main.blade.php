<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>K - Fastwork</title>

    <!-- Global stylesheets -->
    <link href="/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
    <link href="/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/assets_2/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/assets/js/jquery/jquery.min.js"></script>
    <script src="/assets/js/vendor/forms/selects/select2.min.js"></script>
    <script src="/assets/js/vendor/notifications/sweet_alert.min.js"></script>
    <script src="/assets/js/vendor/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/assets/js/vendor/ui/moment/moment.min.js"></script>
    <script src="/assets/js/vendor/pickers/datepicker.min.js"></script>
    <script src="/assets/js/vendor/media/glightbox.min.js"></script>
    <script type="text/javascript" src="/assets/js/vendor/pickers/daterangepicker.js"></script>

    <script src="/assets/demo/pages/extra_sweetalert.js"></script>
    <script src="/assets/demo/pages/form_select2.js"></script>
    <script src="/assets_2/js/app.js"></script>
    <script src="/assets/demo/pages/datatables_basic.js"></script>
    <script src="/assets/demo/pages/gallery_library.js"></script>
    <!-- /theme JS files -->

</head>

<!-- Main navbar -->
@include('layout.navbar')
<!-- /main navbar -->

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    @include('layout.sidebar')
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            @stack('header')
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">

                @yield('content')

            </div>
            <!-- /content area -->

            <!-- Footer -->
            @include('layout.footer')
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

<!-- SA -->
@include('layout.notification')
<!-- /SA -->

</body>

@stack('scripts')

</html>
