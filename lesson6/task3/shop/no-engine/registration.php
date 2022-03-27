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
            <?php include('components/header.html') ?>
        </div>
        <div class="content">
            <header class="container header-content">
                <h1 class="catalog-header-left">REGISTRATION</h1>
            </header>
        </div>
        <section class="container registration-sect">
            <form action="#" class="register-cart">
                <div class="top-registration">
                    <h4 class="form_name-registration">Your Name</h4>
                    <input class="form-item" type="text" placeholder="First Name"><br>
                    <input class="form-item" type="text" placeholder="Last Name">
                    <div class="select-gender">
                        <input type="radio" id="m" name="m" value="male">
                        <p>Male</p>
                        <input type="radio" id="f" name="f" value="female">
                        <p>Female</p>
                        <input type="radio" id="o" name="o" value="other">
                        <p>Other</p>
                    </div>
                </div>
                <div class="bottom-registration">
                    <h4 class="form_name-registration">Login details</h4>
                    <input class="form-item" type="text" placeholder="Email"><br>
                    <input class="form-item" type="text" placeholder="Password">
                    <p class="bottom-registration-p">Please use 8 or more characters, with at least 1 number and a
                        mixture of uppercase and lowercase
                        letters</p>
                </div>
                <a href="#" class="join_now">JOIN NOW<i class="fas fa-long-arrow-alt-right"></i></a>
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