<?php 
function new_product()
{
	$stmt = DBCON()->prepare("SELECT * FROM products INNER JOIN category ON category.id = products.cat WHERE products.sts = '1'");
	$stmt->execute();
	$data = $stmt->fetchAll();
	foreach ($data as $k) { ?>
		<div class="product-plr-1">
			<div class="single-product-wrap">
                <div class="product-img product-img-zoom mb-15">
                    <a href="product-details.php">
                        <img src="assets/products/<?= $k["img"]; ?>.png" alt="">
                    </a>
                    <!-- <span class="pro-badge left bg-red">-40%</span> -->
<!--                     <div class="product-action-2 tooltip-style-2">
                        <button title="Wishlist"><i class="icon-heart"></i></button>
                        <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                        <button title="Compare"><i class="icon-refresh"></i></button>
                    </div> -->
                </div>
                <div class="product-content-wrap-3">
                    <div class="product-content-categories">
                        <a class="purple" href="shop.php?cat=<?= $k["cat_name"]; ?>"><?= $k["cat_name"]; ?></a>
                    </div>
                    <h3><a class="purple" href="product-details.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-4">
                        <span class="new-price">৳ <?= $k["sell_price"]; ?> </span>
                        <span class="old-price">৳ <?= $k["unit_price"]; ?> </span>
                    </div>
                </div>
                <div class="product-content-wrap-3 product-content-position-2">
                    <div class="product-content-categories">
                        <a class="purple" href="shop.php?cat=<?= $k["cat_name"]; ?>"><?= $k["cat_name"]; ?></a>
                    </div>
                    <h3><a class="purple" href="product-details.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-4">
                        <span class="new-price">৳ <?= $k["sell_price"]; ?> </span>
                        <span class="old-price">৳ <?= $k["unit_price"]; ?></span>
                    </div>
                    <div class="pro-add-to-cart-2">
                        <button title="Add to Cart">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>

<?php	}
}



?>