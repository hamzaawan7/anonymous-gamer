<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anonymus Gamer </title>
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>
</head>
<body>
@include('layouts.nav')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>

            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border me-3"></div>
                Dark
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                <div class="img-ss rounded-circle bg-light border me-3"></div>
                Light
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
            </div>
        </div>
    </div>
    @include('layouts.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">

                            <div>
                                <div class="btn-wrapper">
                                    <a href="{{ route('dashboard') }}" class="btn btn-primary text-white me-0 "
                                       style="background-color: #303030; color: burlywood;"><i
                                            class="mdi mdi-keyboard-backspace"></i> Back</a>
                                </div>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © {{ date('Y') }}. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
<!-- container-scroller -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@yield('scripts')
<!-- plugins:js -->
<script src="{{ asset('admin-assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('js/bootstrap-tags.min.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin-assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/progressbar.js/progressbar.min.js') }}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('admin-assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin-assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin-assets/js/template.js') }}"></script>
<script src="{{ asset('admin-assets/js/settings.js') }}"></script>
<script src="{{ asset('admin-assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('admin-assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
<script src="{{ asset('admin-assets/js/Chart.roundedBarCharts.js') }}"></script>

<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin-assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/file-upload.js') }}"></script>
<script src="{{ asset('admin-assets/js/typeahead.js') }}"></script>
<script src="{{ asset('admin-assets/js/select2.js') }}"></script>
</body>

</html>
