<?php
include('header.php');
require_once('./inc/registerFn.php');

$error = [];
if(!empty($_POST)) {
    $_POST['regLoginInput'] = checkInput("regLoginInput", "Vous n'avez pas mis votre nom d'utilisateur");
    $_POST['regPasswordInput'] = checkInput("regPasswordInput", "Vous n'avez pas mis votre mot de passe");
    $_POST['confPasswordInput'] = checkInput("confPasswordInput", "Vous n'avez pas confirmé votre mot de passe");
    
    if($_POST['regPasswordInput'] !== $_POST['confPasswordInput']) {
        $error['regPasswordInput'] = "Les mots de passe ne correspondent pas";
    }
    
    $_POST['emailInput'] = checkInput("emailInput", "Vous n'avez pas mis votre adresse mail");
    
    if(!filter_var($_POST['emailInput'], FILTER_VALIDATE_EMAIL)) {
        $error = $_POST['emailInput'] = "L'adresse mail est invalide";
    }


}
?>

<div class="register-form">
    <form class="registerForm" action="./inc/validator.php" enctype="multipart/form-data" method="post">
        <label for="regLoginLabel">Nom d'utilisateur</label>
        <input type="text" name="regLoginInput" id="regLoginInput">
        <label for="regPasswordLabel">Mot de passe</label>
        <input type="text" name="regPasswordInput" id="passwordInput">
        <label for="confPasswordLabel">Confirmez le mot de passe</label>
        <input type="text" name="confPasswordInput" id="confPasswordInput">
        <label for="emailLabel">Adresse mail</label>
        <input type="text" name="emailInput" id="emailInput">
        <input type="submit" value="S'enregistrer">
    </form>
</div>
<?php
include('footer.php');
?>