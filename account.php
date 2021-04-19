<?php 

require_once("./inc/registerFn.php");
include("session.php");
include("header.php");
initSession();
$role = $_SESSION['role'];
$login = $_SESSION['login'];


echo "Hello ". $login . '<br>';