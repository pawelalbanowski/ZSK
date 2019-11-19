<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 2</title>
  </head>
  <body>
    <p>Strona druga</p>
    Witamy <?php echo $_SESSION['name']; ?> na stronie!
    <br>
    <?php
      echo "Identyfikator sesji: ",session_id();
     ?>
     <br>
     <a href="./sesja3.php">Strona 3</a>
     <a href="./sesja.php">Strona główna</a>
  </body>
</html>
