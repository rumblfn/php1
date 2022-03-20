<?php
include('classSimpleImage.php');
include('functions.php');

$messages = [
    'ok' => 'Файл загружен',
    'error' => 'Ошибка загрузки',
    'file_type_error' => 'Мы принимаем только картинки формата JPEG',
    'size_error' => 'Размер картинки больше 4мб'
];

$message =  null;

if (!empty($_FILES)) {
    $check_type = checkType($_FILES['myfile']);
    $check_size = checkSize($_FILES["myfile"]);

    if (!$check_type) {
        $message =  'file_type_error';
    }

    if (!$check_size) {
        $message =  'size_error';
    }

    if ($check_type && $check_size) 
    {
        $uploadBigDir = 'upload/big/';
        $uploadSmallDir = 'upload/small/';
        $basename = basename($_FILES['myfile']['name']);
        $path = $uploadBigDir . $basename;
        $origin = $_FILES['myfile']["tmp_name"];

        resizer($basename, $origin, $uploadSmallDir);

        if (move_uploaded_file($origin, $path)) {
            $message =  "ok";
        } else {
            $message =  "error";
        }
    }

    header("Location: index.php?status=$message");
    die();
}

if (array_key_exists('status', $_GET)) {
    $message = $messages[$_GET['status']];
}

$images = getImages();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Галлерея</h1>
        <h2 class="sub-title"><?=$message?></h2>
        <form method="post" enctype="multipart/form-data" action="index.php">
            <label class="custom-file-upload label-select">
                <input type="file" name="myfile" class="input-file"/>
                Выберите файл
            </label>
            <label class="custom-file-upload label-insert">
                <input type="submit" value="Загрузить" class="send-file">
                Загрузить
            </label>
        </form>
        <div class="gallery">
            <?php foreach ($images as $image):?>
                <?php if (mb_substr($image, 0, 1) !== '.'): 
                    $path_to_image = "upload/small/" . $image;
                    $path_to_big_image = "upload/big/" . $image;
                ?>
                    <a href=<?=$path_to_big_image?>>
                        <img src=<?=$path_to_image?> alt=<?=$image?>/>
                </a>
                <?php endif?>
            <?php endforeach?>
        </div>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>