<?php

include('config.php');
include('db_connect.php');

$id =  (int)$_GET['id'];
$image_name = mysqli_fetch_row(mysqli_query($db, "SELECT name FROM `images` WHERE id = $id"))[0];
$page_not_found = false;

if ($image_name === null) {
    $page_not_found = true;
} else {
    mysqli_query($db, "UPDATE `images` SET views = views + 1 WHERE id = $id");
    $image_views = mysqli_fetch_row(mysqli_query($db, "SELECT views FROM `images` WHERE id = $id"))[0];
}

?>
<?php if ($page_not_found): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/not_found_page_style.css">
</head>
<body>
    <div class="mainbox">
        <div class="err">4</div>
        <i class="far fa-question-circle fa-spin"></i>
        <div class="err2">4</div>
        <div class="msg">Maybe this page moved? Got deleted?<p>Let's go <a href="index.php">home</a> and try from there.</p></div>
    </div>
</body>
</html>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Selected image</title>
</head>
<body>
    <div class="container">
        <a href="index.php" class="gallery-link custom-file-upload label-insert">
            Обратно в галлерею
        </a>
        <div class="image-box">
            <img class="selected-image" 
                src=<?=$path_to_big_images . $image_name?> 
                alt=<?=$image_name?>>
        </div>
        <h4>
            Количество просмотров: <?=$image_views?>
        </h4>
    </div>
</body>
</html>
<?php endif ?>