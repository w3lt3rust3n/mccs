<?php
session_start();
//$_SESSION['role'] = 'user';
//$_SESSION['login'] = 'weltrusten';
$_SESSION['role'] = '';
$_SESSION['login'] = '';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/home.js"></script>
    <title>Home - MCCS</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
                
                    <a class="navbar-brand" href="#">
                        <img src="./assets/img/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav my-8, my-lg-8, mr-sm-8, my-sm-8">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <?php 
                            if($_SESSION['login'] !== "") {
                                echo "<li><a class='nav-link' href='html.php'>HTML</a></li>";
                                echo "<li><a class='nav-link' href='css.php'>CSS</a></li>";
                                echo "<li><a class='nav-link' href='javascript.php'>Javascript</a></li>";
                                echo "<li><a class='nav-link' href='jquery.php'>JQuery</a></li>";
                                echo "<li><a class='nav-link' href='sql.php'>SQL</a></li>";
                                echo "<li><a class='nav-link' href='php.php'>PHP</a></li>";
                                echo "<li><a class='nav-link' href='ajax.php'>Ajax</a></li>";
                            } else {
                                echo "<li><a class='nav-link' href='login.php'>Se connecter</a></li>";
                                echo "<li><a class='nav-link' href='registrer.php'>Créer un compte</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>