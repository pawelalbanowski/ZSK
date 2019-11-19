<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie funkcje</title>
    <style>
      .table
      {
        border: 1px solid black;
        border-collapse: collapse;
      }
      .box
      {
        width: 40px;
        height: 40px;
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
      }
      .red
      {
        width: 40px;
        height: 40px;
        text-align: center;
        background-color: red;
        border: 1px solid black;
        border-collapse: collapse;
      }
      .blue
      {
        width: 40px;
        height: 40px;
        text-align: center;
        background-color: blue;
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <input type="number" name="input" autofocus placeholder="Podaj rozmiar...">
    </form>
    <?php
      if(!empty($_POST['input'])&&$_POST['input']>1)
      {
        $size = $_POST['input'];
        $a = 1; //pierwszy czynnik
        $b = 1; //drugi czynnik
        $header = 0; //upper label
        $red = 0; //suma czerwonych pól
        $blue = 0; //suma niebieskich pól
        echo("<table class='table'>");
        echo("<tr>");
        do {
          if ($header==0)
          {
            echo ("<th class='box'></th>");
          }
          else {
            echo ("<th class='box'>".$header."</th>");
          }
          $header++;
        } while ($header <= $size);
        echo("</tr>");
        do {
          echo("<tr>");
          echo("<th class='box'>".$a."</th>");
          $b=1;
          do {
            if ($a==$b) {
              echo("<td class='red'>".$a*$b."</td>");
              $red+=$a*$b;
            }
            else if ($a+$b==$size+1) {
              echo("<td class='blue'>".$a*$b."</td>");
              $blue+=$a*$b;
            }
            else
              echo("<td class='box'>".$a*$b."</td>");
            $b++;
          } while ($b <= $size);
          $a++;
          echo("</tr>");
        } while ($a <= $size);
        echo("</table>");
        echo("<br><br>Suma czerwonej przekątnej: ".$red."<br><br>Suma niebieskiej przekątnej: ".$blue);
      }
      else {
        echo ("Podaj liczbę większą od 1");
      }
     ?>
  </body>
</html>
