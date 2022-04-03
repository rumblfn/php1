<?php 

include('db_connect.php');
include('auth.php');

if (isset($_POST['id'])) {
    if (!$login || !$user_id) {
        header("Location: login.php?not_loged");
        die();
    }

    $item_id = $_POST['id'];
    $result = mysqli_query($db, "INSERT INTO `basket` (user_id, item_id) VALUES ($user_id, $item_id)");
    header("Location: Cart.php");
    die();
}

?>
<?php while ($item = mysqli_fetch_assoc($items)): ?>
<form action="catalog_item.php" method='post' id="add_to_cart<?=$item['id']?>">
    <input type="hidden" name="id" value="<?=$item['id']?>" />
	<div class="prod">
		<a href="product.php?id=<?=$item['id']?>">
			<img class="prod-pic" src="clothes_images/<?=$item['preview_photo_name']?>" alt="prod<?=$item['id']?>">
			<div class="prod-disc">
				<h4 class="prod-h4"><?=$item['title']?></h4>
		    	<p class="price"><?=$item['price']?></p>
			</div>
		</a>
		<div class="add-box">
			<a class="add" onclick="document.getElementById('add_to_cart<?=$item['id']?>').submit()">
				<img src="img/add-pic.svg" alt="cart">
				<p>Add to Cart</p>
			</a>
		</div>
	</div>
</form>
<?php endwhile; ?>