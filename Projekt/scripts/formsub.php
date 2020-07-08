<?php
session_start();
require('./connect.php');
switch($_POST['action'])
{
  case 'users':
  $sqld = "SELECT id FROM user";
  $resultd = mysqli_query($conn, $sqld);
  while ($row = mysqli_fetch_assoc($resultd))
  {
    $check = $row['id'];
      if (isset($_POST[$check])) {
        $sqlad = "UPDATE user SET admin = 1 WHERE user.id = $check";
        $resultad = mysqli_query($conn, $sqlad);
      }
  }
    break;
    case 'words':
    $sqld = "SELECT id, eng FROM words";
    $resultd = mysqli_query($conn, $sqld);
    while ($row = mysqli_fetch_assoc($resultd))
    {
      $check = $row['id'];
        if (isset($_POST[$check])) {
          $sqlad = "DELETE FROM words WHERE words.id = $check";
          $resultad = mysqli_query($conn, $sqlad);
        }
    }
    if (!empty($_POST['neweng'])&&!empty($_POST['newpol']))
    {
      $eng = $_POST['neweng'];
      $pol = $_POST['newpol'];
      $sqladd = "INSERT INTO `words` (`id`, `eng`, `pol`) VALUES (NULL, '".$eng."', '".$pol."')";
      $resultadd = mysqli_query($conn, $sqladd);
    }
    break;
}
header("Location: ../admin.php");
 ?>
