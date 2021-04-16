<?php
session_start();
require_once("./inc/registerFn.php");
include("header.php");
require_once("./inc/pdo.php"); //ne sert à rien déjà appelé dans fonctions.php
// je teste l'existance de données post
$erreur = [];
if (!empty($_POST)) {
    // autre methode pour traiter mes entrées
    /* for($i=0;$i<count($_POST);$i++){
         $_POST[$i] = verifInput("nom", "Vous n'avez pas rempli le champ nom.");
   } */
    
    $_POST['login'] = verifInput("login", "Vous n'avez pas rempli le champ login.");
    $_POST['pwd'] = verifInput("pwd", "Vous n'avez pas rempli le champ pwd.");
    $_POST['pwd2'] = verifInput("pwd2", "Vous n'avez pas rempli le champ pwd2.");
    if ($_POST['pwd'] !== $_POST['pwd2']) {
        $erreur["pwd2"] = "Les 2 passwords ne sont pas identiques";
    }
    $_POST['email'] = verifInput("email", "Vous n'avez pas rempli le champ email.");
    // filter_var cf php.net ????
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erreur["email"] = "L'adresse email n'est pas valide'";
    }
    
    if (selectUserBy("login", $_POST['login'], PDO::PARAM_STR)) {
        $erreur['login'] = "Ce login existe déjà";
    } 
    if (selectUserBy("email", $_POST['email'], PDO::PARAM_STR)) {
        $erreur['email'] = "Cet email est déjà enregitré!";
    }
    //var_dump($erreur);
    if (count($erreur) === 0) {

        //$hashPwd = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
        $_POST['pwd'] = password_hash($_POST['pwd'], PASSWORD_ARGON2ID);
        insertUser($_POST);
        // mon utilisateur est bien enregistré
        // je rentre ses informations dans la $_SESSION
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['role'] = "role_user";
    }
}
?>
<div id="formUser">
    <h1>Enregistrez-vous!</h1>
    <form class="formulaire" action="registrer.php" method="post">
        <input type="text" name="login" id="login" placeholder="Login"
        <?php
        if(!empty($_POST['login']) && strlen($_POST['login'])>0){
            echo "value='".$_POST['login']."'";
            } ?>
        >
        <?php
            if (array_key_exists('login', $erreur)) {
                echo "<div class='inputError'>".$erreur['login']."</div>";
            }
            ?>
        
        <div class="inputError"></div>
        <!-- 
            Bonus show hide password jQuery :(
            https://codepen.io/Sohail05/pen/yOpeBm 
        -->
        <input type="text" name="pwd" id="pwd" placeholder="Mot de Passe">
        <div class="inputError"></div>
        <input type="text" name="pwd2" id="pwd2" placeholder="Confirmer le mot de passe">
        <div class="inputError"></div>
        <input type="email" name="email" id="email" placeholder="Email">
        <div class="inputError"></div>
        <input type="submit" value="Envoyer">
    </form>
</div>
<?php
include("footer.php");
?>
