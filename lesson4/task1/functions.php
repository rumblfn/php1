<?php

function checkType($file)
{
    if($file['type'] !== "image/jpeg") {
        return false;
    }
    return true;
}

function checkSize($file)
{
    if($file["size"] > 4194304) {
        return false;
    }
    return true;
}

function getImages()
{
    return scandir('upload/small');
}

function resizer($file, $fileLink, $uploadSmallDir)
{
    $image = new SimpleImage();
    $image -> load($fileLink);
    $image -> resizeToWidth(500);
    $path = $uploadSmallDir . $file;
    $image -> save($path);
}