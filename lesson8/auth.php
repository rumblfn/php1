<?php 
include "./DB_connection.php";
session_start();
function is_auth(){
    global $db;
    if(isset($_COOKIE["hash"]) AND !$_SESSION["login"]){
        $hash = $_COOKIE["hash"];
        $result = mysqli_query($db, "SELECT * FROM `users` WHERE `hash` = '$hash'");
        $row = mysqli_fetch_assoc($result);
        $user = $row["email"];
        if (!empty($user)){
            $_SESSION["login"] = $user;
            $_SESSION["userId"] = $row["userId"];
        }
    }
    if(isset($_SESSION["login"])){
        return true;
    } else {
        return false;
    }
}