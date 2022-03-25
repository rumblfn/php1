<?php 

include('classSimpleImage.php');
include('functions.php');
include('config.php');
include('db_connect.php');

$messages = [
    'ok' => 'Файл загружен',
    'error' => 'Ошибка загрузки',
    'file_type_error' => 'Мы принимаем только картинки формата JPEG',
    'size_error' => 'Размер картинки больше 4мб',
    'default' => null
];

$message = null;

if (!empty($_FILES)) {
    $check_type = checkType($_FILES['myfile']);
    $check_size = checkSize($_FILES["myfile"]);

    if (!$check_type) {
        $message =  'file_type_error';
    }

    if (!$check_size['status']) {
        $message =  'size_error';
    }

    if ($check_type && $check_size) 
    {
        $basename = basename($_FILES['myfile']['name']);
        $path = $path_to_big_images . $basename;
        $origin = $_FILES['myfile']["tmp_name"];

        resizer($basename, $origin, $path_to_small_images);

        if (move_uploaded_file($origin, $path)) {
            $size = $check_size['size'];
            $query = mysqli_query($db, "INSERT INTO `images` (name, size) VALUES ('$basename', '$size')");

            $message =  "ok";
        } else {
            $message =  "error";
        }
    }

    header("Location: index.php?status=$message");
    die();
}

// if (array_key_exists('status', $_GET)) {
//     $message = $messages[$_GET['status']];
// }

$message = $messages[$_GET['status'] ?? "default"];

$images = mysqli_query($db, "SELECT * FROM `images`");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Gallery</title>
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
            <?php while ($row = mysqli_fetch_assoc($images)):?>
                <a href="get_image_by_id.php?id=<?=$row['id']?>">
                    <img class="img-gallery" src=<?=$path_to_small_images . $row['name']?> alt=<?=$row['name']?>/>
                </a>
            <?php endwhile?>
        </div>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>