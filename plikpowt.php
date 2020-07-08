<?php
$servername = "localhost";
$username = "root";
$dbname = "baza";

$co = new mysqli($servername, $username, "", $dbname);


$stmt = $co->prepare("INSERT INTO produkty (id, nazwaProduktu, cena, liczba) VALUES (?, ?, ?, ?)");
$stmt->bind_param(NULL, $nazwa, $cena, $liczba);


$nazwa = "Podrecznik PHP dla opornych";
$cena = 40;
$liczba = 10;
$stmt->execute();

$stmt->close();
$conn->close();
?>
