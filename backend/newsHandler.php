<?php

require('../config/connection.php');
session_start();

$connect = new dbConnect();

$db = $connect->dbConnection();

$title = trim($_POST['title']);
$news = trim($_POST['news']);
$type = trim($_POST['newsType']);

if (empty($title) || empty($news)) {
  header("location:../dashboard/news.php?error=News Title and News must be Insert");
  exit();
}



$stm = $db->prepare("INSERT INTO news VALUES('', '$title', '$news', '$type', '')");
if ($stm->execute()) {
  header("location:../dashboard/news.php?success=Successfully inserted News");
}
