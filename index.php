<?php include('libs/header.php'); ?>
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index-2.html" class="nk-nav-logo">
                <img src="assets/images/logo.svg" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="nk-main">
    <?php include('libs/notification-sidebar.php'); ?>
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="nk-image-slider">
            <div class="nk-image-slider-item">
                <img src="assets/images/show/slide.jpg" alt="" class="nk-image-slider-img"
                    data-thumb="assets/images/slide-1-thumb.jpg">
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-4">
                <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="assets/images/icon-mouse.svg" alt="">
                    </div>
                    <div class="nk-feature-cont">
                        <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM servers');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
                        <h3 class="nk-feature-title"><a><span class="text-main-1"><?php 
    $reponse = $bdd->query('SELECT COUNT(*) total FROM servers');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></span> Servers</a></h3>
                        <?php
    }
    $reponse->closeCursor(); // Complete query ?>
                        <h4 class="nk-feature-title text-main-1"><a href="#"></a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="assets/images/icon-gamepad.svg" alt="">
                    </div>
                    <div class="nk-feature-cont">
                        <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM website');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
                        <h3 class="nk-feature-title"><a href="<?php echo $data['discord']; ?>">Join Discord</a></h3>
                        <?php
    }
    $reponse->closeCursor(); // Complete query ?>
                        <h4 class="nk-feature-title text-main-1"><a href="#"></a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="assets/images/icon-gamepad-2.svg" alt="">
                    </div>
                    <div class="nk-feature-cont">
                        <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM website');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
                        <h3 class="nk-feature-title"><a href="<?php echo $data['youtube']; ?>">Youtube</a></h3>
                        <?php
    }
    $reponse->closeCursor(); // Complete query ?>
                        <h4 class="nk-feature-title text-main-1"><a href="#"></a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- START: Paragraphs -->
                <h3 class="text-main-1">DESCRIPTION</h3>
                <div class="nk-gap"></div>
                <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM website');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
                <p class="text-white"><?php echo $data['description']; ?></p>
                <?php
    }
    $reponse->closeCursor(); // Complete query ?>
                <!-- END: Paragraphs -->
            </div>
        </div>
    </div>
    <div class="nk-gap-4"></div>
    <?php include('libs/footer.php'); ?>