<?php include('libs/header.php'); ?>

<div class="nk-main">
    <?php include('libs/notification-sidebar.php'); ?>
    <div class="nk-gap-1"></div>
    <h3 class="title-shop">Servers</h3>
    <div class="container">
        <div class="row vertical-gap">
            <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM servers');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {

                                $content = json_decode(file_get_contents("http://".$data['ip'].":".$data['port']."/info.json"), true);
                                if($content):
                                    $gta5_players = file_get_contents("http://".$data['ip'].":".$data['port']."/players.json");
                                    $content = json_decode($gta5_players, true);
                                    $pl_count = count($content);
                                endif;
                        ?>
            <div class="col-lg-4">
                <div class="box-shop">
                    <div class="nk-feature-cont text-center">
                        <img src="<?php echo $data['logo']; ?>" width="110">
                        <h3 class="name-server-sidebar"><span class="text-main-1"><?php echo $data['name']; ?></span>
                        </h3>

                        <a href="#" id="exampleModal"
                            class="nk-btn nk-btn-rounded nk-btn-color-main-1 btn-ip-servers"><?php echo $data['ip']; ?>:<?php echo $data['port']; ?></a>
                        <h3 class="status-server-sidebar">Players Online :
                            <?php echo $pl_count ?>/<?php echo $data['max_players']; ?></h3>
                    </div>
                </div>
            </div>
            <?php
            
    }
    $reponse->closeCursor(); // Complete query ?>
        </div>
    </div>
    <div class="nk-gap-1"></div>
</div>
<?php include('libs/footer.php'); ?>