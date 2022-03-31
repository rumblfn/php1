<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                <h1 class="catalog-header-left">SHOPPING CART</h1>
            </header>
        </div>
        <section class="cart_buy container">
            <div class="items_in_card">
                <div class="item_in_cart">
                    <img class="cart-img" src="img/itemincart1.png" alt="item1">
                    <div class="item_in_cart_dicription">
                        <h4 class="cart_ite_name">MANGO PEOPLE <br> T-SHIRT</h4>
                        <div class="disc_details">
                            <p>Price: <span class="disc_details_span">$300</span></p>
                            <p>Color: Red</p>
                            <p>Size: Xl</p>
                            <p>Quantity: 2</p>
                        </div>
                    </div>
                    <a href="#" class="close_item_in_cart"><img src="img/close-menu.svg" alt="close"></a>
                </div>
                <div class="item_in_cart margin-item">
                    <img class="cart-img" src="img/itemincart2.png" alt="item2">
                    <div class="item_in_cart_dicription">
                        <h4 class="cart_ite_name">MANGO PEOPLE <br> T-SHIRT</h4>
                        <div class="disc_details">
                            <p>Price: <span class="disc_details_span">$300</span></p>
                            <p>Color: Red</p>
                            <p>Size: Xl</p>
                            <p>Quantity: 2</p>
                        </div>
                    </div>
                    <a href="#" class="close_item_in_cart"><img src="img/close-menu.svg" alt="close"></a>
                </div>
                <div class="clear_or_continue">
                    <a href="#" class="button_clear button_clear-left">CLEAR SHOPPING CART</a>
                    <a href="catalog.php" class="button_clear">CONTINUE SHOPPING</a>
                </div>
            </div>
            <div class="total">
                <div class="form-content">
                    <form action="#" class="adress">
                        <h3 class="form_name">SHIPPING ADRESS</h3>
                        <input class="form-item1" type="text" id="city" name="city" placeholder="Bangladesh"><br>
                        <input class="form-item" type="text" id="state" name="state" placeholder="State"><br>
                        <input class="form-item" type="text" id="code" name="code" placeholder="Postcode / Zip"><br>
                        <input class="button-submit" type="submit" value="GET A QUOTE">
                    </form>
                    <div class="total-price">
                        <h4>SUB TOTAL <span class="total-span-1">$900</span></h4>
                        <h3>GRAND TOTAL <span class="total-span-2">$900</span></h3>
                        <hr>
                        <a class="checkout" href="#">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
		<?php include('components/footer_middle_bottom.html'); ?>
    </footer>
</body>

</html>