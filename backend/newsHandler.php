<?php

require('../config/connection.php');
session_start();

$connect = new dbConnect();

$db = $connect->dbConnection();

$title = trim($_POST['title']);
$news = trim($_POST['news']);
$type = trim($_POST['newsType']);
$images = $_FILES['images'];

if (empty($title) || empty($news)) {
  header("location:../dashboard/news.php?error=News Title and News must be Insert");
  exit();
}
$path="../news/images";
!is_dir($path)&& mkdir($path, 0755, true);
if (isset($images)) {
  $newImagePath=$path.$images['name'];
  move_uploaded_file($images['tmp_name'], $newImagePath);
}



$stm = $db->prepare("INSERT INTO news VALUES('', '$title', '$news', '$type', '', '$newImagePath')");
if ($stm->execute()) {
  header("location:../dashboard/news.php?success=Successfully inserted News");
}
