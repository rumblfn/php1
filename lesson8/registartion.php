<?php
include("./DB_connection.php");
include("./logout.php");

session_start();
if (isset($_POST["register"])) {
    $login = strip_tags($_POST["email"]); 
    $password = strip_tags($_POST["password"]);
    if(strlen($password) > 7){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $hash = uniqid(rand(), true);
        mysqli_query($db, "INSERT INTO `users` (`email`, `password`, `hash`) VALUES ('$login', '$password', '$hash')");
        $result = mysqli_query($db, "SELECT * FROM `users` WHERE email = '$login' AND password = '$password'");
        $row = mysqli_fetch_assoc($result);
        $_SESSION["login"] = $login;
        $_SESSION["userId"] = $row["userId"];
        setcookie("hash", $hash, time() + 3600, '/');
        header("Location: /");
        die();
    } else { 
        die("Password should contain at least 8 characters!");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/2a29d8ae15.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    </head>

    <body>
    <div class="top">
                <div class="header_color">
                    <div class="container">
                        <div class="header">
                            <nav class="header_content_l">
                                <ul class="header_left">
                                    <li class="left"><a href="index.php"><img src="Pictures/heater_intro.svg" alt="intro"></a>
                                    </li>
                                    <li>
                                        <searcher></searcher>
                                        <!-- <div class="search_details">
                                        <form action="" class="search">
                                            <input placeholder="Search" class='search_input' type="text">
                                            <button class="search_button"></button>
                                        </form>
                                    </div> -->

                                        <!-- <details class="search_details">
                                        <summary class="search_summary"><img src="Pictures/loop.svg" alt=""></summary>
                                        <form action="" class="search">
                                            <input placeholder="Search" class='search_input' type="text">
                                            <button class="search_button"></button>
                                        </form>
                                    </details> -->
                                    </li>
                                </ul>
                            </nav>
                            <nav class="header_content_r">
                                <ul class="header_right">
                                    <li>
                                        <details class="menu_details">
                                            <summary class="summary_menu right rigth_l"><img src="Pictures/menu.svg" alt="">
                                            </summary>
                                            <div class="main_menu">
                                                <header class="menu_name">MENU</header>
                                                <details class="menu_block">
                                                    <summary class="menu_heading">MAN</summary>
                                                    <ul class="menu_list">
                                                        <li><a href='' class="menu_choice">Accessories</a></li>
                                                        <li><a href='' class="menu_choice">Bags</a></li>
                                                        <li><a href='' class="menu_choice">Denim</a></li>
                                                        <li><a href='' class="menu_choice">T-Shirts</a></li>
                                                    </ul>
                                                </details>
                                                <details class="menu_block">
                                                    <summary class="menu_heading">WOMAN</summary>
                                                    <ul class="menu_list">
                                                        <li><a href='' class="menu_choice">Accessories</a></li>
                                                        <li><a href='' class="menu_choice">Bags</a></li>
                                                        <li><a href='' class="menu_choice">Denim</a></li>
                                                        <li><a href='' class="menu_choice">T-Shirts</a></li>
                                                        <li><a href='' class="menu_choice">Shirts</a></li>
                                                    </ul>
                                                </details>
                                                <details class="menu_block">
                                                    <summary class="menu_heading">KIDS</summary>
                                                    <ul class="menu_list">
                                                        <li><a href='' class="menu_choice">Accessories</a></li>
                                                        <li><a href='' class="menu_choice">Bags</a></li>
                                                        <li><a href='' class="menu_choice">Denim</a></li>
                                                        <li><a href='' class="menu_choice">T-Shirts</a></li>
                                                        <li><a href='' class="menu_choice">Shirts</a></li>
                                                        <li><a href='' class="menu_choice">Bags</a></li>
                                                    </ul>
                                                </details>
                                                <div class="icon_box">
                                                    <div class="icon_boxes">
                                                        <a class='icon_links' href="registartion.php"><img src="Pictures/man.svg" alt="">
                                                            <p class="ad_box">Regictration</p>
                                                        </a>
                                                    </div>
                                                    <div class="icon_boxes">
                                                        <a class='icon_links' href="cart.php"><img src="Pictures/basket.svg" alt="">
                                                            <p class="ad_box">Cart</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </details>
                                    </li>
                                    <li class="carts"><a href="admin.php" style="color: white; text-decoration: none;">Admin</a></li>
                                    <li class="right product_icon"><a href="registartion.php"><img src="Pictures/man.svg" alt=""></a></li>
                                    <li class="right product_icon"><a href="login.php" style="color: white; text-decoration: none;">log in</a></li>
                                    <li class="carts"><a href="cart.php"><img src="Pictures/basket.svg" alt=""></a></li>
                                    <li class="carts"><a href="?logout" style="color: white; text-decoration: none;">Log out</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        <div class="content_catalog_top content_catalog_top2">
            <div class="container">
                <div class="catalog_header">
                    <header class="catalog_heading">REGISTRATION</header>
                </div>
                <div class="catalog_menu">
                </div>
            </div>
        </div>
        <div class="reg_top">
            <div class="container registration">



                <form class="registration_top" method="post">
                    <p class="reg_name">Your Data</p>
                    <input type="email" class="reg_input" name="email" value="admin@gmail.com" placeholder='Email'>
                    <input type="password" class="reg_input" name="password" value="12345678" placeholder='Password'>
                    <p class="usless_info">Please use 8 or more characters, with at least 1 number and a mixture of
                        uppercase and lowercase letters</p>
                    <input class="reg_button" name="register" value="JOIN NOW" type="submit">
                    <img src="Pictures/arrow_left_reg.svg" alt="">
                </form>
                <div class="registration_bottom">
                    <div class="reg_info">
                        <h3 class="reg_info_name">LOYALTY HAS ITS PERKS</h3>
                        <p class="registr_text reg_inform">Get in on the loyalty program where you can earn points and
                            unlock serious
                            perks. Starting with these as soon as you join:</p>
                        <div class="reg_paragraph"><img src="Pictures/tick.svg" alt="">
                            <p class="registr_text">15% off welcome offer</p>
                        </div>
                        <div class="reg_paragraph"><img src="Pictures/tick.svg" alt="">
                            <p class="registr_text">Free shipping, returns and exchanges on all orders

                            </p>
                        </div>
                        <div class="reg_paragraph"><img src="Pictures/tick.svg" alt="">
                            <p class="registr_text">$10 off a purchase on your birthday

                            </p>
                        </div>
                        <div class="reg_paragraph"><img src="Pictures/tick.svg" alt="">
                            <p class="registr_text">Early access to products</p>
                        </div>
                        <div class="reg_paragraph"><img src="Pictures/tick.svg" alt="">
                            <p class="registr_text">Exclusive offers & rewards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer_picture">
                <div class="container footer_container">
                    <div class="footer_cards">
                        <div class="footer__card">
                            <img class="footer_img" src="Pictures/footer_woman.png" alt="woman">
                            <p class='footer_card_paragraph'>“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a
                                pulvinar purus condimentum“</p>
                        </div>
                        <form action="#" class="footer_form">
                            <p class="form_heading">SUBSCRIPE</p>
                            <p class="form_paragraph">FOR OUR NEWLETTER AND PROMOTION</p>
                            <div class="form">
                                <input class="footer_input" type="email" placeholder="Enter Your Email">
                                <button class="footer_button">Subscripe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer_end">
                <div class="container container__footer">
                    <div class="rights">&copy; 2021 Brand All Rights Reserved.
                    </div>
                    <div class="links">
                        <div class="footer_links footer_links1"><a href="#" class="footer_links_images"><img src="Pictures/facebook.svg" class="footer_img1 footer_img2" alt=""></a>
                        </div>
                        <div class="footer_links footer_links2"><a href="#" class="footer_links_images"><img src="Pictures/inst.svg" class="footer_img" alt=""></a>
                        </div>
                        <div class="footer_links footer_links3"><a href="#" class="footer_links_images"><img src="Pictures/pint.svg" class="footer_img1 footer_img3" alt=""></a></div>
                        <div class="footer_links footer_links4"><a href="#" class="footer_links_images"><img src="Pictures/twitter.svg" class="footer_img" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </body>

</html>