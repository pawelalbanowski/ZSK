<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tabliczka mnożenia</title>
    <style>
      .table
      {
        border: 1px solid black;
        border-collapse: collapse;
      }
      .row
      {
        width: 40px;
        height: 40px;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
      }
      .blue
      {
        width: 40px;
        height: 40px;
        border: 1px solid black;
        border-collapse: collapse;
        background-color: blue;
        text-align: center;
      }
      .red
      {
        width: 40px;
        height: 40px;
        border: 1px solid black;
        border-collapse: collapse;
        background-color: red;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <form method="post">
    <input type="number" name="number" autofocus placeholder="Podaj rozmiar...">
    <br><br>
   </form>
   <?php
    $a = 1;
    $b = 1;
    $first = 1;
    $blue = 0;
    $red = 0;
    if (!empty($_POST['number'])&&$_POST['number']>1)
    {
    $num = $_POST['number'];
    echo ("<table class='table'");
    echo ("<tr><th class='row'></th>");
    do {
      echo ("<th class='row'>".$first."</th>");
      $first++;
    } while ($first <= $num);
    echo ("</tr>");
    do {
      echo ("<tr>");
        echo("<th class='row'>".$a."</th>");
      do {
        if ($a==$b) {
          echo ("<td class='red'>".$a*$b."</td>");
          $red+=$a*$b;
        }
        else
          if ($a+$b==$num+1) {
            echo ("<td class='blue'>".$a*$b."</td>");
            $blue+=$a*$b;
          }
          else
            echo ("<td class='row'>".$a*$b."</td>");
        $b++;
      } while ($b <= $num);
      echo ("</tr>");
      $a++;
      $b=1;
    } while ($a <= $num);
    echo("</table><br><br>");
    echo ("Suma czerwonej przekątnej: ".$red."<br><br>Suma niebieskiej przekątnej: ".$blue);
    }
    else
    {
    echo("Podaj liczbę większą od 1");
    }
    ?>
  </body>
</html>
