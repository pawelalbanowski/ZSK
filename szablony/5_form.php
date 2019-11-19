<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="podaj imię" autofocus autocomplete="off"><br><br>
      <input type="number" name="age" placeholder="podaj wiek"><br><br>
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
      if (!empty($_POST['name'])&&!empty($_POST['age']))
      {
          $name = $_POST['name'];
          $age = $_POST['age'];
          echo "przed poprawką $name <br>";
          trim($name);
          $corrected = ucfirst(strtolower(substr($name, 0, 10)));
          echo "po poprawce $corrected <br>";
          echo <<< TABLE
          <table>
            <tr>
            <th>Imię</th><th>Wiek</th>
            </tr>
            <tr><td>$corrected<td><td>$age</td></tr>
          </table>
          TABLE;
      }
     ?>
  </body>
</html>
