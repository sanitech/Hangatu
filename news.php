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
          <li><a href="index.html">Home</a></li>
          <!-- <li><a href="#about">About</a></li> -->
          <!-- <li><a href="#contact">Contact</a></li> -->
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
        <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $stm = $db->prepare("SELECT * FROM news WHERE nid = '$id' ORDER BY nid DESC");
          $stm->execute();
          foreach ($stm->fetchAll() as $row) {
            $latestNews=$row['nid'];
        ?>
            <div class="cards-news">
              <img src="<?php echo str_replace('../', '', $row['image']) ?>" alt="" style="width: 100%;" />
              <h1 class="card-title"><?php echo $row['title'] ?></h1>
              <p class="news-desc">
                <?php echo $row['news'] ?>
              </p>
            </div>
        <?php }
        }

        ?>
      </div>
      <div class="more">
        <h3>More</h3>
        <ul style="list-style: none;">
          <?php
            $stm = $db->prepare("SELECT * FROM news ORDER BY nid DESC LIMIT 10");
            $stm->execute();
            foreach ($stm->fetchAll() as $row) {
            if($id==$latestNews) continue;

          ?>
              <li>
                <a href="news.php?id=<?php echo $row['nid'] ?>">
                  <div class="news-card">
                    <img src="<?php echo str_replace('../', '', $row['image']) ?>" alt="" style="width: 100%; heght: 100%" />
                    <div class="newsinfo ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis architecto a veniam? Eius laborum natus, odit totam aperiam iure similique nihil, quae expedita, molestias fugiat minima ut vero iusto sunt.</div>
                  </div>
                </a>
              <li>
            <?php }

            ?>

        </ul>
      </div>
    </main>
  </div>
</body>

</html>