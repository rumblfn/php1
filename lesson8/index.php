<?php
include "DB_connection.php";
include "./logout.php";
include "./addtocart.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styes.css">
        <script src="https://kit.fontawesome.com/2a29d8ae15.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 

    </head>

    <body>
        <div id=app>
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
            <div class="top_2">
                <div class="container top-box">
                    <div class="do_info">
                        <img src="Pictures/top_man.png" alt="">
                        <div class="top_heading">
                            <div class="line"></div>
                            <header class="top_text">
                                <p class="text_top">THE BRAND</p>
                                <p class="text_bottom">OF LUXERIOUS <span class="text_right">FASHION</span></p>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
            <div class="what-we-do">
                <div class="container">
                    <div class="do_images">
                        <a href='#' class="image1 images index_img">
                            <img src="Pictures/for_women.png" alt="image">
                            <div class="image_text">
                                <p class="discont">30% off</p>
                                <p class="for_who do_picture1">FOR WOMEN</p>
                            </div>
                        </a>
                        <a href='#' class="image2 images index_img">
                            <img src="Pictures/for_men.png" alt="image">
                            <div class="image_text">
                                <p class="discont">HOT DEAL</p>
                                <p class="for_who do_picture2">FOR MEN</p>
                            </div>
                        </a>
                        <a href='#' class="image3 images index_img">
                            <img src="Pictures/for_kids.png" alt="image">
                            <div class="image_text">
                                <p class="discont">NEW ARRIVALS</p>
                                <p class="for_who do_picture3">FOR KIDS</p>
                            </div>
                        </a>
                    </div>
                    <div class="do_image">
                        <figure class="image4 images">
                            <img src="Pictures/accesories.png" alt="image">
                            <div class="image_text4">
                                <p class="discont">LUXIROUS & TRENDY</p>
                                <p class="for_who do_picture4">ACCESORIES</p>
                            </div>
                        </figure>
                    </div>
                    <div class="shop">
                        <div class="shop_heading">
                            <p class="heading_top">Fetured Items</p>
                            <p class="heading_bottom">Shop for items based on what we featured in this week</p>
                        </div>
                        <?php include "./content.php" ?>
                        <div class="shop_button">
                            <div class="shop__button">
                                <a class="shop_button_link" href="catalog.php">Browse All Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="footer_top">
                        <figure class="footer_card">
                            <img src="Pictures/lorrie.svg" alt="delivery">
                            <p class='footer_heading footer_heading1'>Free Delivery</p>
                            <p class="footer_paragraph">Worldwide delivery on all. Authorit tively morph
                                next-generation innov
                                tion
                                with extensive models.
                            </p>
                        </figure>
                        <figure class="footer_card">
                            <img src="Pictures/percent.png" alt="Sales">
                            <p class='footer_heading footer_heading2'>Sales & discounts</p>
                            <p class="footer_paragraph">Worldwide delivery on all. Authorit tively morph
                                next-generation innov
                                tion
                                with extensive models.
                            </p>
                        </figure>
                        <figure class="footer_card">
                            <img src="Pictures/crone.png" alt="Quality">
                            <p class='footer_heading3 footer_heading'>Quality assurance</p>
                            <p class="footer_paragraph">Worldwide delivery on all. Authorit tively morph
                                next-generation innov
                                tion
                                with extensive models.
                            </p>
                        </figure>
                    </div>
                </div>
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
        </div>



    </body>



</html>