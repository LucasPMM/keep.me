<?php
    if(isset($_SESSION['user'])){
        $redirect = "../index.php";
        header("location:$redirect");
    }
?>