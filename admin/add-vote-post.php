<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO vote (name, url) VALUES(?, ?)');
$req->execute(array($_POST['name'], $_POST['url']));

// Redirect user back to the add criminal page
header('Location: view-votes.php');

?>