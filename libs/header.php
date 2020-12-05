<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM website ORDER BY id DESC LIMIT 30');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
    <title><?php echo $data['website_name']; ?></title>
    <?php
    }
    $reponse->closeCursor(); // Complete query ?>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script defer src="./assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="./assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <link rel="stylesheet" href="./assets/vendor/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="./assets/vendor/flickity/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="./assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/vendor/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="./assets/css/communitywebx.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="nk-header nk-header-opaque">
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="index-2.html" class="nk-nav-logo">
                        <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM website');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
                        <img src="<?php echo $data['logo']; ?>" width="90">
                        <?php
    }
    $reponse->closeCursor(); // Complete query ?>
                    </a>
                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="index.php"> Home </a>
                        </li>
                        <li>
                            <a href="news.php"> News </a>
                        </li>
                        <li>
                            <a href="shop.php"> Shop </a>
                        </li>
                        <li>
                            <a href="devlog.php"> Devlog </a>
                        </li>
                        <li>
                            <a href="servers.php"> Servers </a>
                        </li>
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>