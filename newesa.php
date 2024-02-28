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
        <a href="indexa.html">
          <div class="logo">Hangatu</div>
        </a>
        <ul class="togglecontainer">
          <li><a href="index.html">Home</a></li>
          <!-- <li><a href="#about">About</a></li> -->
          <!-- <li><a href="#contact">Contact</a></li> -->
          <li><a href="#contact">News</a></li>

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

        $stm = $db->prepare("SELECT * FROM news WHERE ntype = 'amhr' ORDER BY nid DESC");
        $stm->execute();
        foreach ($stm->fetchAll() as $row) {
        ?>
          <div class="cards">
            <h1 class="card-title"><?php echo $row['title'] ?></h1>
            <p>
              <?php echo $row['news'] ?>
            </p>
          </div>
        <?php }
        ?>
      </div>
      <div class="more">
        <h3>Upcoming Events</h3>
        <ul>
          <li><a href="newid.html">መታወቂያ ለማወጣት</a></li>
          <li><a href=""> መልካም አስተዳደር እና አገልግሎት አሰጣጥ </a></li>
          <li><a href=""> የሃንጋቱ ወረዳ ልማት ፋውንዴሽን</a></li>
          <li><a href=""> የንፅህና አጠባበቅ እና አረንጓዴ ልማት</a></li>
          <li><a href=""> ቤቶችን ማስተዳደር እና ማስተላለፍ.</a></li>
          <li><a href="">የህዝብ ሴክተሮች ማስተባበር</a></li>
          <li><a href=""> የቤተሰብ ገቢ ስብስብ</a></li>
          <li><a href=""> ጉድለቶችን ማስተካከል</a></li>
          <li><a href=""> SMART Adama እና በማስተባበር ስራ።</a></li>
          <li><a href=""> የዜጎች እና ሌሎች ተዛማጅ የበጎ ፈቃድ ተግባራት.</a></li>
        </ul>
      </div>
    </main>
  </div>
</body>

</html>