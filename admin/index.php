<?php
    session_start();







    if (isset($_SESSION['id'])) {
        include('libs/header.php'); echo '
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

        ';
    include("inc/config.php"); {
?>
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-card-four">
        <div class="widget-content">
            <div class="w-content">
                <div class="w-info">
                    <h6 class="value">
                        <?php 
    $reponse = $bdd->query('SELECT COUNT(*) total FROM news');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h6>
                    <p class="">News</p>
                </div>
                <div class="">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                            </path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-card-four">
        <div class="widget-content">
            <div class="w-content">
                <div class="w-info">
                    <h6 class="value">
                        <?php 
    $reponse = $bdd->query('SELECT COUNT(*) total FROM servers');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h6>
                    <p class="">Servers</p>
                </div>
                <div class="">
                    <div class="w-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-hard-drive">
                            <line x1="22" y1="12" x2="2" y2="12"></line>
                            <path
                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                            </path>
                            <line x1="6" y1="16" x2="6.01" y2="16"></line>
                            <line x1="10" y1="16" x2="10.01" y2="16"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-card-four">
        <div class="widget-content">
            <div class="w-content">
                <div class="w-info">
                    <h6 class="value">1.0</h6>
                    <p class="">Version</p>
                </div>
                <div class="">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-alert-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-card-four">
        <div class="widget-content">
            <div class="w-content">
                <div class="w-info">
                    <h6 class="value">
                        <?php 
    $reponse = $bdd->query('SELECT COUNT(*) total FROM products');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h6>
                    <p class="">Product shop</p>
                </div>
                <div class="">
                    <div class="w-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-card-four">
        <div class="widget-content">
            <div class="w-content">
                <div class="w-info">
                    <h6 class="value">
                        <?php 
    $reponse = $bdd->query('SELECT COUNT(*) total FROM devlog');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h6>
                    <p class="">Devlog</p>
                </div>
                <div class="">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                            </path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-card-four">
        <div class="widget-content">
            <div class="w-content">
                <div class="w-info">
                    <h6 class="value">7</h6>
                    <p class="">Plugins</p>
                </div>
                <div class="">
                    <div class="w-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
                                      }
$reponse->closeCursor(); // Complete query
echo '

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-chart-three">
        <div class="widget-heading">
            <div class="">
                <h5 class="">PATCH NOTE</h5>
            </div>
        </div>

        <div class="widget-content">
            <div class="box">
                <a href="https://discord.gg/QW4TDJP"><button class="btn btn-lg btn-outline-success mb-4">Join
                        Discord</button></a>
                <h1 class="title-box">Patch V1.0.0</h1>
                <h1 class="date-box">2020/04/2020</h1>
                <div class="space"></div>
                <p class="description-box">Add plugins FiveM</p>
                <div class="space"></div>
                <p class="description-box">Add plugins FiveM</p>
                <div class="space"></div>
            </div>
        </div>
    </div>
</div>

</div>

</div>

<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © 2020 <a target="_blank" href="http://xlife.fr/">XLife</a>, All
            rights reserved.</p>
    </div>
</div>
</div>

</div>
';
} else {
header("Location: login.php");
}
?>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
$(document).ready(function() {
    App.init();
});
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_2.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>