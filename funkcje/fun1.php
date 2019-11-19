<?php
  function Show($a):string
  {
    if ($a < 0)
    {
      return 'ujemna';
    }
    else if ($a == 0) {
      return 'zero';
    }
    else {
      return 'dodatnia';
    }
  }

  echo Show (4). '<br>';

  function getValue():int
  {
    return 10.55;
  }

  echo getValue (). '<br>';

  //zasięg zmiennych

  $x = 10;
  function Wyswietl()
  {
    echo "Wartość zmiennej \$x wynosi: <br> $GLOBALS[x]  <br>"; //bez cudzysłowia przy x
    echo $GLOBALS['x'];
  }

  Wyswietl();

  $y = 5;
  function WyswietlY()
  {
    global $y;
    echo "Wartość zmiennej \$y wynosi: $y  <br>";
  }

  WyswietlY();


  #######################################################################

  function sum()
  {
    $liczba = 10;
    echo "\$liczba wynosi: $liczba <br>";
    $liczba += 10;
  }

    sum(); //10
    sum(); //10

  #######################################################################

  function sum1()
  {
    static $liczba = 10;
    echo "\$liczba wynosi: $liczba <br>";
    $liczba += 10;
  }

    sum1(); //10
    sum1(); //20
    sum1(); //30

    #########################################################################
    //argumenty

    function dodaj($x, $y= 1)
    {
      return $x + $y;
    }

    $z = 20;

    echo dodaj($z); //z jako x
    echo dodaj($z, 5);

    //argumenty i typy danych

    function multi(float $x, int $y)
    {
      return $x * $y;
    }

    echo multi(3, 4); //12
    echo multi(2.5, 4); //10
    echo multi(4, 2.5); //8 (2.5 jako int to 2)

    ?>
