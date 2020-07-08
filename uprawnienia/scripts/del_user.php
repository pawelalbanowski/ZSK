<?php
  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
    echo $id;
    require_once('./connect.php');
    $sql = "delete from `user` where `user` .`id` = '$id'";
    if (mysqli_query($conn, $sql)) {
      //echo "Prawidłowo usunięto usera";
      header('location: ../');
    }
  }
 ?>
