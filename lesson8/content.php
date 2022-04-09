<div class="shop_content">
                        <?php
                        $result = mysqli_query($db, "SELECT * FROM `catalogItems`");
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['itemId'];
                            $img = base64_encode($row['image']);
                            $name = $row['name'];
                            $description = $row['description'];
                            $price = $row['price'];
                        ?>
                            <div class="card_div">
                                <a href="product.php?id=<?= $id ?>" class="figure">
                                    <img src="data:image/jpeg;base64, <?= $img ?>" class="fig_images" alt="image">
                                    <div class="figcaption">
                                        <p class="figure_header"><?= $name ?></p>
                                        <p class="figure_paragraph"><?= $description ?></p>
                                        <p class="figure_price">$<?= $price ?></p>
                                    </div>
                                </a>
                                <div class="add-box">
                                    <a href="?addtocart&itemId=<?= $id ?>" class="add">
                                        <img src="Pictures/add_cart.svg" class="add-cart" alt="">
                                        <p>Add to Cart</p>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>