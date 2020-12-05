<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="120;url=inc/logout.php" /> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin - XLife </title>
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico" />
    <link href="./assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="./assets/js/loader.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="./plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/custom.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>

    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-text">
                    <a href="index.php" class="nav-link"> ADMIN </a>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">

                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="assets/img/profile-16.jpg" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a href="inc/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> Logout</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>

    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
        </header>
    </div>
    <!--  END NAVBAR  -->


    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                <div class="shadow-bottom"></div>

                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <li class="menu" active>
                        <a href="index.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-target">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#news" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>News</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="news" data-parent="#accordionExample">
                            <li>
                                <a href="view-news.php"> View news </a>
                            </li>
                            <li>
                                <a href="create-news.php"> Create news </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>Product</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="product" data-parent="#accordionExample">
                            <li>
                                <a href="view-products.php"> View Products </a>
                            </li>
                            <li>
                                <a href="create-product.php"> Create Product </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#devlog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>Devlog</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="devlog" data-parent="#accordionExample">
                            <li>
                                <a href="view-devlog.php"> View devlog </a>
                            </li>
                            <li>
                                <a href="create-devlog.php"> Create devlog </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#servers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>Servers</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="servers" data-parent="#accordionExample">
                            <li>
                                <a href="view-servers.php"> View servers </a>
                            </li>
                            <li>
                                <a href="create-server.php"> Create server </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="plugins.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-airplay">
                                    <path
                                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                    </path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>Plugins</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#setting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>Setting</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="setting" data-parent="#accordionExample">
                            <li>
                                <a href="view-users.php"> View Users </a>
                            </li>
                        </ul>
                    </li>


                </ul>

            </nav>

        </div>