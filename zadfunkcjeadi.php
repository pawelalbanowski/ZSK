<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    ob_start();
    $form1 = <<< TEKST
    <form method="post">
      <input type="text" name="ilosc" placeholder="Wpisz liczbę &lt;1;70&gt;" autofocus>
      <br><br>
    </form>
    TEKST;

    echo $form1;

      if (!empty($_POST['ilosc'])&&$_POST['ilosc']>=1&&$_POST['ilosc']<=70)
      {
          $ilosc = $_POST['ilosc'];
          echo ($ilosc);
          pobierz($ilosc);
      }
      else echo("Podaj liczbę od 1 do 70");

      function pobierz($ilosc)
      {
        ob_end_clean();
        echo ("<form type='submit' method='post'>");
        for ($i=0; $i < $ilosc ; $i++) {
          $j = $i+1;
          echo ("<input type='text' name='age[]' autofocus><br>");
        }

        echo ("<br><input type='hidden' name='ilosc' value='$ilosc'>");
        echo ("<br><button name='but'>Wyślij</button>");
        echo ("</form>");
        if (isset($_POST['but']))
        {

          $check = 0;
          for ($i=0; $i<$ilosc; $i++){
          if (empty($_POST['age'][$i])||$_POST['age'][$i]<0||$_POST['age'][$i]>140)
          {
            $check = 1;
          }
        }
        if($check == 1)
        {
          echo "wpisz poprawny wiek";
        }
        else {
          for ($i=0; $i<$ilosc; $i++){
          $age[$i] = $_POST['age'][$i];
        }
        $avg = 0;
        $min = 140;
        $max = 0;
        for ($i=0; $i < $ilosc ; $i++) {
          if ($age[$i] < $min)
          {
            $min = $age[$i];
          }
        }
        for ($i=0; $i < $ilosc ; $i++) {
          if ($age[$i] > $max)
          {
            $max = $age[$i];
          }
        }
        for ($i=0; $i < $ilosc ; $i++) {
          $avg+=$age[$i]/2;
        }
        $avg1 = round($avg);
        $wynik = <<< WYNIK
        <ul>
        <li>Najmłodsza osoba ma $min lat</li>
        <li>Najstarsza osoba ma $max lat</li>
        <li>Średni wiek: $avg1 lat</li>
        </ul>
        WYNIK;
        echo ($wynik);
        }
        }
      };

     ?>
  </body>
</html>
