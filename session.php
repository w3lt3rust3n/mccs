<?php

function initSession()
{
    global $test;
    var_dump($test);
    
    echo "Init session...<br>";
    if (session_status() == PHP_SESSION_NONE) {
        echo "Starting session <br>";
        session_start();
        
        print_r($test);
        $_SESSION['login'] = $test['login'];
        $_SESSION['role'] = $test['role'];
        echo "Session started...";
        print_r($_SESSION);
        return $_SESSION['role']['login'];
        //return $_SESSION['role']['login'];
        //echo "login is " . $_SESSION['login'] . "<br>";
        //echo "role is " . $_SESSION['role'] . "<br>";
    } else {
        echo "Session already alive...<br>";
        // $userlog['login'] = selectUserForLogin("login");
        // $_SESSION['role'] = selectUserForLogin("role");
        print_r($_SESSION);
        return $_SESSION['role']['login'];

        // echo "login is " . $_SESSION['login'] . "<br>";
        // echo "role is " . $_SESSION['role'] . "<br>";
    }
}

?>