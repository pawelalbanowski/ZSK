<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uprawnienia - user</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <form method="post">
      <input type="password" name="haslo" autofocus placeholder="wpisz hasło...">
      <input type="submit" name="submit" value="Wyślij">
    </form>

    <?php

      require_once('./scripts/connect.php');
      require_once('./scripts/function.php');

      $passw=$_POST['haslo'];
      $sql = "select id, name, surname, birthday from user";
      if ($result = mysqli_query($conn, $sql)) {
        //echo "Poprawne zapytanie";
      }
      else {
        //echo "Błędne zapytanie";
      }
      echo <<<TABLE
      <table>
        <tr>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Rok urodzenia</th>
          <th>Usuń użytkownika</th>
        </tr>
TABLE;
      while($row = mysqli_fetch_assoc($result)){
        $year = year($row['birthday']);
      echo <<<ROW
      <tr>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthday]</td>
        <td>$year</td>
        <td><a href="./scripts/del_user.php?id=$row[id]">usuń</a></td>
      </tr>
ROW;
}

      echo "</table>";

      mysqli_close($conn);
     ?>
  </body>
</html>
