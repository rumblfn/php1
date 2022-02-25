<?php
    $h1_body = "Первый способ";
    $title = "Страница №93123";
    $current_year = date("Y");

    $content = file_get_contents("index.html");

    $content = str_replace("{{ h1_body }}", $h1_body, $content);
    $content = str_replace("{{ title }}", $title, $content);
    $content = str_replace("{{ current_year }}", $current_year, $content);

    echo $content;
?>