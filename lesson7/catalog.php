<?php

include('db_connect.php');
include('auth.php');

$items = mysqli_query($db, "SELECT * FROM `items`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>catalog</title>
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
			<?php include('header.php') ?>
		</div>
		<div class="content">
			<header class="container header-content">
				<h1 class="catalog-header-left">NEW ARRIVALS </h1>
				<h2 class="catalog-header-right">
					<a href="index.php"><span class="hover-pink">HOME</span></a> / <a href="#"><span class="hover-pink">MEN</span></a> /
					<a href="#"><span class="header-list-bold">NEW ARRIVALS</span></a>
				</h2>
			</header>
		</div>
		<div class="content-2 container">
			<div class="catalog-filters filter-relative">
				<details class="filter details-main filter-absolute filter-absolute-left">
					<summary class="filter-sort"><span>FILTER</span><img class="filter-sort-375" src="img/big-filter.svg" alt="#"></summary>
					<details class="details-in-filters details-in-filters1">
						<summary class="filters-title">CATEGORY</summary>
						<ul>
							<li><a class="details_main_contacts_item" href="#">Accessories</a></li>
							<li><a class="details_main_contacts_item" href="#">Bags</a></li>
							<li><a class="details_main_contacts_item" href="#">Denim</a></li>
							<li><a class="details_main_contacts_item" href="#">Hoodies & Sweatshirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Jackets & Coats</a></li>
							<li><a class="details_main_contacts_item" href="#">Polos</a></li>
							<li><a class="details_main_contacts_item" href="#">Shirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Shoes</a></li>
							<li><a class="details_main_contacts_item" href="#">Sweaters & Knits</a></li>
							<li><a class="details_main_contacts_item" href="#">T-Shirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Tanks</a></li>
						</ul>
					</details>
					<details class="details-in-filters details-in-filters2">
						<summary class="filters-title">BRAND</summary>
						<ul>
							<li><a class="details_main_contacts_item" href="#">Accessories</a></li>
							<li><a class="details_main_contacts_item" href="#">Bags</a></li>
							<li><a class="details_main_contacts_item" href="#">Denim</a></li>
							<li><a class="details_main_contacts_item" href="#">Hoodies & Sweatshirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Jackets & Coats</a></li>
							<li><a class="details_main_contacts_item" href="#">Polos</a></li>
							<li><a class="details_main_contacts_item" href="#">Shirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Shoes</a></li>
							<li><a class="details_main_contacts_item" href="#">Sweaters & Knits</a></li>
							<li><a class="details_main_contacts_item" href="#">T-Shirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Tanks</a></li>
						</ul>
					</details>
					<details class="details-in-filters details-in-filters3">
						<summary class="filters-title">DESIGNER</summary>
						<ul>
							<li><a class="details_main_contacts_item" href="#">Accessories</a></li>
							<li><a class="details_main_contacts_item" href="#">Bags</a></li>
							<li><a class="details_main_contacts_item" href="#">Denim</a></li>
							<li><a class="details_main_contacts_item" href="#">Hoodies & Sweatshirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Jackets & Coats</a></li>
							<li><a class="details_main_contacts_item" href="#">Polos</a></li>
							<li><a class="details_main_contacts_item" href="#">Shirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Shoes</a></li>
							<li><a class="details_main_contacts_item" href="#">Sweaters & Knits</a></li>
							<li><a class="details_main_contacts_item" href="#">T-Shirts</a></li>
							<li><a class="details_main_contacts_item" href="#">Tanks</a></li>
						</ul>
					</details>
				</details>
				<div class="main-filters filter-absolute filter-absolute-right">
					<details class="main-filt">
						<summary>TRENDING NOW</summary>
						<div class="select-checkbox">
							<div>
								<input type="checkbox" id="now" name="now">
								<label for="now"><span class="select-checkbox-text">buy now</span></label>
							</div>
							<div>
								<input type="checkbox" id="fashion" name="fashion">
								<label for="fashion"><span class="select-checkbox-text">in fashion</span></label>
							</div>
							<div>
								<input type="checkbox" id="opt" name="opt">
								<label for="opt"><span class="select-checkbox-text">optimal</span></label>
							</div>
							<div>
								<input type="checkbox" id="legend" name="legend">
								<label for="legend"><span class="select-checkbox-text">legend</span></label>
							</div>
						</div>
					</details>
					<details class="main-filt">
						<summary>SIZE</summary>
						<div class="select-checkbox">
							<div>
								<input type="checkbox" id="XS" name="XS">
								<label for="XS"><span class="select-checkbox-text">XS</span></label>
							</div>
							<div>
								<input type="checkbox" id="S" name="S">
								<label for="S"><span class="select-checkbox-text">S</span></label>
							</div>
							<div>
								<input type="checkbox" id="M" name="M">
								<label for="M"><span class="select-checkbox-text">M</span></label>
							</div>
							<div>
								<input type="checkbox" id="L" name="L">
								<label for="L"><span class="select-checkbox-text">L</span></label>
							</div>
						</div>
					</details>
					<details class="main-filt filter-relative main-filt-last">
						<summary>PRICE</summary>
						<div class="select-checkbox filter-absolute">
							<div>
								<input class="custom-checkbox" type="checkbox" id="low" name="low">
								<label for="low"><span class="select-checkbox-text">up to $10</span></label>
							</div>
							<div>
								<input class="custom-checkbox" type="checkbox" id="middle" name="middle">
								<label for="middle"><span class="select-checkbox-text">up to $70</span></label>
							</div>
							<div>
								<input class="custom-checkbox" type="checkbox" id="high" name="high">
								<label for="high"><span class="select-checkbox-text">up to$150</span></label>
							</div>
							<div>
								<input class="custom-checkbox" type="checkbox" id="ultra" name="ultra">
								<label for="ultra"><span class="select-checkbox-text">up to$300</span></label>
							</div>
						</div>
					</details>
				</div>
			</div>
			<div class="products products-catalog">
				<?php include('catalog_item.php'); ?>
			</div>
			<div class="scrolling-list">
				<a href="#">
					<img src="img/scroll-reverse.svg" alt="list">
				</a>
				<div class="lists">
					<a style="color: #EF5B70;" href="#">1</a>
				</div>
				<a href="#">
					<img src="img/scroll.svg" alt="list">
				</a>
			</div>
		</div>
	</div>
	<footer>
		<?php include('components/footer_top.html'); ?>
		<?php include('components/footer_middle_bottom.html'); ?>
	</footer>
</body>

</html>