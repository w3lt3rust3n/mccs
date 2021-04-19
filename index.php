<?php
session_start();
require_once("./inc/registerFn.php");
include("./inc/header.php");
?>

<main>
    <div class="container">
        <div class="row">
            <div class="jumbotron border-primary col-12">
                <h1 class='display-4'>Hello world!</h1>
                <p class="lead">Bienvenue sur myCodeCheatSheets();</p>
                <hr class="my-4">
                <p>Le site qui met à votre disposition des antisèches
                    sur différents langages web et framework et vous donne la possibilité de créer vos propres cheatsheets...</p>
                <p class="lead">
                    <a class="btn btn-outline-primary btn-lg" id="espBtn" href="cheats.php?login" role="button">Voir les cheatsheets</a>
                </p>
            </div>
            <div class="jumbotron diapo col-12" id="diapo">
                
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>