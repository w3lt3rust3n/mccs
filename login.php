<?php
session_start();
require_once("./inc/registerFn.php");
include("header.php");

if (!empty($_POST)) {
    $erreur = [];
    print_r($_POST);
    // si login et password ne sont pas vide
    $_POST['login'] = verifInput("login", "Vous n'avez pas rempli le champ login.");
    $_POST['pwd'] = verifInput("pwd", "Vous n'avez pas rempli le champ pwd.");

    $login = $_POST['login'];
    var_dump("login -> " .$login);
    if (count($erreur) === 0) {

        $userLog = selectUserForLogin($_POST['login'], $_POST['pwd']);
        var_dump("userLog -> " .$userLog);
        if ($userLog) {
            $_SESSION['login'] = $userLog['login'];
            $_SESSION['pwd'] = $userLog['pwd'];
            header("Location:index.php");
        } else {
            echo "Vous êtes pas le bon utilisateur";
        }
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-12 img-login">
            <div class="card border-primary mb-3 col-8" style="max-width: 20rem;">
                <div class="card-header">Connexion</div>
                <div class="card-body">
                    <h5 class="card-title">Connectez-vous à votre compte Philentropy.</h5>
                    <p class="card-text">Si vous n'avez pas de compte, veuillez en créer un <a href="registrer.php">ici</a>.</p>
                    
                    <form action="login.php" method="post" name="formLogin">
                        <div class="form-group">
                            <input class="form-control" type="text" name="login" id="login" placeholder="Loginn">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="pwd" id="pwd" placeholder="Mot de Passe">
                            <div class="inputError"></div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="envoyer">
                        <?php
                        if(array_key_exists('login', $erreur)) {
                               echo "<div class='form-group has-danger'>";
                                echo "<input type='text' class='form-control is-invalid' id='inputInvalid'>";
                                echo "<div class='invalid-feedback'>Sorry, that username's taken. Try another?</div>";
                                echo "</div>";
                            }
                        ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include("footer.php");
