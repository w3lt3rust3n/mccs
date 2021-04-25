<?php
require_once("./inc/registerFn.php");

if (empty($_SESSION)) {
    $_SESSION['role'] = "role_guest";
    $_SESSION['login'] = "guest";
    //var_dump($_SESSION);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/home.js"></script>
    <title>myCodeCheatSheets</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">

                    <a class="navbar-brand" href="index.php">
                        <img src="./assets/img/new_logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <?php
                            if ($_SESSION['role'] === "role_user") {
                                echo "<li><a class='nav-link text-primary' href='cheats.php'>Cheatsheets</a></li>";
                                echo "<li><a class='nav-link text-primary' href='customcs.php'>Mes cheatsheets</a></li>";
                                echo "<li><a class='nav-link text-primary' href='account.php'>Mon compte</a></li>";
                                echo "<li><a class='nav-link text-primary' href='logout.php'>Se déconnecter</a></li>";
                            } else {
                                echo "<li><a class='nav-link text-primary' href='login.php'>Se connecter</a></li>";
                                echo "<li><a class='nav-link text-primary' href='registrer.php'>Créer un compte</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <?php
                    if (!empty($_SESSION['login'])) {
                        echo "" . $_SESSION['login'];
                    } else {
                        echo "Can't get login info.";
                    }
                    ?>
                </nav>
            </div>
        </div>
    </header>