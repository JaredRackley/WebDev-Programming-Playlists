<?php
session_start();
$heroku = true;

if (!empty($_POST)) {
  $admin_login = $_POST["admin_login"];
  $admin_password = $_POST["admin_password"];
  $admin_encryption_key = $_POST["admin_key"];

  if ($admin_login == "jaredrackley@dmin" && $admin_password == "jaredistheroot123" && $admin_encryption_key == "8d9ca0bdbc4ab6bc180d0fc3e6e21711892708cdb260c16ffb4a6923a06fbfd6") {
    $_SESSION["admin_logged_in"] = true;
  }

  if ($_SESSION['admin_logged_in']) {
    if ($heroku) {
      header("Location:https://programmingplaylists.herokuapp.com/");
    } else {
      header("Location:http://cs401fp/");
    }
    exit();
  } else {
    if ($heroku) {
      header("Location:https://programmingplaylists.herokuapp.com/account/adminlogin.php");
    } else {
      header("Location:http://cs401fp/account/adminlogin.php");
    }
    exit();
  }
}