<?php
    session_start();
    // var_dump($_SESSION["login"]);
    if(isset($_GET["logout"])){
        unset($_SESSION["login"]);
        unset($_SESSION["userId"]);
        setcookie("hash", $hash, time() - 3600, '/');
        // die($_SESSION["login"]);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        die();
    }
?>