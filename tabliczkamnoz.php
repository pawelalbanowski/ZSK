<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tabliczka mnożenia</title>
    <style>
      .red
      {
        width:40px; height: 40px; text-align:center; background-color:red;
      }
      .blue
      {
        width:40px; height: 40px; text-align:center; background-color: blue;
      }
      .box
      {
        width:40px; height: 40px; text-align:center;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <input type="number" name="liczba1" autofocus placeholder="ile liczb?">
    </form>
<?php
$num = $_POST['liczba1'];
if (!empty($_POST['liczba1'])&&$_POST['liczba1']>1){
  $i=1;
 $k = 0;
  $j=1;
  $red = 0;
  $blue = 0;
echo ("<table border=1 style='border-collapse: collapse;'>");
echo ("<tr>");
do{
  if ($k==0)
  {
    echo("<td class='box'></td>");
  }else
echo("<th class='box'>".$k."</th>");
$k++;
}while($k<=$num);
echo ("</tr>");
  do{
 echo("<th class='box'>".$i."</th>");
  do{
 if ($i==$j){
  echo ("<td class='red'>".$i*$j."</td>");
 $red+=$i*$j;
}
else if($i+$j==$num+1){
    echo ("<td class='blue'>".$i*$j."</td>");
    $blue+=$i*$j;
}else  echo ("<td class='box'>".$i*$j."</td>");

  $j=$j+1;

}while($j<=$num);

  echo ("<tr>");

  $j=1;

  $i=$i+1;
echo("</tr>");
}while($i<=$num);
echo("</table>");
$both = $red+$blue;
echo("<br>suma czerwonej przekątnej: $red <br><br>");
echo("suma niebieskiej przekątnej: $blue<br><br>");
echo("suma obu przekątnych: $both");
}
else
echo ("wpisz liczbę dodatnią większą od 1");
?>
  </body>
</html>
