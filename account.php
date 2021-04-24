<?php
session_start();
require_once("./inc/registerFn.php");

include("./inc/header.php");

//$role = $_SESSION['role'];
$login = $_SESSION['login'];


echo "Hello " . $login . '<br>';
