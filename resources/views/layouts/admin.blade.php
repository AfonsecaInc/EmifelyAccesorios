<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    {!! Html::style('melody/vendors/iconfonts/font-awesome/css/all.min.css') !!}
    {!! Html::style('melody/vendors/css/vendor.bundle.base.css') !!}
    {!! Html::style('melody/vendors/css/vendor.bundle.addons.css') !!}
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {!! Html::style('melody/css/style.css') !!}
    <style>
    body {
        font-size: 15px !important;
    }

    .tarjeta {
        font-size: 15px !important;
        /* background: #ffffff; */
        /* background: rgb(250, 219, 216); */
        /* background: linear-gradient(145deg, #f0f0f0, #cacaca); */
        /* background: linear-gradient(0deg, rgba(250, 219, 216, 1) 0%, rgba(232, 248, 245, 1) 100%); */
        /* box-shadow: 21px 21px 23px #a7a1ab,
            -21px -21px 23px #ffffff; */
        box-shadow: 8px 8px 6px #5a5a5a,
            -8px -8px 6px #cacaca;
        background: linear-gradient(-45deg, rgba(255, 255, 255, .2) 70%, rgba(255, 255, 255, .05) 60%, rgba(255, 255, 255, .05) 80%, rgba(69, 209, 127, .07) 80%);
    }

    .tarjeta2 {
        font-size: 15px !important;
        /* background: rgb(255, 255, 255) !important; */
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(250, 219, 216, 1) 0%, rgba(232, 248, 245, 1) 60%) !important;
    }

    .tarjeta3 {
        font-size: 15px !important;
        /* background: rgb(255, 255, 255) !important; */
        background: linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(250, 219, 216, 1) 0%, rgba(232, 248, 245, 1) 60%) !important;
    }

    .tarjeta4 {
        font-size: 15px !important;
        /* background: rgb(255, 255, 255) !important; */
        background: linear-gradient(270deg, rgba(255, 255, 255, 1) 0%, rgba(250, 219, 216, 1) 0%, rgba(232, 248, 245, 1) 60%) !important;
    }

    .content-wrapper {
        background: linear-gradient(0deg, rgba(250, 219, 216, 1) 0%, rgba(232, 248, 245, 1) 100%);
    }
    </style>
    @yield('styles')
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo">
                    <img src="{{asset('melody/images/logo/log.png')}}" alt="logo" class="rounded" /></a>
                <a class="navbar-brand brand-logo-mini" href="index-2.html"><img
                        src="{{asset('melody/images/logo/log.png')}}" alt="logo" /></a>
            </div>
            <div class="tarjeta3 navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item nav-search d-none d-md-flex">
                        <div class="nav-link">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    @yield('create')
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('melody/images/faces/face16.jpg')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item">
                                <i class="fas fa-cog text-primary"></i>
                                Settings
                            </a>  --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Logout" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off text-primary"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @yield('options')
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            @yield('preference')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('layouts._nav')
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer tarjeta4">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Todos los derechos reservados.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a
                                href="https://www.youtube.com/channel/UCMWSlUcDJS00-5pmicciZ_w">Emifely Accesorios</a>
                            </> <i class="far fa-heart text-danger"></i></span>
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
    {!! Html::script('melody/vendors/js/vendor.bundle.base.js') !!}
    {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    {!! Html::script('melody/js/off-canvas.js') !!}
    {!! Html::script('melody/js/hoverable-collapse.js') !!}
    {!! Html::script('melody/js/misc.js') !!}
    {!! Html::script('melody/js/settings.js') !!}
    {!! Html::script('melody/js/todolist.js') !!}
    <!-- endinject -->
    <!-- Custom js for this page-->
    {!! Html::script('melody/js/dashboard.js') !!}
    <!-- End custom js for this page-->
    @yield('scripts')

</body>


</html>