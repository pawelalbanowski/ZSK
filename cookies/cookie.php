<?php
  setcookie("age", 20);
  setcookie("name", "Nowak", time()+60);
  echo time(),"<br>";

  //echo $_COOKIE["age"];
  //usunięcie ciasteczka
  setcookie("age", "", time()-1);

  //echo "<pre>";
  //  print_r($_COOKIE);
  //echo "</pre>";

  //echo "<script>alert('test');</script>";

  ####################################333

  /*
  Użytkownik podaj imię i nazwisko w formie
  utwórz zmienną sesyjną w której będzie przechowywane imię oraz cookie dla nazwiska na 2 dni.
  Wyświetl dane pod formularzem pobierając je ze zmiennej sesyjnej i ciasteczka:
  Imię: ...
  nazwisko: ...
  */

  session_start();
  ?>
  <!DOCTYPE html>
  <html lang="pl" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>cookies</title>
    </head>
    <body>
      <form method="post">
        <input type="text" name="imie" autofocus placeholder="imię">
        <input type="text" name="nazwisko" placeholder="nazwisko">
        <input type="submit" name="submit" value="Wyślij">
      </form>
    </body>
  <?php
  $_SESSION['name1'] = $_POST['imie'];
  setcookie("name2", $_POST['nazwisko'], time()+172800);

  echo "Imie: ",$_SESSION['name1'],"<br>";
  echo "Nazwisko: ",$_COOKIE['name2'];
 ?>
 </html>
