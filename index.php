<?php
session_start();
 $_SESSION['role'] = 'role_user';
 $_SESSION['login'] = 'weltrusten';
//$_SESSION['role'] = 'anonymous';
//$_SESSION['login'] = '';
//$_SESSION['role'] = '';
//$_SESSION['login'] = '';
include("header.php");
include("home.php");
include("footer.php");
?>