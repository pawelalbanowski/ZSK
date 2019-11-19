<?php
  $text = <<< TEKST
  zsk - Zespol
  szkół
  komunikacji
  TEKST;

  echo "przed wywołaniem funkcji nl2br: <br> $text";
  echo "<br>Po wywołaniu funkcji nl2br: <br>";
  echo nl2br($text),'<br>'; //widzi entery

  $test = 'jANuSz';
  //zamiana na małe litery
  echo strtolower($test),'<br>'; //janusz

  //zamiana na wielkie litery
  echo strtoupper($test),'<br>'; //JANUSZ

  //zamiana pierwszej litery na wielką
  $test = 'janUsz Tomasz agata';
  echo ucfirst($test),'<br>'; //JanUsz Tomasz agata

  //zamiana wszystkich pierwszych na wielkie
  echo ucwords($test),'<br>'; //JanUsz Tomasz Agata

  ########################################################

  $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'; //lorem i enter

  $col = wordwrap($lorem, 50, '<br>'); //40 = ilość znaków
  echo $col;

  //czyszczenie zawartości bufora
  ob_clean();

  //usuwanie białych znaków
  $name = 'Kasia';
  $name1 = '  Kasia ';

  echo 'Długość zmiennej $name: ',strlen($name),'<br>'; //5
  echo 'Długość zmiennej $name1: ',strlen($name1),'<br>'; //8

  echo strlen(ltrim($name1)); //6
  echo strlen(rtrim($name1)); //7
  echo strlen(trim($name1)); //5

  //przeszukiwanie ciągów znaków

  $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
  $search = strstr($address, 'tel');
  echo $search,'<br>'; //wyświetla od znalezionego do końca

  $search = strstr($address, 'tel', true);
  echo $search, '<br>'; //wyświetla od znalezionego do początku

  $search = stristr($address, 'Tel', true);
  echo $search, '<br>'; //wyświetla od znalezionego do początku, nie zwraca uwagi na wielkość liter

  $mail = stristr('zsk@gmail.com', '@');
  echo $mail, '<br>'; //wyświetla od znalezionego do początku, nie zwraca uwagi na wielkość liter

  ##################################################################3

  $ciag1 = 'a';
  $ciag2 = 'aa';

  echo strcmp($ciag1, $ciag2); //porównywanie ciągów ze sobą, wynik -1
  echo strcmp('zzz', 'zzz'); //porównywanie ciągów ze sobą, wynik 0
  echo strcmp('zza','zzz'); //-1

  //pozycja

  $pos = strpos('abcdefg', 'cde');
  echo $pos,'<br>'; //2

  //zad. 1

  $text1 = 'abcdabcd';
  $text2 = 'ab';

  //INDEX 0 TO TO SAMO CO FALSE W php
  if (strpos($text1,$text2) === false)
  {
    echo "Ciąg $text2 nie został znaleziony w ciągu $text1<br>";
  }
  else{
  echo "Ciąg $text2 został znaleziony w ciągu $text1<br>";
  }

  //przetwarzanie ciągów znaków

  $replace = str_replace('%name%', 'Janusz', 'Mama na imię: %name%');
  echo $replace,'<br>';

  //substr

  $surname = substr('Janusz Kowalski', 2); //wycina od 2 do końca
  echo $surname;

  $surname = substr('Janusz Kowalski', 7, 5); //wycina od 7 pięć kolejnych
  echo $surname;

  //zamiana polskich znaków

  $login = 'bączek';
  $censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
  $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

  $newLogin = str_replace($censore, $replace, $login);
  echo $newLogin,'<hr>'; //baczek

  /*
  Napisz aplikację cenzurującą zdanie podane przez użytkownika.
  Użytkownik podaje dane z formularza.
  */

  echo <<< FORM
  <form method="post">
    <input type="text" name="dane" placeholder="Wpisz zdanie"><br><br>
    <input type="submit" value="Zatwierdź">
  </form>
  FORM;

  if (isset($_POST['dane']))
  {
    $data = $_POST['dane'];
    $data = $_POST['dane'];

    $censore = array('biały', 'czarny');
    $replace = '**#####**';
    $correct = str_ireplace($censore, $replace, $data);

    echo "Dane przed poprawą: $data<br>";
    echo "Dane po poprawie: $correct<br>";
  }
 ?>
