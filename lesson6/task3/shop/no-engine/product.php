<?php

include('db_connect.php');

$items = mysqli_query($db, "SELECT * FROM `items` ORDER BY views DESC LIMIT 3");

$product_id = (int)$_GET['id'];
$item = mysqli_fetch_row(mysqli_query($db, "SELECT * FROM `items` WHERE id = $product_id"));
$images = null;
$page_not_found = false;

if ($item === null) {
    $page_not_found = true;
} else {
    mysqli_query($db, "UPDATE `items` SET views = views + 1 WHERE id = $product_id");
    $images = mysqli_query($db, "SELECT * FROM `images` WHERE item_id = $product_id");
}

if (!empty($_POST['email']) && !empty($_POST['feedback']))
{
    $name = $_POST['email'];
    $text = $_POST['feedback'];
    $current_server_time = date('Y-m-d H:i:s');
    mysqli_query($db, "INSERT INTO `reviews` (item_id, name, text, time) VALUES ($product_id, '$name', '$text', '$current_server_time')");

    header("Location: product.php?id=$product_id");
    die();
}

$reviews = mysqli_query($db, "SELECT * FROM `reviews` WHERE item_id = $product_id");

?>
<?php if ($page_not_found): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/not_found_page_style.css">
</head>
<body>
    <div class="mainbox">
        <div class="err">4</div>
        <i class="far fa-question-circle fa-spin"></i>
        <div class="err2">4</div>
        <div class="msg">Maybe this page moved? Got deleted?<p>Let's go <a href="index.php">home</a> and try from there.</p></div>
    </div>
</body>
</html>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <script src="https://kit.fontawesome.com/7671f218f6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="top">
            <?php include('components/header.html') ?>
        </div>
        <div class="content">
            <header class="container header-content">
                <h1 class="catalog-header-left">NEW ARRIVALS </h1>
                <h2 class="catalog-header-right"><a href="index.php">HOME</a> / <a href="catalog.php">MEN</a> / <a
                        href="catalog.php"><span class="header-list-bold">NEW ARRIVALS</span></a> </h2>
            </header>
        </div>
        <div class="main-product">
            <a class="box-scroll angle-left" href="#"><i class="angle fas fa-chevron-left"></i></a>
            <img class="img-page-of-products" src="clothes_images/<?= $item[7] ?>" alt="prod">
            <a class="box-scroll angle-right" href="#"><i class="angle fas fa-chevron-right"></i></a>
        </div>
        <div class="product-discription container">
            <div class="name-price">
                <h2 class="name-collection"><?= $item[4] ?></h2>
                <div class="line"></div>
                <h3 class="nam"><?= $item[1] ?></h3>
                <p class="nam-disc"><?= $item[2] ?></p>
                <p class="price-prod"><?= $item[3] ?></p>
            </div>
            <div class="line2-prod"></div>
            <div class="settings">
                <div class="main-filters">
                    <details class="main-filt">
                        <summary class="product-page-select-item">CHOOSE COLOR</summary>
                        <div class="select-checkbox">
                            <div>
                                <input type="checkbox" id="now" name="now">
                                <label for="now">red</label>
                            </div>
                            <div>
                                <input type="checkbox" id="fashion" name="fashion">
                                <label for="fashion">blue</label>
                            </div>
                            <div>
                                <input type="checkbox" id="opt" name="opt">
                                <label for="opt">black</label>
                            </div>
                            <div>
                                <input type="checkbox" id="legend" name="legend">
                                <label for="legend">white</label>
                            </div>
                        </div>
                    </details>
                    <details class="main-filt">
                        <summary class="product-page-select-item">CHOOSE SIZE</summary>
                        <div class="select-checkbox">
                            <div>
                                <input type="checkbox" id="XS" name="XS">
                                <label for="XS">XS</label>
                            </div>
                            <div>
                                <input type="checkbox" id="S" name="S">
                                <label for="S">S</label>
                            </div>
                            <div>
                                <input type="checkbox" id="M" name="M">
                                <label for="M">M</label>
                            </div>
                            <div>
                                <input type="checkbox" id="L" name="L">
                                <label for="L">L</label>
                            </div>
                        </div>
                    </details>
                    <details class="main-filt">
                        <summary class="product-page-select-item">QUANTITY</summary>
                        <div class="select-checkbox">
                            <div>
                                <input class="custom-checkbox" type="checkbox" id="low" name="low">
                                <label for="low">1</label>
                            </div>
                            <div>
                                <input class="custom-checkbox" type="checkbox" id="middle" name="middle">
                                <label for="middle">2</label>
                            </div>
                            <div>
                                <input class="custom-checkbox" type="checkbox" id="high" name="high">
                                <label for="high">3</label>
                            </div>
                            <div>
                                <input class="custom-checkbox" type="checkbox" id="ultra" name="ultra">
                                <label for="ultra">4</label>
                            </div>
                        </div>
                    </details>
                </div>
                <a class="put-to-bascket" href="#">
                    <img class="bascket-img" src="img/bascket-red.svg" alt="bascket">
                    <p class="bascket-text">Add to Cart</p>
                </a>
            </div>
            <div class="reviews-block">
                <form id="feedback" method="post">
                    <div class="pinfo">Введите вашу почту</div>

                    <div class="form-group">
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input name="email" type="email" class="form-control" placeholder="john.doe@yahoo.com">
                           </div>
                        </div>
                    </div>

                    <div class="pinfo">Напишите отзыв</div>
                    <div class="form-group">
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                <textarea name="feedback" class="form-control" id="review" rows="3"></textarea>
 
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
                <ol class="review-block">
                    <?php if ($reviews->num_rows !== 0) { echo '<h4 class="clearfix">Все отзывы</h4>'; } ?>
                    <?php while ($review = mysqli_fetch_assoc($reviews)): ?>
                        <li class="clearfix review">
                            <div class="message-data align-right">
                                <span class="message-data-time" ><?=$review['time']?></span>
                                <span class="message-data-name" style="color: #F26376"><?=$review['name']?></span>
                            </div>
                            <div class="message other-message float-right" style="color: #35181c; font-size: 22px">
                                <?=$review['text']?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <ul>
            </div>
        </div>
        <section class="products container margin-bottom" style="margin-top: 0">
            <?php while ($item = mysqli_fetch_assoc($items)): ?>
				<div class="prod">
					<a href="product.php?id=<?=$item['id']?>">
						<img class="prod-pic" src="clothes_images/<?=$item['preview_photo_name']?>" alt="prod<?=$item['id']?>">
						<div class="prod-disc">
							<h4 class="prod-h4"><?=$item['title']?></h4>
							<p class="price"><?=$item['price']?></p>
						</div>
					</a>
					<div class="add-box">
						<a href="Cart.php" class="add">
							<img src="img/add-pic.svg" alt="cart">
							<p>Add to Cart</p>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
        </section>
    </div>
    <footer>
		<?php include('components/footer_middle_bottom.html'); ?>
    </footer>
</body>

</html>
<?php endif ?>