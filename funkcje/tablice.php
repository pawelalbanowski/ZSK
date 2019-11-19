<?php
//tablice indeksowane numerycznie

  $colors = ['Red', 'Green', 'Blue'];
  $colors[3] = 'Magenta';

  for ($i=0; $i < count($colors) ; $i++) {
    $elem = $i+1;
    echo "Element $elem: $colors[$i]<br>";
  }

  function showArray($tab)
  {
    for ($i=0; $i < count($tab) ; $i++) {
      $elem = $i+1;
      echo "Element $elem: $tab[$i]<br>";
  }
  }

  showArray($colors);

  //foreach

  foreach ($colors as $key => $value) {
    $elem = $key+1;
    echo "Element $elem: $value<br>";
  }

  //tablice asocjacyjne

  $data = array(
    'imie' => 'Janusz',
    'nazwisko' => 'Nowak',
    'wiek' => 20,
  );

  echo '<hr>Tablica asocjacyjna:<br>';
  echo $data['imie'];

  foreach ($data as $key => $value) {
    echo "$key: $value<br>";
  }

  //tablice wielowymiarowe

  $student = array(
    array('Katarzyna', 'Nowak', 30),
    array('Paweł', 'Nowak', ),
    array('Anna', 'Kowalska', 31)
  );

  for ($i=0; $i < count($student) ; $i++) {
    for ($j=0; $j < count($student[$i]) ; $j++) {
      echo $student[$i][$j],' ';
    };
    echo '<br>';
  }

  echo "<hr>";

  foreach ($student as $key => $value) {
    foreach ($value as $key1 => $value1) {
      echo $value1,' ';
    };
    echo '<br>';
  }

  /*
    Utwórz tablicę 3-wymiarową i napisz dla niej funkcję wyświetlającą zawartość (foreach)
  */

  //sortowanie

  $tab = array(10, 1, 5, 1000, 75, -4, 100);

  function tab1($tab)
  {
    foreach ($tab as $value) {
      echo ("$value ");
    }
    echo ("<br>");
  }
  //wyświetlanie
  tab1($tab);

  //sortowanie niemalejące według wartości

  sort($tab);
  tab1($tab);

  //sortowanie nierosnące według wartości

  rsort($tab);
  tab1($tab);

  ##############################

  $tab2 = array('katarzyna', 'Zenon', 'Paweł', 'anna');
  sort($tab2);
  tab1($tab2);

  //sortowanie niemalejące tablicy asocjacyjnej według wartości

  $tabAssoc =
  array(
    "surname" => "Nowak",
    "name" => "Andrzej",
    "city" => "Poznań",
    "age" => 30
  );

  tab1($tabAssoc);
  asort($tabAssoc);
  tab1($tabAssoc);

  //sortowanie tablicy asocjacyjnej niemalejąco według klucza

  ksort($tabAssoc);
  tab1($tabAssoc);

  //sortowanie tablicy asocjacyjnej nierosnąco według klucza

  krsort($tabAssoc);
  tab1($tabAssoc);

  //wyświetlanie danych

  var_dump($tabAssoc);

  echo "<pre>";
  echo print_r($tabAssoc);
  echo "</pre>";

 ?>
