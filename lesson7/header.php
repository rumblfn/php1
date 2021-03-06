<?php 

include('auth.php');
$count_items_in_basket = mysqli_fetch_assoc(mysqli_query($db, "SELECT COUNT(*) as total FROM `basket` WHERE user_id = $user_id"))['total'];

?>
<header class="container">
    <nav class="top-header">
        <ul class="header-list">
            <li class="header-left"><a href="index.php"><img src="img/logo-header.png" alt="logo"></a></li>
            <li><a href="#"><img src="img/loop-header.svg" alt="logo"></a></li>
        </ul>
        <ul class="header-list">
            <li class="menu">
                <details class="details-menu">
                    <summary><img src="img/list-header.svg" alt="list"></summary>
                    <div class="list-menu">
                        <a href="#" class="close-lst"><img src="img/close-menu.svg" alt="close"></a>
                        <h3 class="list-title">MENU</h3>
                        <ul>
                            <li class="lst-item-groop hidden-item">\
                                <a href="login.php">
                                    <h4>LOGIN</h4>
                                </a>
                                <a href="registration.php">
                                    <h4>REGISTRATION</h4>
                                </a>
                            </li>
                            <li class="lst-item-groop hidden-item">
                                <a href="Cart.php">
                                    <h4>CART</h4>
                                </a>
                            </li>
                            <li class="lst-item-groop">
                                <h4>MAN</h4>
                                <ul class="list-menu-in-list">
                                    <li class="lst-item"><a href="catalog.php">Accessories</a></li>
                                    <li class="lst-item"><a href="catalog.php">Bags</a></li>
                                    <li class="lst-item"><a href="catalog.php">Denim</a></li>
                                    <li class="lst-item"><a href="catalog.php">T-Shirts</a></li>
                                </ul>
                            </li>
                            <li class="lst-item-groop">
                                <h4>WOMAN</h4>
                                <ul class="list-menu-in-list">
                                    <li class="lst-item"><a href="catalog.php">Accessories</a></li>
                                    <li class="lst-item"><a href="catalog.php">Jackets & Coats</a></li>
                                    <li class="lst-item"><a href="catalog.php">Polos</a></li>
                                    <li class="lst-item"><a href="catalog.php">T-Shirts</a></li>
                                    <li class="lst-item"><a href="catalog.php">Shirts</a></li>
                                </ul>
                            </li>
                            <li class="lst-item-groop">
                                <h4>KIDS</h4>
                                <ul class="list-menu-in-list">
                                    <li class="lst-item"><a href="catalog.php">Accessories</a></li>
                                    <li class="lst-item"><a href="catalog.php">Jackets & Coats</a></li>
                                    <li class="lst-item"><a href="catalog.php">Polos</a></li>
                                    <li class="lst-item"><a href="catalog.php">T-Shirts</a></li>
                                    <li class="lst-item"><a href="catalog.php">Shirts</a></li>
                                    <li class="lst-item"><a href="catalog.php">Bags</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </details>
            </li>
            <li class="header-right">
                <a href="login.php">
                    <img src="img/class-header.svg" alt="class">
                </a>
            </li>
            <li class="header-right">
                <a href="Cart.php" class="fa-a-ttagg" style="color: white;">
                    <i class="fa-solid fa-basket-shopping">
                        <p><?=$count_items_in_basket?></p>
                    </i>
                </a>
            </li>
        </ul>
    </nav>
</header>