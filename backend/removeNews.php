<?php

require('../config/connection.php');
session_start();

$connect = new dbConnect();

$db = $connect->dbConnection();

$id = trim($_GET['id']);
$type = trim($_GET['type']);


$stm=$db->prepare("DELETE FROM news WHERE nid = '$id'");
if ($stm->execute()) {
  header("location:../dashboard/$type.php?success=Successfully removed News");
}