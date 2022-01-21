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
    <link rel="stylesheet" href="http://timschlechter.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="trix.css">
    <script type="text/javascript" src="trix.js"></script>
    {{--    <link href="{{ asset('css/create.css') }}" rel="stylesheet">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/table.css') }}">--}}

</head>
<body>

<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo">
                <img src="{{asset('images/logo.jpg')}}" alt="Image" width="150px"/>
            </a>
            <a class="navbar-brand brand-logo-mini">
                <img src="{{asset('images/logo.jpg')}}" alt="Image" width="150px"/>
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">

        <ul class="navbar-nav">
            <a style="color: white; font-size: 20px">
{{--                <i class="mdi mdi-facebook-box ql-color-white" style="color: white; font-size: 20px"></i>--}}
                <input type="button" value="facebook" class="btn btn-primary btn-sm text-white me-0"
                       style="background-color: #303030; color: burlywood;"/>
            </a> &nbsp;&nbsp;&nbsp;
            <a style="color: white; font-size: 20px">
{{--                <i class="mdi mdi-youtube-play ql-color-white" style="color: white; font-size: 20px"></i>--}}
                <input type="button" value="youtube" class="btn btn-primary btn-sm text-white me-0"
                       style="background-color: #303030; color: burlywood;"/>
            </a>&nbsp;&nbsp;&nbsp;
            <a style="color: white; font-size: 20px">
{{--                <i class="mdi mdi-instagram ql-color-white" style="color: white; font-size: 20px"></i>--}}
                <input type="button" value="instagram" class="btn btn-primary btn-sm text-white me-0"
                       style="background-color: #303030; color: burlywood;"/>
            </a>&nbsp;&nbsp;&nbsp;
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block">

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                     aria-labelledby="messageDropdown">
                    <div class="dropdown-divider"></div>

                </div>
            </li>

            <li class="nav-item">
                <form class="search-form" action="#">
                    <i class="icon-search"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                </form>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="icon-mail icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                     aria-labelledby="notificationDropdown">
                    <a class="dropdown-item py-3 border-bottom">
                        <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-alert m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                            <p class="fw-light small-text mb-0"> Just now </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-settings m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                            <p class="fw-light small-text mb-0"> Private message </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-airballoon m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                            <p class="fw-light small-text mb-0"> 2 days ago </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <i class="icon-bell"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                     aria-labelledby="countDropdown">
                    <a class="dropdown-item py-3">
                        <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{ asset('admin-assets/images/faces/face10.jpg') }}" alt="image"
                                 class="img-sm profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                            <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{ asset('admin-assets/images/faces/face12.jpg') }}" alt="image"
                                 class="img-sm profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                            <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{ asset('admin-assets/images/faces/face1.jpg') }}" alt="image"
                                 class="img-sm profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                            <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{ asset('images/logo.jpg') }}"
                         alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="{{ asset('images/logo.jpg') }}" height="100px"
                             width="100px"
                             alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">Anonymous Gamer</p>
                        <p class="fw-light text-muted mb-0"> {{ auth()->user()->name }}</p>
                    </div>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile
                        <span class="badge badge-pill badge-danger">1</span></a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                        Activity</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                    <a class="dropdown-item"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out
                    </a>

                    <form id="logout-form" action="{{ route('admin-logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
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
    <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
                   aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                   aria-controls="chats-section">CHATS</a>
            </li>
        </ul>
        <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                 aria-labelledby="todo-section">
                <div class="add-items d-flex px-3 mb-0">
                    <form class="form w-100">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add
                            </button>
                        </div>
                    </form>
                </div>
                <div class="list-wrapper px-3">
                    <ul class="d-flex flex-column-reverse todo-list">
                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Team review meeting at 3.00 PM
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Prepare for presentation
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Resolve all the low priority tickets due today
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox" checked>
                                    Schedule meeting for next week
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox" checked>
                                    Project review
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                    </ul>
                </div>
                <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                <div class="events pt-4 px-3">
                    <div class="wrapper d-flex mb-2">
                        <i class="ti-control-record text-primary me-2"></i>
                        <span>Feb 11 2018</span>
                    </div>
                    <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                    <p class="text-gray mb-0">The total number of sessions</p>
                </div>
                <div class="events pt-4 px-3">
                    <div class="wrapper d-flex mb-2">
                        <i class="ti-control-record text-primary me-2"></i>
                        <span>Feb 7 2018</span>
                    </div>
                    <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                    <p class="text-gray mb-0 ">Call Sarah Graves</p>
                </div>
            </div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                    <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
                        All</small>
                </div>
                <ul class="chat-list">
                    <li class="list active">
                        <div class="profile"><img src="{{ asset('admin-assets/images/faces/face1.jpg') }}"
                                                  alt="image"><span class="online"></span></div>
                        <div class="info">
                            <p>Thomas Douglas</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">19 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{ asset('admin-assets/images/faces/face2.jpg') }}"
                                                  alt="image"><span class="offline"></span></div>
                        <div class="info">
                            <div class="wrapper d-flex">
                                <p>Catherine</p>
                            </div>
                            <p>Away</p>
                        </div>
                        <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                        <small class="text-muted my-auto">23 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{ asset('admin-assets/images/faces/face3.jpg') }}"
                                                  alt="image"><span class="online"></span></div>
                        <div class="info">
                            <p>Daniel Russell</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">14 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{ asset('admin-assets/images/faces/face4.jpg') }}"
                                                  alt="image"><span class="offline"></span></div>
                        <div class="info">
                            <p>James Richardson</p>
                            <p>Away</p>
                        </div>
                        <small class="text-muted my-auto">2 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{ asset('admin-assets/images/faces/face5.jpg') }}"
                                                  alt="image"><span class="online"></span></div>
                        <div class="info">
                            <p>Madeline Kennedy</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">5 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{ asset('admin-assets/images/faces/face6.jpg') }}"
                                                  alt="image"><span class="online"></span></div>
                        <div class="info">
                            <p>Sarah Graves</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">47 min</small>
                    </li>
                </ul>
            </div>
            <!-- chat tab ends -->
        </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #17181a">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">pages</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-categories-index') }}"> <i class="mdi mdi-apps menu-icon"></i><span
                        class="menu-title">Category </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-posts-index') }}"><i
                        class="mdi mdi-blogger menu-icon"></i><span
                        class="menu-title">Posts </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-reviews-index') }}"><i
                        class="mdi mdi-comment-multiple-outline menu-icon"></i><span class="menu-title">Reviews </span></a>
            </li>
        </ul>
    </nav>
    <!-- partial -->
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
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{ asset('admin-assets/vendors/js/vendor.bundle.base.js') }}"></script>
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

@yield('scripts')
</body>

</html>
