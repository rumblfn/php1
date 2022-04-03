<?php

if ($_COOKIE['login'] && $_COOKIE['user_id'])
{
    $login = true;
    $user_id = $_COOKIE['user_id'];
    setcookie("login", 1, time()+3600);
    setcookie("user_id", $_COOKIE['user_id'], time()+3600);
}