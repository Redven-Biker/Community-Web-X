<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO products (name, label_1, label_2, label_3, label_4, label_5, label_6, label_7, label_8, label_9, price) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['label_1'], $_POST['label_2'], $_POST['label_3'], $_POST['label_4'], $_POST['label_5'], $_POST['label_6'], $_POST['label_7'], $_POST['label_8'], $_POST['label_9'], $_POST['price']));

// Redirect user back to the add criminal page
header('Location: view-products.php');

?>