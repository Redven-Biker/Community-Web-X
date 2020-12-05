<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO notification_sidebar (description) VALUES(?)');
$req->execute(array($_POST['description']));

// Redirect user back to the add criminal page
header('Location: view-notification-sidebar.php');

?>