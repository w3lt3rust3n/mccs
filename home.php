<?php
session_start();

?>
<main>
    <div class="container">
        <div class="row">

            <div class="jumbotron col-12" id="jumbo">
                <?php
                if($_SESSION['role'] === 'user' && !empty($_SESSION['login'])) {
                    echo "<h1 class='display-4'>Hello ".$_SESSION['login']."</h1>";
                } else {
                    echo "<h1 class='display-4'>Hello world!</h1>";

                }
                ?>
                <p class="lead">Bienvenue sur myCodeCheatSheets();</p>
                <hr class="my-4">
                <p>Le site qui met à votre disposition des feuilles de triches
                    sur différents langages web et framework et vous donne la possibilité de créer vos propres cheatsheets...</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" id="espBtn" href="#" role="button">En savoir plus</a>
                </p>
            </div>
        </div>
    </div>
    <div id="cards">
        <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">HTML - HyperText Markup Language</h5>
                        <p class="card-text">Feuilles de triche du HTML.</p>
                        <?php
                        if ($_SESSION['role'] === 'user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">CSS - Cascading Style Sheets</h5>
                        <p class="card-text">Feuilles de triche du CSS.</p>
                        <?php
                        if ($_SESSION['role'] === 'user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">HTML - HyperText Markup Language</h5>
                        <p class="card-text">Feuilles de triche du HTML.</p>
                        <?php
                        if ($_SESSION['role'] === 'user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">HTML - HyperText Markup Language</h5>
                        <p class="card-text">Feuilles de triche du HTML.</p>
                        <?php
                        if ($_SESSION['role'] === 'user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>