<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO servers_top (name, ip, port, logo, max_players) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['ip'], $_POST['port'], $_POST['logo'], $_POST['max_players']));

// Redirect user back to the add criminal page
header('Location: view-servers-top.php');

?>