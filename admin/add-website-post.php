<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO website (website_name, logo, discord, youtube, description) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['website_name'], $_POST['logo'], $_POST['discord'], $_POST['youtube'], $_POST['description']));

// Redirect user back to the add criminal page
header('Location: website.php');

?>