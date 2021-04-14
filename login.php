<?php
include('header.php');
?>

<div class="login-form">
    <form class="loginForm" action="index.php" enctype="multipart/form-data" method="post">
        <label for="loginLabel">username</label>
        <input type="text" name="loginInput" id="loginInput">
        <label for="passwordLabel">password</label>
        <input type="text" name="passwordInput" id="passwordInput">
        <input type="submit" value="log in">
    </form>
</div>