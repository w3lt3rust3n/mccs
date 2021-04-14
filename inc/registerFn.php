<?php
require_once('./inc/pdo.php');

function insertUser($tbUser) {
    global $pdo;
    $rq = "INSERT INTO user(
        login, password, email)
        VALUES(:login, :password, :email)";
    $query = $pdo->prepare($rq);
    $query->bindValue(':login', $tbUser['login'], PDO::PARAM_STR);
    $query->bindValue(':password', $tbUser['password'], PDO::PARAM_STR);
    $query->bindValue(':email', $tbUser, PDO::PARAM_STR);
    $query->execute();
}

function selectUserBy($field, $value, $type) {
    global $pdo;
    $rq = "SELECT * FROM user WHERE " . $field . "=:" . $field;
    $query = $pdo->prepare($rq);
    $query->bindValue(':' . $field, $value, $type);
    $query->execute();
    $result = $query->fetch();
    return $result;
}


function checkInput() {

    
}