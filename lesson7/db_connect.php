<?php

$db = @mysqli_connect(
    "127.0.0.1:8889", # addr:port
    "clothes_shop_user", # user_name
    "12345", # user_password
    "clothes_shop" # database_name
) or die("Ошибка " . mysqli_connect_error());