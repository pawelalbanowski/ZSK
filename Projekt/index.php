<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <?php
    session_start();
    if(!isset($_SESSION['UserID']))
    {

     ?>
    <meta charset="utf-8">
    <title>Home - Techlish</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./javascript/register.js"></script>
  </head>
  <body>
    <header><!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="navbar-brand col-9 col-sm-6 col-md-5 col-lg-4 col-xl-3" id="logobg">
            <a href="#" class="logo__">
                Techlish
            </a>
        </div>
        <button class="navbar-toggler col-2" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="logo__" class="nav-item">
                    Niezalogowany
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="container-fluid" id="container">
  <div class="row">
    <div class="col-sm" id="col1">
      <h1 class="h11">Rejestracja</h1>
      <form class="register" name="register" method="post" action="./scripts/register.php"><!--register-->
        <input type="text" name="login_r" placeholder="Nazwa użytkownika..." class="text" required>
        <br>
        <input type="text" name="email_r" placeholder="e-mail..." class="text" required>
        <br>
        <input type="password" name="password_r" placeholder="hasło..." class="text" required>
        <br>
        <input type="submit" name="submit1" value="Zarejestruj" class="button1">
      </form>
    </div>
    <div class="col-sm" id="col2"><!--login-->
      <h1 class="h11">Login</h1>
      <form class="login" name="login" method="post" action="./scripts/login.php">
        <input type="text" name="login" placeholder="Nazwa lub email..." class="text"
        autofocus required>
        <br>
        <input type="password" name="password" placeholder="hasło..." class="text" required>
        <br>
        <input type="submit" name="submit2" value="Zaloguj" class="button1">
      </form>
    </div>
    <div class="col-sm" id="col3"> <!--"login" and "register" prompt or whatever-->
      <div class="zaloguj">
        Zaloguj się
      </div>
      <div class="zarejestruj">
        Nie masz konta?
        Zarejestruj się
      </div>
    </div>
    <footer class="page-footer">&copy; Paweł Albanowski 2020</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
else {
  if(isset($_SESSION['Admin']))
  {
    if($_SESSION['Admin']==0)
    header("Location: ./user.php");
    else
    header("Location: ./admin.php");
  }
}



 ?>
