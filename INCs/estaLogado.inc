<?php
    if(!isset($_SESSION['user'])){
        $redirect = "login/login.php";
        header("location:$redirect");
    }
?>