<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Kanakku - Bootstrap Admin HTML Template</title>
         
        <!-- Favicon -->
        <link rel="shortcut icon" href=" assets/img/favicon.png')}}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('template/assets/css/bootstrap.min.css')}}">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('template/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/plugins/fontawesome/css/all.min.css')}}">

        <!-- Feather CSS -->
        <link rel="stylesheet" href="{{asset('template/assets/plugins/feather/feather.css')}}">

        <!-- Datepicker CSS -->
        <link rel="stylesheet" href="{{asset('template/assets/css/bootstrap-datetimepicker.min.css')}}">

        <!-- Datatables CSS -->
        <link rel="stylesheet" href="{{asset('template/assets/plugins/datatables/datatables.min.css')}}">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{asset('template/assets/plugins/select2/css/select2.min.css')}}">


        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}">
    </head>
    <body>


        <!-- Main Wrapper -->
        <div class="main-wrapper">

            <!-- Header -->
            <div class="header header-one">

                <!-- Sidebar Toggle -->
                <a href="javascript:void(0);" id="toggle_btn">
                    <span class="toggle-bars">
                        <span class="bar-icons"></span>
                        <span class="bar-icons"></span>
                        <span class="bar-icons"></span>
                        <span class="bar-icons"></span>
                    </span>
                </a>
                <!-- /Sidebar Toggle -->


                <!-- Mobile Menu Toggle -->
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fas fa-bars"></i>
                </a>
                <!-- /Mobile Menu Toggle -->

                <!-- Header Menu -->
                <ul class="nav nav-tabs user-menu">
                    <!-- Flag -->
                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                            <img src="assets/img/flags/us1.png" alt="" height="20"><span>English</span>
                        </a>

                    </li>
                    <!-- /Flag -->



                    <li class="nav-item dropdown  flag-nav dropdown-heads">

                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="profile.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="profile.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-03.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="profile.html">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="profile.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-04.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="profile.html">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="notifications.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="win-maximize">
                            <i class="fe fe-maximize"></i>
                        </a>
                    </li>
                    <!-- User Menu -->
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{asset('template/assets/img/profiles/avatar-07.jpg')}}" alt="img" class="profilesidebar">
                                <span class="animate-circle"></span>
                            </span>
                            <span class="user-content">
                                <span class="user-details">User</span>
                                <span class="user-name">{{Session::get('username')}}</span>
                            </span>
                        </a>

                    </li>
                    <!-- /User Menu -->

                </ul>

                <!-- /Header Menu -->

            </div>
            <!-- /Header -->
