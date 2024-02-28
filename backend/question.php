<?php

require('../config/connection.php');
session_start();

$connect = new dbConnect();

$db = $connect->dbConnection();

$name = htmlspecialchars(trim($_POST['name']));
$know = htmlspecialchars(trim($_POST['know']));
$question = htmlspecialchars(trim($_POST['question']));
$phone = htmlspecialchars(trim($_POST['phone']));
$newsType = htmlspecialchars(trim($_POST['newsType']));

if (empty($name) || empty($know) || empty($question) || empty($phone)) {
    header("location:../contact.html?error=News Title and News must be Insert");
    exit();
}



$stm = $db->prepare("INSERT INTO contact VALUES('', '$name', '$know', '$question', '$phone', '$newsType')");
if ($stm->execute()) {
    header("location:../contact.html?success=Successfully inserted News");
}
