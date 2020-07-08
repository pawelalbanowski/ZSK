<?php
  session_start();
  unset($_SESSION['UserID']);
  unset($_SESSION['Admin']);
  session_destroy();
  header("Location: ../index.php");
 ?>
