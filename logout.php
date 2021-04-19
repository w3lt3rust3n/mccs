<?php
    include("session.php");
    initSession();
    echo "Log out...";
    
    session_destroy();
    header("Location:index.php");
    die();
?>
