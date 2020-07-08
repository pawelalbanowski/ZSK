<!DOCTYPE html>
<?php
  session_start();
  if(isset($_SESSION['UserID'])){
    if($_SESSION['Admin']==0){
 ?>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profil - Techlish</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  </head>
  <body>
    <header><!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="logo__" class="navbar-brand col-9 col-sm-6 col-md-5 col-lg-4 col-xl-3" id="logobg">
                Techlish
        </div>
        <button class="navbar-toggler col-2" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="logo__" class="nav-item">
                  <a href="./scripts/logout.php" class="logo__" class="nav-link">Wyloguj</a>
              </li>
            </ul>
        </div>
    </nav>
</header>
<div class="container-fluid" id="container">
  <div class="row">
    <div class="col-sm" style="margin-top: 100px;
    margin-right: 50px;
    margin-left: 50px;
    text-align: center;
    border: 1px solid #393e46;
    background-color: #00adb5;
    border-radius: 30px;
    padding: 50px;
    line-height: 2;
    color: #eeeeee;
    box-shadow: 1px 1px 50px 5px #222831;">
      <h1 class="h11">Słówka:</h1>
        <ul style="list-style-type:none;">
          <?php
            include('./scripts/words.php');
           ?>
        </ul>
    </div>
    <footer class="page-footer">&copy; Paweł Albanowski 2020</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}}
else{
header("Location: ./scripts/logout.php");
}
 ?>
