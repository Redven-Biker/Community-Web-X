<?php include('libs/header.php'); ?>

<div class="nk-main">
    <?php include('libs/notification-sidebar.php'); ?>
    <div class="nk-gap-1"></div>
    <h3 class="title-shop">Shop</h3>
    <div class="container">
        <div class="row vertical-gap">
            <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM products');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
            <div class="col-lg-4">
                <div class="box-shop">
                    <div class="nk-feature-cont text-center">
                        <h3><span class="text-main-1"><?php echo $data['name']; ?></span></h3>
                        <div class="information-shop"><span><?php echo $data['label_1']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_2']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_3']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_4']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_5']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_6']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_7']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_8']; ?></span></div>
                        <div class="information-shop"><span><?php echo $data['label_9']; ?></span></div>
                    </div>
                    <div class="price-shop text-main-1"><span><?php echo $data['price']; ?></span></div>
                </div>
            </div>
            <?php
    }
    $reponse->closeCursor(); // Complete query ?>
        </div>
        <div class="nk-gap-1"></div>
    </div>
    <?php include('libs/footer.php'); ?>