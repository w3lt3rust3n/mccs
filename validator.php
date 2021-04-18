<?php
// Pour executer des requetes mysql j'ai besoin dans ce fichier d'appeler ma connexion à la bdd
require_once('./inc/pdo.php');
require_once('./inc/registerFn.php');
//phpinfo(); permet de connaitre les spec du serveur ex:taille maximal des fichiers uploadés
$erreur = [];
// $_FILES permet de stocker les fichiers uploadés (input type="file")

// $_POST permet de stocker toutes les autres formes de données
// envoyées par un formulaire (method="post")
var_dump($_POST);
if (!empty($_POST)) {
    // Gestion des données du POST
    // la fonction verifInput va être partagée entre plusieurs formulaires : DRY!!!!
    // je la partage sur fonctions.php
    /* function verifInput($input, $txtErreur)
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
    } */
    $login = checkInput("regLoginInput", "Le champ nom d'utilisateur est vide");
    $pwd = checkInput("regPasswordInput", "Le champ Mot de passe est vide");
    $email = checkInput("regEmailInput", "Le champ email est vide");
    // is_int() me permet de determiner si ma var est bien de type int

    if (!$result) {
        $rq = "INSERT INTO user(login,password,email)
            VALUES
            (:regLoginInput,:regPasswordInput,:regEmailInput";
        $query = $pdo->prepare($rq);
        $query->bindValue(':regLoginInput', $login, PDO::PARAM_STR);
        $query->bindValue(':regPasswordInput', $pwd, PDO::PARAM_STR);
        $query->bindValue(':regEmailInput', $email, PDO::PARAM_STR);

        $query->execute();
    } else {
        // erreur utilisateur
        $erreur = serialize($erreur);
        header("Location:../formulaire.php?er=$erreur");
    }
}
