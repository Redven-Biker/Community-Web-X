<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO servers (name, ip, port, max_players, logo) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['ip'], $_POST['port'], $_POST['max_players'], $_POST['logo']));

// Redirect user back to the add criminal page
header('Location: view-servers.php');

?>