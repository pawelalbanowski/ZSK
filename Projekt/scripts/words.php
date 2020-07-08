<?php
require('./scripts/connect.php');
$sqlf = "select eng, pol from words";
$resultf = mysqli_query($conn, $sqlf);
while ($row = mysqli_fetch_assoc($resultf))
{
  echo "<li>".$row['eng']." - ".$row['pol']."</li>";
}
 ?>
