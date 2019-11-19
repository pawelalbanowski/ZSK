<?php
session_start();
unset($_SESSION['name']); //usunięcie zmiennej sesyjnej
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 3</title>
  </head>
  <body>
    <p>Strona trzecia</p>
    Witamy <?php echo $_SESSION['name']; ?> na stronie!
    <br>
    <?php
      echo "Identyfikator sesji: ",session_id();
     ?>
     <br>
     <a href="./sesja2.php">Strona 2</a>
     <a href="./sesja.php">Strona główna</a>
  </body>
</html>
