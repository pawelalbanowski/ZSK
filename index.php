<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $liczba = 10;
      $_liczba = 10;
      $imię = 'Janusz';


      $prawda = true;

      //typ integer
      $calkowita = 10;
      $hex = 0xA;

      echo $hex;

      $oct = 010;

      echo $oct;

      $bin = 0b1010;

      echo $bin;
//sposoby wyświetlania
      echo $hex,$bin,$oct; //po kolei
      echo $hex.$bin.$oct; //łączy stringi i wyświetla

echo '<hr>',$bin,'<hr>';

      //składnia heredoc

      $imie = 'Jan';
      $nazwisko = 'Kowalski';

      $text = <<< TEKST
      Twoje imię: $imie
      TEKST;

      echo $text;
     ?>
  </body>
</html>
