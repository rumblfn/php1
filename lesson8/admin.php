<?php
    include "DB_connection.php";
    include "./auth.php";
    if(is_auth() AND $_SESSION["login"] === "admin@gmail.com"){

    } else {
        die("You are not admin!");
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
                    <header class="catalog_heading">ALL ORDERS</header>
                </div>
                <div class="catalog_menu">
                </div>
            </div>
        </div>
        <div class="main_part">
        <?php
            $result = mysqli_query($db, "
            SELECT DISTINCT
                `orders`.`address`,
                `orders`.`city`,
                `orders`.`zip`,
                `users`.`email`
            FROM `cart`
            LEFT JOIN `orders`
                ON `cart`.`orderId` = `orders`.`cartRefId`
            LEFT JOIN `users`
                ON `users`.`userId` = `cart`.`userId`
            ");
            while ($row = mysqli_fetch_assoc($result)) {
                if (!$row['address']){
                    continue;
                } else {
                    $address = $row['address'];
                    $city = $row['city'];
                    $zip = $row['zip'];
                    $email = $row['email'];
                }
            ?>
            <div class="card_div">
                <div class="figure">
                    <div class="figcaption">
                        <p class="figure_header"><span>email: </span><?= $email ?></p>
                        <p class="figure_paragraph"><span>address: </span><?= $address ?></p>
                        <p class="figure_paragraph"><span>city: </span><?= $city ?></p>
                        <p class="figure_paragraph"><span>zip: </span><?= $zip ?></p>
                    </div>
                </div>
                <div class="add-box">
                    <a href="?addtocart&itemId=<?= $id ?>" class="add">
                        <img src="Pictures/add_cart.svg" class="add-cart" alt="">
                        <p>Add to Cart</p>
                    </a>
                </div>
            </div>
            <?php } ?>
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