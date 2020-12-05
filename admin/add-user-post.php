<?php
// Calls for the config file
include( "inc/config.php" );


$pass = sha1($_POST['pass']);
$username = htmlspecialchars($_POST['username']);

if($pass) {
    $insertmbr = $bdd->prepare("INSERT INTO users(username, pass) VALUES(?, ?)");
    $insertmbr->execute(array($username, $pass));
 }


// Redirect user back to the add criminal page
header('Location: view-users.php');

?>