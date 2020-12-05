<?php include('libs/header.php'); ?>
<div class="nk-main">
    <?php include('libs/notification-sidebar.php'); ?>
    <div class="nk-gap-1"></div>
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">
                <h3 class="text-news">News</h3>
                <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM news ORDER BY id DESC LIMIT 30');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
                <div class="nk-team">
                    <div class="nk-team-cont">
                        <h3 class="h5 mb-20"><span class="text-main-1"><?php echo $data['title']; ?></span></h3>
                        <h4 class="h6 mb-10"><?php echo $data['description']; ?></h4>
                        <a class="date-news"><?php echo $data['date']; ?></a>
                    </div>
                </div>
                <?php
    }
    $reponse->closeCursor(); // Complete query ?>
            </div>
            <div class="col-lg-4">
                <?php include('libs/sidebar.php'); ?>
                <?php include('libs/footer.php'); ?>