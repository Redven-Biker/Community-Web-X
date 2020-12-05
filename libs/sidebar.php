<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span class="text-main-1">Notification</span></h4>
    <div class="nk-widget-content">
        <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM notification_right');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
        <div class="server-sidebar">
            <h3 class="description-notification-sidebar"><?php echo $data['description']; ?></h3>
        </div>
        <?php
    }
    $reponse->closeCursor(); // Complete query ?>
    </div>
</div>
<?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM servers_top');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {

                                $content = json_decode(file_get_contents("http://".$data['ip'].":".$data['port']."/info.json"), true);
                                if($content):
                                    $gta5_players = file_get_contents("http://".$data['ip'].":".$data['port']."/players.json");
                                    $content = json_decode($gta5_players, true);
                                    $pl_count = count($content);
                                endif;
                        ?>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span class="text-main-1">Server</span></h4>
    <div class="nk-widget-content">
        <div class="server-sidebar">
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
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span class="text-main-1">Donate</span></h4>
    <div class="nk-widget-content">
        <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM donate');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
        <div class="donate-sidebar">
            <img src="<?php echo $data['logo']; ?>" width="200">
            <h3 class="donate-description-sidebar"><?php echo $data['name']; ?></h3>
            <a href="<?php echo $data['url']; ?>" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Donate</a>
        </div>
        <div class="nk-gap-1"></div>
        <?php
    }
    $reponse->closeCursor(); // Complete query ?>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span class="text-main-1">Links</span></h4>
    <div class="nk-widget-content">
        <div class="donate-sidebar">
            <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM links');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
            <h3 class="text-link-sidebar"><?php echo $data['name']; ?> <a href="<?php echo $data['url']; ?>"
                    class="nk-btn nk-btn-rounded nk-btn-color-main-1">Open</a>
            </h3>
            <?php
    }
    $reponse->closeCursor(); // Complete query ?>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span class="text-main-1">Vote</span></h4>
    <div class="nk-widget-content">
        <div class="donate-sidebar">
            <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM vote');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
            <a href="<?php echo $data['url']; ?>"
                class="nk-btn nk-btn-rounded nk-btn-color-main-5"><?php echo $data['name']; ?></a>
            <div class="space-vote"></div>
            <?php
    }
    $reponse->closeCursor(); // Complete query ?>
        </div>
    </div>
</div>

</aside>
</div>
</div>
</div>
<div class="nk-gap-2"></div>