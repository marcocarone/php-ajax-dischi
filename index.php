<?php

include __DIR__ . "/database.php";
 ?>



<!-- <?php
   foreach ($database as $key) {
       echo $key["poster"];
       echo $key["title"];
       echo $key["author"];
       echo $key["year"];
   }

  ?> -->



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Dischi</title>
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="top-box">
        <div class="logo">
          <img src="public/img/logo2.png" alt="logo google">
        </div>
      </div>
      <div class="menu">
        <div class="menu_left">
          <ul>
            <li><a class="active" href="#">menu</a></li>
            <li><a href="#">menu</a></li>
            <li><a href="#">menu</a></li>
            <li><a href="#">menu</a></li>

          </ul>
        </div>
        <div class="menu_right">
          <ul>
            <li><a href="#">Altro menu</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="wrapper">
      <?php
        foreach ($database as $key) { ?>
      <div class="cd__box">
        <div class="cd__img">
          <img src="<?php echo $key["poster"]; ?>" alt="<?php echo $key["title"]; ?>">
        </div>
        <h2><?php echo $key["title"]; ?></h2>
        <h3><?php echo $key["author"]; ?></h3>
        <h4><?php echo $key["year"]; ?></h4>
      </div>
      <?php  } ?>

    </div>
  </main>
  <footer>
    <div class="wrapper">
      <div class="left">
        <ul>
          <li><a href="#">menu</a></li>
          <li><a href="#">menu</a></li>
          <li><a href="#">menu</a></li>
          <li><a href="#">menu</a></li>
        </ul>
      </div>
      <div class="right">

        <select>
          <option value="af">Italiano</option>
          <option value="de">Deutsch</option>
          <option value="en">English</option>
        </select>
      </div>
    </div>
  </footer>

  <script src="public/js/script.js" charset="utf-8"></script>
</body>

</html>
