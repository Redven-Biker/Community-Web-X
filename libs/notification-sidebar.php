<div class="size-notification">
    <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM notification_sidebar');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
    <p class="text-notification"><?php echo $data['description']; ?></p>
    <?php
    }
    $reponse->closeCursor(); // Complete query ?>
</div>