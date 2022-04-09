<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include("./DB_connection.php");
include("./logout.php");

$id = $_GET["id"];

$result = mysqli_query($db, "SELECT * FROM `catalogItems` WHERE itemId = $id");
$row = mysqli_fetch_assoc($result);

$id = $row['itemId'];
$img = base64_encode($row['image']);
$name = $row['name'];
$description = $row['description'];
$price = $row['price'];
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
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        <div class="content_catalog_top">
            <div class="container">
                <div class="catalog_header">
                    <header class="catalog_heading">NEW ARRIVALS </header>
                    <nav class="catalog_navigation">
                        <a href="#" class="catalog_nav">HOME</a>
                        <a href="#" class="catalog_nav">MEN</a>
                        <a href="#" class="catalog_nav last_nav">NEW ARRIVALS</a>
                    </nav>
                </div>
                <div class="catalog_menu">
                </div>
            </div>
        </div>
        <div class="product_img">
            <div class="container">
                <div class="product_container_img">
                    <a href="" class="product_arrow_img">
                        <img class='product_arrow__imgl' src="Pictures/arrow_left.png" alt="">
                    </a>
                    <img class='product_image' src="data:image/jpeg;base64, <?= $img ?>" alt="">
                    <a href="" class="product_arrow_img">
                        <img class='product_arrow__imgr' src="Pictures/arrow_rigth.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
        <div class="product_content container_product">
            <div class="product_container">
                <div class="product_container_top">
                    <p class="top_product_heading">MEN COLLECTION</p>
                    <div class="product_line"></div>
                    <p class="top_heading_bottom"><?= $name ?></p>
                    <p class="bottom_heading"><?= $description ?></p>
                    <p class="product_price">$<?= $price ?></p>
                </div>
                <div class="product_container_bottom">
                    <div class="product_container__top">
                        <details class="size_details size_details2">
                            <summary class="product_summary product_summary1">CHOOSE COLOR</summary>
                            <div class="details_content check_box">
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block1"></span>
                                </label>
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block2"></span>
                                </label>
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block3"></span>
                                </label>
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block4"></span>
                                </label>
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block5"></span>
                                </label>
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block6"></span>
                                </label>
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block7"></span>
                                </label>
                                <label>
                                    <input class='check_input' type="checkbox">
                                    <span class="checkbox_block checkbox_block8"></span>
                                </label>
                            </div>
                        </details>
                        <details class="size_details size_details2">
                            <summary class="product_summary">CHOOSE SIZE</summary>
                            <div class="details_content check_box details_content2">
                                <label>
                                    <input class='' type="checkbox">
                                    <span>35.5</span>
                                </label>
                                <label>
                                    <input class='' type="checkbox">
                                    <span>36.5</span>
                                </label>
                                <label>
                                    <input class='' type="checkbox">
                                    <span>37.5</span>
                                </label>
                                <label>
                                    <input class='' type="checkbox">
                                    <span>38.5</span>
                                </label>
                                <label>
                                    <input class='' type="checkbox">
                                    <span>39.5</span>
                                </label>
                                <label>
                                    <input class='' type="checkbox">
                                    <span>40.5</span>
                                </label>
                                <label>
                                    <input class='' type="checkbox">
                                    <span>41.5</span>
                                </label>
                                <label>
                                    <input class='' type="checkbox">
                                    <span>42.5</span>
                                </label>
                            </div>
                        </details>
                        <details class="product_container_filter size_details">
                            <summary class="product_summary">QUANTITY</summary>
                            <div class="details_content check_box details_content3">
                                <button class="number-minus min-max_button" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>
                                <input class="number_box" type="number" min="1" value="1" readonly>
                                <button class="number-plus min-max_button" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>
                            </div>
                        </details>
                    </div>
                    <a href='#' class="product_container_button">
                        <img class="add_to_img" src="Pictures/product_cart.svg" alt="">
                        <p class="product_button_text">Add to Cart</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="what-we-do">
            <div class="container">
                <div class="shop">
                    <div class="card_div">
                        <a href="product.php" class="figure">
                            <img src="Pictures/shop1.png" class="fig_images" alt="">
                            <div class="figcaption">
                                <p class="figure_header">ELLERY X M'O CAPSULE</p>
                                <p class="figure_paragraph">Known for her sculptural takes on traditional tailoring,
                                    Australian arbiter of cool Kym
                                    Ellery teams up with Moda Operandi.</p>
                                <p class="figure_price">$52.00</p>
                            </div>
                        </a>
                        <div class="add-box">
                            <a href="cart.php" class="add">
                                <img src="Pictures/add_cart.svg" class="add-cart" alt="">
                                <p>Add to Cart</p>
                            </a>
                        </div>
                    </div>



                    <div class="card_div">
                        <a href="product.php" class="figure">
                            <img src="Pictures/shop2.png" class="fig_images" alt="">
                            <div class="figcaption">
                                <p class="figure_header">ELLERY X M'O CAPSULE</p>
                                <p class="figure_paragraph">Known for her sculptural takes on traditional tailoring,
                                    Australian arbiter of cool Kym
                                    Ellery teams up with Moda Operandi.</p>
                                <p class="figure_price">$52.00</p>
                            </div>
                        </a>
                        <div class="add-box">
                            <a href="cart.php" class="add">
                                <img src="Pictures/add_cart.svg" class="add-cart" alt="">
                                <p>Add to Cart</p>
                            </a>
                        </div>
                    </div>

                    <div class="card_div">
                        <a href="product.php" class="figure">
                            <img src="Pictures/shop3.png" class="fig_images" alt="">
                            <div class="figcaption">
                                <p class="figure_header">ELLERY X M'O CAPSULE</p>
                                <p class="figure_paragraph">Known for her sculptural takes on traditional tailoring,
                                    Australian arbiter of cool Kym
                                    Ellery teams up with Moda Operandi.</p>
                                <p class="figure_price">$52.00</p>
                            </div>
                        </a>
                        <div class="add-box">
                            <a href="cart.php" class="add">
                                <img src="Pictures/add_cart.svg" class="add-cart" alt="">
                                <p>Add to Cart</p>
                            </a>
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

</php>