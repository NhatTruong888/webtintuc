<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("adminmart-master/assets/images/favicon.png") }}>
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{ asset("adminmart-master/assets/extra-libs/c3/c3.min.css") }}" rel="stylesheet">
    <link href="{{ asset("adminmart-master/assets/libs/chartist/dist/chartist.min.css") }}" rel="stylesheet">
    <link href="{{ asset("adminmart-master/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css") }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset("adminmart-master/dist/css/style.min.css") }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md"  >
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand" >
                    <!-- Logo icon -->
                    <a href="index.html">
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{ asset("adminmart-master/assets/images/logo-icon.png")}}" alt="homepage"
                                 class="dark-logo"/>
                            <!-- Light Logo icon -->
                            <img src="{{ asset("adminmart-master/assets/images/logo-icon.png")}}" alt="homepage"
                                 class="light-logo"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text"  >
                                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style="border:none;color:#5f76e8;font-size:21px;margin-right:-30px">
                                                {{ __('Dashboard Admin') }}
                                            </x-jet-nav-link>
                            </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                   data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <!-- Notification -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                           id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" style="margin-top: 35px;">
                            <span><i data-feather="bell" class="svg-icon"></i></span>
                            <span class="badge badge-primary notify-no rounded-circle" style="width:1px;height:1px;background-color: red;margin-top:-25px">.</span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                            <ul class="list-style-none">
                                <li>
                                    <div >
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                           class="message-item d-flex align-items-center  px-3 py-2" >
                                            <div style="margin-bottom:-65px">
                                                <div class="p-6  border-b border-gray-200" id="notify" style="width:500px;height:100%">

                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->

                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                        <strong style="font-weight: bold;">Check all notifications</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Notification -->
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 35px;">
                            <i data-feather="settings" class="svg-icon" style="margin-top: 25px;"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="javascript:void(0)">
                            <div class="customize-input">
                                <select
                                    class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                    <option selected>EN</option>
                                    <option value="1">AB</option>
                                    <option value="2">AK</option>
                                    <option value="3">BE</option>
                                </select>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item d-none d-md-block" style="margin-right:50px">
                        <a class="nav-link" href="javascript:void(0)">
                            <form>
                                <div class="customize-input">
                                    <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                           type="search" placeholder="Search" aria-label="Search">
                                    <i class="form-control-icon" data-feather="search"></i>
                                </div>
                            </form>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown" style="width:300px">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset("adminmart-master/assets/images/logo-icon.png")}}" alt="user"
                                 class="rounded-circle"
                                 width="50" style="float:left;margin-top:20px;margin-right:20px">
                            <div class="ml-3 relative" >
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                            <span >
                                    <span type="button"  style="background-color: #F9FBFD;color: #b8c3d5;font-size:17px" class="inline-flex items-center px-3 py-2   text-sm leading-4 font-medium rounded-md text-gray-500      hover:text-gray-700 focus:outline-none transition">
                                        Hello,{{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content"><!-- Account Management -->
                                            <form method="POST" action="{{ route('logout') }}" >
                                                @csrf
                                                <x-jet-dropdown-link style="color: #6c757d;margin-left:15px;margin-top:-20px" href="{{ route('logout') }}"
                                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    <i data-feather="power" class="svg-icon mr-2 ml-1" ></i>
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>

                                            </form>

                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link style="color: #6c757d" href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();"  >
                                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>

                            </form>
                            <div class="dropdown-divider"></div>
                            <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                    Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6" >
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('dashboard')}}"
                                                 aria-expanded="false"><i data-feather="home"
                                                                          class="feather-icon"></i><span
                                class="hide-menu">Admin</span></a></li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="http://localhost:8000/user"
                                                aria-expanded="false"><i data-feather="tag"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Quản lí nhân viên
                                </span></a>
                    </li>

                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('category.index')}}"
                                                aria-expanded="false"><i data-feather="tag"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Quản lí danh mục
                                </span></a>
                    </li>

                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="{{route('post.index')}}"
                                                aria-expanded="false"><i data-feather="message-square"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Quản lí bài viết</span></a></li>
                    <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="{{ route('profile.show') }}"
                                                aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                                class="hide-menu">Cài đặt tài khoản</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

    <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset("adminmart-master/assets/libs/jquery/dist/jquery.min.js") }}"></script>
<script src="{{ asset("adminmart-master/assets/libs/popper.js/dist/umd/popper.min.") }}"></script>
<script src="{{ asset("adminmart-master/assets/libs/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<!-- apps -->
<!-- apps -->
<script src="{{ asset("adminmart-master/dist/js/app-style-switcher.js") }}"></script>
<script src="{{ asset("adminmart-master/dist/js/feather.min.js") }}"></script>
<script
    src="{{ asset("adminmart-master/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js") }}"></script>
<script src="{{ asset("adminmart-master/dist/js/sidebarmenu.js") }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset("adminmart-master/dist/js/custom.min.js") }}"></script>
<!--This page JavaScript -->
<script src="{{ asset("adminmart-master/assets/extra-libs/c3/d3.min.js") }}"></script>
<script src="{{ asset("adminmart-master/assets/extra-libs/c3/c3.min.js") }}"></script>
<script src="{{ asset("adminmart-master/assets/libs/chartist/dist/chartist.min.js") }}"></script>
<script
    src="{{ asset("adminmart-master/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js") }}"></script>
<script src="{{ asset("adminmart-master/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js") }}"></script>
<script src="{{ asset("adminmart-master/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js") }}"></script>
<script src="{{ asset("adminmart-master/dist/js/pages/dashboards/dashboard1.min.js") }}"></script>


</body>

</html>
