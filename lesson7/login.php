<?php

include('db_connect.php');
include('auth.php');
$message = '';

if(isset($_GET['email_not_exist'])) {
    $message = 'Пользователя с такой почтой не существует, попробуйте снова';
} elseif (isset($_GET['success'])) {
    $message = 'Успешный вход';
} elseif (isset($_GET['wrong_password'])) {
    $message = 'Неверный пароль';
} elseif (isset($_GET['not_loged'])) {
    $message = 'Вы не вошли в аккаунт';
}

if (isset($_POST['login'])) {
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $result = mysqli_fetch_array(mysqli_query($db, "SELECT password, id FROM `users` WHERE email = '$email'"));
    if (!$result) {
        header("Location: login.php?email_not_exist");
        die();
    }

    if (password_verify($password, $result[0])) {
        setcookie("login", 1, time()+3600);
        setcookie("user_id", $result[1], time()+3600);
        header("Location: login.php?success");
        die();
    } else {
        header("Location: login.php?wrong_password");
        die();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <script src="https://kit.fontawesome.com/7671f218f6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="top">
            <?php include('header.php') ?>
        </div>
        <div class="content">
            <header class="container header-content">
                <h1 class="catalog-header-left">REGISTRATION</h1>
            </header>
        </div>
        <section class="container registration-sect">
            <form action="" class="register-cart" method='post'>
                <div class="top-registration">
                    <p><?=$message?></p>
                </div>
                <div class="bottom-registration">
                    <h4 class="form_name-registration">Login details</h4>
                    <input class="form-item" type="email" placeholder="Email" name="email" required><br>
                    <input class="form-item" type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit" class="join_now" name="login">Login<i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
            <div class="form_discription">
                <a href="registration.php" style="text-decoration: underline; margin-top: 24px">
                    <h3 class="form-disc-name">Еще не зарегестрированы <i class="fas fa-long-arrow-alt-right"></i></h3>
                </a>
            </div>
        </section>
    </div>
    <footer>
        <?php include('components/footer_top.html'); ?>
		<?php include('components/footer_middle_bottom.html'); ?>
    </footer>
</body>

</html>