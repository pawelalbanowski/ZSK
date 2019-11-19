
    <?php
    if (!empty($_POST['area'])&&!empty($_POST['text'])&&!empty($_POST['number']))
    {
      $area = $_POST['area'];
      $text = $_POST['text'];
      $number = $_POST['number'];

      $areahtml = nl2br(substr(trim($area), 0, 50));
      echo $areahtml;
    }
     ?>
