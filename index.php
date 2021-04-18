<?php
session_start();
//$_SESSION['role'] = 'role_role_user';
//$_SESSION['login'] = 'weltrusten';
//$_SESSION['role'] = 'anonymous';
//$_SESSION['login'] = '';
$_SESSION['role'] = '';
$_SESSION['login'] = '';
include("header.php");
//include("home.php");
?>

<main>
    <div class="container">
        <div class="row">

            <div class="jumbotron col-12" id="jumbo">
                <?php
                if ($_SESSION['role'] === 'role_user' && !empty($_SESSION['login'])) {
                    echo "<h1 class='display-4'>Hello " . $_SESSION['login'] . "</h1>";
                } else {
                    echo "<h1 class='display-4'>Hello world!</h1>";
                }
                ?>
                <p class="lead">Bienvenue sur myCodeCheatSheets();</p>
                <hr class="my-4">
                <p>Le site qui met à votre disposition des antisèches
                    sur différents langages web et framework et vous donne la possibilité de créer vos propres cheatsheets...</p>
                <p class="lead">
                    <a class="btn btn-outline-primary btn-lg" id="espBtn" href="#" role="button">Voir les cheatsheets</a>
                </p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <section id="cards" class="col-12">
                <div class="col-4">
                    <div class="card border-primary" style="max-width: 20rem;">
                        <div class="card-header">Langage web - Front-end</div>
                        <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">HTML</h5>
                            <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                                faite pour vous !
                            </p>
                            <?php
                            if ($_SESSION['role'] === 'role_user') {
                                echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                            } else {
                                echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                                echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-primary" style="max-width: 20rem;">
                        <div class="card-header">Langage web - Front-end</div>
                        <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">CSS</h5>
                            <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                                faite pour vous !</p>
                            <?php
                            if ($_SESSION['role'] === 'role_user') {
                                echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                            } else {
                                echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                                echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card border-primary" style="max-width: 20rem;">
                        <div class="card-header">Langage web - Front-end</div>
                        <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">JS</h5>
                            <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                                faite pour vous !</p>
                            <?php
                            if ($_SESSION['role'] === 'role_user') {
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

    <div class="container">
        <div class="row g-4 gy-5">
            <div class="col-4">
                <div class="card border-primary" style="max-width: 20rem;">
                    <div class="card-header">Langage web - Front-end</div>
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">JQuery</h5>
                        <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                            faite pour vous !</p>
                        <?php
                        if ($_SESSION['role'] === 'role_user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-primary" style="max-width: 20rem;">
                    <div class="card-header">Langage web - Front-end</div>
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">AJAX</h5>
                        <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                            faite pour vous !</p>
                        <?php
                        if ($_SESSION['role'] === 'role_user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-primary" style="max-width: 20rem;">
                    <div class="card-header">Langage web - Back-end</div>
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">SQL</h5>
                        <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                            faite pour vous !</p>
                        <?php
                        if ($_SESSION['role'] === 'role_user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-primary" style="max-width: 20rem;">
                    <div class="card-header">Langage web - Back-end</div>
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                            faite pour vous !</p>
                        <?php
                        if ($_SESSION['role'] === 'role_user') {
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

    <div class="container">
        <div class="row g-4 gy-5">
            <div class="col-4">
                <div class="card border-primary" style="max-width: 20rem;">
                    <div class="card-header">Framework JS</div>
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Angular</h5>
                        <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                            faite pour vous !</p>
                        <?php
                        if ($_SESSION['role'] === 'role_user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="max-width: 20rem;">
                    <div class="card-header">Framework appli hybride</div>
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ionic</h5>
                        <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                            faite pour vous !</p>
                        <?php
                        if ($_SESSION['role'] === 'role_user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="max-width: 20rem;">
                    <div class="card-header">Framework PHP</div>
                    <img class="card-img-top" src="./assets/img/html-card.png" alt="HTML Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Symfony</h5>
                        <p class="card-text">Besoin de vous rafraîchir la mémoire ? Cette antisèche est
                            faite pour vous !</p>
                        <?php
                        if ($_SESSION['role'] === 'role_user') {
                            echo "<a href='html.php' class='btn btn-primary'>Lire</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-primary'>Connectez-vous pour lire</a>";
                            echo "<p>Pas encore de compte ? <a href='registrer.php'>Cliquez ici</a> pour créer un compte.";
                        }
                        ?>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>


</main>
<?php
include("footer.php");
?>