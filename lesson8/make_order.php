<?php 
include "DB_connection.php";
if(isset($_GET["checkout"])){
    $address = strip_tags($_GET["address"]);
    $city = strip_tags($_GET["city"]);
    $zip = strip_tags($_GET["zip"]);
    $userId = $_SESSION["userId"];
    $randomId = uniqid(rand(), true);
    mysqli_query($db, "UPDATE `cart` SET `orderId` = '$randomId' WHERE `userId` = $userId AND `orderId` IS NULL");
    mysqli_query($db, "INSERT INTO `orders`(`userId`, `address`, `city`, `zip`, `cartRefId`) VALUES ('$userId', '$address', '$city', '$zip', '$randomId')");
    header("Location: cart.php");
    die();
}