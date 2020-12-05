<footer class="nk-footer">
    <div class="nk-copyright">
        <div class="container">
            <?php 
                            include("./admin/inc/config.php");
                            // Get contents of the lspd table
                            $reponse = $bdd->query('SELECT * FROM website');
                        
                            // Display each entry one by one
                            while ($data = $reponse->fetch()) {
                        ?>
            <div class="nk-copyright-left"> Copyright &copy; 2020 <a href=""><?php echo $data['website_name']; ?></a>
            </div>
            <?php
    }
    $reponse->closeCursor(); // Complete query ?>
        </div>
    </div>
</footer>
</div>
<img class="nk-page-background-top" src="./assets/images/bg-top-3.png" alt="">


<script src="assets/js/communitywebx.min.js"></script>
<script src="assets/js/communitywebx-init.js"></script>
</body>

</html>