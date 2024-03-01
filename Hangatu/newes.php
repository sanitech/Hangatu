<?php
require('config/connection.php');

$connect = new dbConnect();

$db = $connect->dbConnection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/drop.css" />
</head>

<body>
  <div class="main-container">
    <nav>
      <div class="navbar">
        <a href="index.html">
          <div class="logo">Hangatu</div>
        </a>
        <ul class="togglecontainer">
          <li><a href="contact.html">Gaaffii</a></li>
          <li><a href="neweso.php">Oduu</a></li>

          <li class="select">
            <select class="lanSelector" onchange="languageHandler(event)">
              <option>Language <i class="bi bi-chevron-down"></i></option>
            </select>
          </li>
        </ul>
        <li class="toggle" onclick="toggleHandler()">
          <i class="bi bi-list"></i>
        </li>
      </div>
    </nav>
    <main>
      <div class="cont">
        <div class="cards-news">

          <h1 class="card-title">News</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
            possimus dolore natus fugit eveniet, earum impedit ab unde iste
            voluptatibus temporibus officiis facilis ad officia sapiente porro
            praesentium ipsam ut.
          </p>
        </div>
      </div>
      <div class="more">
        <h3>Upcoming Events</h3>
        <ul>
          <li><a href="#"> iracha festival </a></li>
          <li><a href="#"> iracha festival </a></li>
          <li><a href="#"> iracha festival </a></li>
          <li><a href="#"> iracha festival </a></li>
        </ul>
      </div>
    </main>
  </div>
</body>

</html>