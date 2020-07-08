<?php
require('./scripts/connect.php');
$sqlf = "select id, Nick, admin from user";
$resultf = mysqli_query($conn, $sqlf);
while ($row = mysqli_fetch_assoc($resultf))
{
  if ($row['Nick']==$_SESSION['UserID']) {
    echo "<li style='color:lightgrey;'>".$row['Nick']."(Ty)</li>";
  }
  else{
    if ($row['admin']==1) {
      echo "<li>".$row['Nick']."</li>";
    }
    else{
      $but = $row['id'];
  echo "<li>".$row['Nick']." <input type='checkbox' name='$but'> Set Admin</li>";
}
}
}
 ?>
