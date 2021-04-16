<?php
session_start();
require_once("./inc/registerFn.php");
include("header.php");

if (!empty($_POST)) {
    $erreur = [];
    // si login et password ne sont pas vide
    $_POST['login'] = verifInput("login", "Vous n'avez pas rempli le champ login.");
    $_POST['pwd'] = verifInput("pwd", "Vous n'avez pas rempli le champ pwd.");
    if (count($erreur) === 0) {
        
        $userLog = selectUserForLogin($_POST['login'],$_POST['pwd']);
        
        if($userLog){
               $_SESSION['login'] = $userLog['login'];
            $_SESSION['role'] = $userLog['role'];
            header("Location:home.php");
        } else {
            echo "Vous êtes pas le bon utilisateur";
        }
    }
}

?>
<form action="login.php" method="post" name="formLogin">

    <input type="text" name="login" id="login" placeholder="Login">
    <div class="inputError"></div>
    <!-- 
            Bonus show hide password jQuery :(
            https://codepen.io/Sohail05/pen/yOpeBm 
        -->
    <input type="text" name="pwd" id="pwd" placeholder="Mot de Passe">
    <div class="inputError"></div>
    <input type="submit" value="envoyer">

</form>
<?php
include("footer.php");