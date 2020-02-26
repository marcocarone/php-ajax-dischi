<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

          </ul>
        </div>
        <div class="menu_right">
          <input class="search-bar" type="text" name="input" value="" placeholder="Cerca artista">
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="wrapper">



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


  <!-- TEMPLATE ALBUM -->
  <script id="album" type="text/x-handlebars-template">
    <div class="cd__box">
      <div class="cd__img">
        <img src="{{copertina}}" alt="{{titolo}}">
      </div>
      <h2>{{titolo}}</h2>
      <h3>{{artista}}</h3>
      <h4>{{anno}}</h4>
    </div>
  </script>
  <script src="public/js/script.js" charset="utf-8"></script>
</body>

</html>
