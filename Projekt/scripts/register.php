<?php
require('./connect.php');
  if (isset($_POST['submit1'])) {
    $nick = $_POST['login_r'];
    $mail = $_POST['email_r'];
    $passw = $_POST['password_r'];
    $sql1 = "insert into user (`id`, `Nick`, `mail`, `password`) values (null, '$nick', '$mail', '$passw')";
    $result = mysqli_query($conn, $sql1);
    session_start();
    $_SESSION['UserID'] = $nick;
    $_SESSION['Admin'] = 0;
    header("Location: ../user.php");
  }
  else {
    header("Location: ../index.php");
  }
 ?>
