<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO donate (name, url, logo) VALUES(?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['url'], $_POST['logo']));

// Redirect user back to the add criminal page
header('Location: view-donate.php');

?>