<?php
require_once("./inc/pdo.php");
////////////////////////////// function de requetes MySQL //////////////////////////////////////

function insertUser($tbUser)
{
    global $pdo;
    //echo "Dumping POST insertUser".'<br>';
    //var_dump($_POST);
    $role = "role_user";
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    $rq = "INSERT INTO user(login,pwd,email,role)
            VALUES
                ( 
                    '$login',
                    '$pwd',
                    '$email',
                    '$role'
                    )";
    //(:role,:login,:pwd,:email)";
    $query = $pdo->prepare($rq);

    $query->execute();
}

function selectUserBy($field, $value, $type)
{
    global $pdo;
    $rq = "SELECT * FROM user WHERE " . $field . "=:" . $field;
    $query = $pdo->prepare($rq);
    $query->bindValue(':' . $field, $value, $type);
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function selectUserForLogin($login, $pwd)
{
    global $pdo;

    $rq = "SELECT * FROM user WHERE login = '$login'";
    $query = $pdo->prepare($rq);
    $query->execute();
    $result = $query->fetch();
    if ($result) {
        if (password_verify($pwd, $result['pwd'])) {
            return $result;
        } else {
            $result = [];
            echo "pwd incorrect";
        }
    } else {
        $result = [];
        echo "login incorrect";
    }
}

//////////////////////////////// function courrantes /////////////////////////////

function protectUrl($role)
{
    switch ($role) {
        case 'role_admin':
            if (!empty($_SESSION['role'])) {
                if ($_SESSION['role'] !== $role) {
                    header("Location:index.php");
                    die;
                }
            } else {
                header("Location:index.php");
                die;
            }
            break;
        case 'role_user':
            if (empty($_SESSION['role'])) {
                header("Location:account.php");
                die;
            }
            break;
        default:
            # code...
            break;
    }
}

function checkInput($input, $txtErreur)
{
    // pour pouvoir utiliser mon tableau d'erreur à l'interieur de ma fonction
    // je le déclare en global
    global $erreur;
    // strlen me permet de verifier que ma chaine $input (string)
    // contient bien au moins 1 caractère
    if (strlen($_POST[$input]) > 0) {
        // trim() supprime tous les caractères invisibles de ma chaine
        return trim(strip_tags($_POST[$input]));
    } else {
        // j'ajoute une nouvelle erreur à mon tableau en cas de champ vide
        $erreur[$input] = $txtErreur;
    }
}
