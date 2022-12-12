<?php
include("server.php");
$email = $_SESSION['email'];
$query = $db->query("SELECT * FROM users WHERE email='$email'");
$row = $query->fetch_array();
$username = $row['username'];
if (!(isset($username))) {
  header('Location:./login.php');
}
?>