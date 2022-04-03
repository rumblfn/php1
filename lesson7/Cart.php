<?php

include('db_connect.php');
include('auth.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $result = mysqli_query($db, "DELETE FROM `basket` WHERE id = $id");
    header("Location: Cart.php");
    die();
}

$items = [];
$items_id = mysqli_query($db, "SELECT id, item_id FROM `basket` WHERE user_id = $user_id");
while($row = mysqli_fetch_assoc($items_id)){
    $item_id = $row['item_id'];
    $items[$row['id']] = mysqli_fetch_row(mysqli_query($db, "SELECT * FROM `items` WHERE id = $item_id"));
}

?>
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
            <?php include('header.php'); ?>
        </div>
        <div class="content">
            <header class="container header-content">
                <h1 class="catalog-header-left">SHOPPING CART</h1>
            </header>
        </div>
        <section class="cart_buy container">
            <div class="items_in_card">
                <?php foreach ($items as $key => $item): ?>
                    <form action="Cart.php" id="item_in_cart<?=$key?>" method='post'>
                        <input type="hidden" name="id" value="<?=$key?>" />
                        <div class="item_in_cart margin-item">
                            <img class="cart-img" src="clothes_images/<?=$item[7]?>" alt="item2" style="object-fit: cover;">
                            <div class="item_in_cart_dicription">
                                <h4 class="cart_ite_name"><?=$item[1]?></h4>
                                <div class="disc_details">
                                    <p>Price: <span class="disc_details_span"><?=$item[3]?></span></p>
                                    <!-- <p>Color: Red</p>
                                    <p>Size: Xl</p>
                                    <p>Quantity: 2</p> -->
                                </div>
                            </div>
                            <a class="close_item_in_cart" onclick="document.getElementById('item_in_cart<?=$key?>').submit()">
                                <img src="img/close-menu.svg" alt="close">
                            </a>
                        </div>
                    </form>
                <?php endforeach;?>
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