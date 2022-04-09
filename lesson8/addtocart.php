<?php
include "./auth.php";
if(isset($_GET["addtocart"])){
    if(is_auth()){
        $userId = $_SESSION["userId"];
        $itemId = $_GET["itemId"];
        mysqli_query($db, "INSERT INTO `cart` (userId, itemId) VALUES ($userId, $itemId)");
        header("Location: catalog.php");
        die();
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        die();
    }
}
?>