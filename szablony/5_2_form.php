<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!empty($_GET['country']))
    {
      echo $_GET['country'];
      $lang = $_GET['lang'];
      echo $_GET['country'];
      switch ($lang) {
        case 'pl':
          $lang = 'polski'
          break;
        case 'en':
          $lang = 'angielski'
          break;
      }
      echo "<br>$lang";
    }
    else {
      ?>
       <form method="get">
        <input type="text" name="country" placeholder="Podaj kraj" autofocus>
        <input type="radio" name="lang" value="pl" checked>polski
        <input type="radio" name="lang" value="en">angielski
        <input type="submit" name="button" value="Zatwierdź">
      </form><?php
    }
     ?>
  </body>
</html>
