<?php
include "./DB_connection.php";
include "./logout.php";
include "./auth.php";
include "./make_order.php";
if (is_auth()){
    $userId = $_SESSION["userId"];
    $result = mysqli_query($db, "
        SELECT
            *
        FROM
            `catalogItems`
        WHERE `itemId` IN (SELECT `itemId` FROM `cart` WHERE `userId` = $userId AND `orderId` IS NULL);
    ");
    
} else {
    header("Location: login.php");
    die();
}
if(isset($_GET["delete"])){
    $itemId = $_GET["id"];
    $userId = $_SESSION["userId"];
    mysqli_query($db, "DELETE FROM `cart` WHERE `userId` = $userId AND `itemId` = $itemId");
    header("Location: cart.php");
    die();
}
$total_price = 0;


if(isset($_GET["checkout"])){
    $address = strip_tags($_GET["address"]);
    $city = strip_tags($_GET["city"]);
    $zip = strip_tags($_GET["zip"]);
    $userId = $_SESSION["userId"];
    $randomId = uniqid(rand(), true);
    mysqli_query($db, "UPDATE `cart` SET `orderId` = '$randomId' WHERE `userId` = $userId AND `orderId` IS NULL");
    mysqli_query($db, "INSERT INTO `orders`(`userId`, `address`, `city`, `zip`, `cartRefId`) VALUES ('$userId', '$address', '$city', '$zip', '$randomId')");
    header("Location: cart.php");
    die();
}





?>
<!DOCTYPE php>
<php lang="en">

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
                    <header class="catalog_heading">SHOPPING CART</header>
                </div>
                <div class="catalog_menu">
                </div>
            </div>
        </div>
        <div class="main_part">
            <div class="container part_cards">
                <div class="purchses">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['itemId'];
                        $img = base64_encode($row['image']);
                        $name = $row['name'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $total_price += $price;
                    ?>
                    <a href="product.php?id=<?= $id ?>" class="cart-link">
                        <div class="cards_carts">
                            <img src="data:image/jpeg;base64, <?= $img ?>" class="fig_images" alt="image">
                            <div class="cart_content">
                                <div class="cart_heading_box">
                                    <p class="cart_name"><?=$name?></p>
                                    <a href="?delete&id=<?= $id ?>" class="cross"><img class="cross_img" src="Pictures/cross.svg" alt=""></a>
                                </div>
                                <p class="text_cart">Price:<span class="cart_price"> <?= $price?>$</span></p>
                                <p class="text_cart">Color:<span> Red</span></p>
                                <p class="text_cart">Size:<span> Xl</span></p>
                                <div class="cart_quantity_box">
                                    <p class="text_cart">Quantity:</p>
                                    <div class="quantity">
                                        <input class="cart_number" type="number" min="1" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                    <div class="cont_buttons">
                        <a href="" class="continue_buttons">CLEAR SHOPPING CART</a>
                        <a href="catalog.php" class="continue_buttons">CONTINUE SHOPPING</a>
                    </div>
                </div>
                <form class="form_cart" method="get">
                    <div class="cart_form">
                        <h3 class="cart_form_heading">SHIPPING ADRESS</h3>
                        <input type="text" name="address" class="cart_form_input" placeholder="Address">
                        <input type="text" name="city" class="cart_form_input" placeholder="City">
                        <input type="text" name="zip" class="cart_form_input" placeholder="Postcode/Zip">
                        <button class="catr_form_button">GET A QUOTE</button>
                    </div>
                    <div class="form_total_price">
                        <p class="sub_total">SUB TOTAL <span class="sub_total_price"><?=$total_price?>$</span></p>
                        <p class="grand_total">GRAND TOTAL <span class="grand_total_price"><?=$total_price?>$</span></p>
                        <div class="button_cart_box">
                            <input type="submit" name="checkout" class="cart_button" value="PROCEED TO CHECKOUT"/>
                        </div>
                    </div>
                </form>
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

</php>