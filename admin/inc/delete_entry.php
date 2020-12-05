<?php
include( "config.php" );

if(isset($_POST['deleteusers']) and is_numeric($_POST['deleteusers']))
{
  $id = $_POST['deleteusers'];
  $count=$bdd->prepare("DELETE FROM users WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-users.php');
};

if(isset($_POST['deletenews']) and is_numeric($_POST['deletenews']))
{
  $id = $_POST['deletenews'];
  $count=$bdd->prepare("DELETE FROM news WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-news.php');
};

if(isset($_POST['deleteproducts']) and is_numeric($_POST['deleteproducts']))
{
  $id = $_POST['deleteproducts'];
  $count=$bdd->prepare("DELETE FROM products WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-products.php');
};

if(isset($_POST['deletedevlog']) and is_numeric($_POST['deletedevlog']))
{
  $id = $_POST['deletedevlog'];
  $count=$bdd->prepare("DELETE FROM devlog WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-devlog.php');
};

if(isset($_POST['deleteservers']) and is_numeric($_POST['deleteservers']))
{
  $id = $_POST['deleteservers'];
  $count=$bdd->prepare("DELETE FROM servers WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-servers.php');
};

if(isset($_POST['deletenotificationright']) and is_numeric($_POST['deletenotificationright']))
{
  $id = $_POST['deletenotificationright'];
  $count=$bdd->prepare("DELETE FROM notification_right WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-notification-right.php');
};

if(isset($_POST['deletenotificationsidebar']) and is_numeric($_POST['deletenotificationsidebar']))
{
  $id = $_POST['deletenotificationsidebar'];
  $count=$bdd->prepare("DELETE FROM notification_sidebar WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-notification-sidebar.php');
};

if(isset($_POST['deleteserverstop']) and is_numeric($_POST['deleteserverstop']))
{
  $id = $_POST['deleteserverstop'];
  $count=$bdd->prepare("DELETE FROM servers_top WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-servers-top.php');
};

if(isset($_POST['deletedonate']) and is_numeric($_POST['deletedonate']))
{
  $id = $_POST['deletedonate'];
  $count=$bdd->prepare("DELETE FROM donate WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-donate.php');
};

if(isset($_POST['deletelinks']) and is_numeric($_POST['deletelinks']))
{
  $id = $_POST['deletelinks'];
  $count=$bdd->prepare("DELETE FROM links WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-links.php');
};

if(isset($_POST['deletevote']) and is_numeric($_POST['deletevote']))
{
  $id = $_POST['deletevote'];
  $count=$bdd->prepare("DELETE FROM vote WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../view-votes.php');
};

if(isset($_POST['deletesocial']) and is_numeric($_POST['deletesocial']))
{
  $id = $_POST['deletesocial'];
  $count=$bdd->prepare("DELETE FROM social WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../social.php');
};
?>