<?php
require('./scripts/connect.php');
$sqlf = "select id, eng, pol from words";
$resultf = mysqli_query($conn, $sqlf);
while ($row = mysqli_fetch_assoc($resultf))
{
  $but = $row['id'];
  echo "<li>".$row['eng']." - ".$row['pol']."  <input type='checkbox' name='$but'> Delete</li>";
}
 ?>
