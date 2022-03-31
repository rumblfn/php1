<?php

include('db_connect.php');
$items = mysqli_query($db, "SELECT * FROM `items` ORDER BY views DESC LIMIT 5");

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
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
		<div class="background-main">
			<main class="content_index">
				<img class="main-img" src="img/index-man-2.png" alt="man">
				<div class="main-text">
					<div class="top-text">
						<p class="heading-text">THE BRAND</p>
						<p class="text-mini">OF LUXERIOUS <span class="cont-span">FASHION</span></p>
					</div>
				</div>
			</main>
		</div>
		<div class="container card-box">
			<div class="card-groop1">
				<a href="catalog.php" class="card-width">
					<figure class="card">
						<img class="image-card" src="img/for-woman.png" alt="woman">
						<figcaption class="card-text">
							<p class="card-p">30% OFF</p>
							<p class="red-text">FOR WOMEN</p>
						</figcaption>
					</figure>
				</a>
				<a href="catalog.php" class="card-width">
					<figure class="card">
						<img class="image-card" src="img/for-man.png" alt="man">
						<figcaption class="card-text">
							<p class="card-p">HOT DEAL</p>
							<p class="red-text">FOR MEN</p>
						</figcaption>
					</figure>
				</a>
				<a href="catalog.php" class="card-width">
					<figure class="card">
						<img class="image-card" src="img/for-kids.png" alt="kids">
						<figcaption class="card-text">
							<p class="card-p">NEW ARRIVALS</p>
							<p class="red-text">FOR KIDS</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<a href="catalog.php">
				<figure class="card-groop2">
					<img class="image-card" src="img/accesories.png" alt="accesorie">
					<figcaption class="card-text-last">
						<p class="card-p">LUXIROUS & TRENDY</p>
						<p class="red-text">ACCESORIES</p>
					</figcaption>
				</figure>
			</a>
		</div>
		<section class="content-2 container index-content">
			<div class="products-heading">
				<h2 class="prod-h2">Fetured Items</h2>
				<p class="prod-text">Shop for items based on what we featured in this week</p>
			</div>
			<div class="products-index">
				<div class="prod prod-video">
					<div class="video-test">
						<video autoplay loop preload="auto" muted>
							<source src="img/elevator_cut.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							<source src="img/elevator_cut.webm" type='video/webm; codecs="vp8, vorbis"'>
							<source src="img/elevator_cut.ogv" type='video/ogg; codecs="theora, vorbis"'>
						</video>
					</div>
				</div>
				<?php while ($item = mysqli_fetch_assoc($items)): ?>
					<div class="prod">
						<a href="product.php?id=<?=$item['id']?>">
							<img class="prod-pic" src="clothes_images/<?=$item['preview_photo_name']?>" alt="prod<?=$item['id']?>">
							<div class="prod-disc">
								<h4 class="prod-h4"><?=$item['title']?></h4>
								<!-- <p class="prod-discription"></p> -->
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
			</div>
			<div class="all-products">
				<a href="catalog.php" class="all-prod">Browse All Product</a>
			</div>
		</section>
		<footer>
			<?php include('components/footer_top.html'); ?>
			<?php include('components/footer_middle_bottom.html'); ?>
		</footer>
	</div>
</body>

</html>