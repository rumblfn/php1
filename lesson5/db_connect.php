<?php

$db = @mysqli_connect(
    "127.0.0.1:8889", # addr:port
    "gallery_user", # user_name
    "12345", # user_password
    "gallery_php1" # database_name
) or die("Ошибка " . mysqli_connect_error());