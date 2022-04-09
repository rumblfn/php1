<?php

include('db_connect.php');
include('auth.php');
$message = '';

if(isset($_GET['email_exist']))
{
    $message = 'Пользователь с такой почтой существует';
}

if (isset($_POST['registration'])) {
    $first_name = strip_tags($_POST['first_name']);
    $last_name = strip_tags($_POST['last_name']);
    $gender = strip_tags($_POST['gender']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (mysqli_fetch_row(mysqli_query($db, "SELECT * FROM `users` WHERE email = '$email'"))) {
        header("Location: registration.php?email_exist");
        die();
    }
    
    if (mysqli_query($db, "INSERT INTO `users` (name, surname, gender, email, password) VALUES ('$first_name', '$last_name', '$gender', '$email', '$hashed_password')")) {
        header("Location: login.php");
        die();
    };
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
                    <h4 class="form_name-registration">Your Name</h4>
                    <input class="form-item" type="text" name="first_name" required placeholder="First Name"><br>
                    <input class="form-item" type="text" name="last_name" required placeholder="Last Name">
                    <div class="select-gender">
                        <input type="radio" id="m" name="gender" value="male">
                        <label for='m'>Male</label>
                        <input type="radio" id="f" name="gender" value="female">
                        <label for='f'>Female</label>
                        <input type="radio" id="o" name="gender" value="other">
                        <label for='o'>Other</label>
                    </div>
                </div>
                <div class="bottom-registration">
                    <h4 class="form_name-registration">Login details</h4>
                    <input class="form-item" type="email" placeholder="Email" name="email" required><br>
                    <input class="form-item" type="password" placeholder="Password" name="password" required>
                    <p class="bottom-registration-p">Please use 8 or more characters, with at least 1 number and a
                        mixture of uppercase and lowercase
                        letters</p>
                </div>
                <button type="submit" class="join_now" name="registration">JOIN NOW<i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
            <div class="form_discription">
                <h3 class="form-disc-name">LOYALTY HAS ITS PERKS</h3>
                <p class="form-disc-top-p">Get in on the loyalty program where you can earn points and unlock serious
                    perks. Starting with these
                    as soon as you
                    join:</p>
                <p class="form-top-text"><img src="img/check.svg" alt="ch"> 15% off welcome offer</p>
                <p class="form-text"><img src="img/check.svg" alt="ch"> Free shipping, returns and exchanges on all orders</p>
                <p class="form-text"><img src="img/check.svg" alt="ch"> $10 off a purchase on your birthday</p>
                <p class="form-text"><img src="img/check.svg" alt="ch"> Early access to products</p>
                <p class="form-text"><img src="img/check.svg" alt="ch"> Exclusive offers & rewards</p>
            </div>
        </section>
    </div>
    <footer>
		<?php include('components/footer_middle_bottom.html'); ?>
    </footer>
</body>

</html>