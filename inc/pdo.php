<?php
try {
    // host= url de ma base de donnée
    // dbname= nom de ma base de donée
    // 'root' login mysql
    // '' mdp mysql
    $pdo = new PDO('mysql:host=localhost;dbname=mccs', 'root', '', 
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
}
catch(PDOException $e) {
    echo "Erreur de connexion : ".$e->getMessage();
}