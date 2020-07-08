<?php
require('./connect.php');
if (isset($_POST['submit2'])) {
  $nick = $_POST['login'];
  $passw = $_POST['password'];
  $sql2 = "select Nick, password, admin from user";
  $result = mysqli_query($conn, $sql2);
  while($row = mysqli_fetch_assoc($result))
  {
    if ($nick == $row['Nick']&&$passw == $row['password'])
    {
    session_start();
    $_SESSION['UserID'] = $row['Nick'];
    if($row['admin']==1)
    {
      $_SESSION['Admin'] =1;
      header("Location: ../admin.php");
    }
    else
    {
      $_SESSION['Admin'] = 0;
      header("Location: ../user.php");
    }
  }
  }
}
else
{
  header("Location: ../index.php");
}
 ?>
