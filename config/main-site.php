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
                    <a href="product.php?id=<?= $k["id"]; ?>">
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
                        <a class="purple" href="shop.php?cat=<?= $k["id"]; ?>"><?= $k["cat_name"]; ?></a>
                    </div>
                    <h3><a class="purple" href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-4">
                        <span class="new-price">৳ <?= $k["sell_price"]; ?> </span>
                        <span class="old-price">৳ <?= $k["unit_price"]; ?> </span>
                    </div>
                </div>
                <div class="product-content-wrap-3 product-content-position-2">
                    <div class="product-content-categories">
                        <a class="purple" href="shop.php?cat=<?= $k["id"]; ?>"><?= $k["cat_name"]; ?></a>
                    </div>
                    <h3><a class="purple" href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
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

function show_category()
{
    $stmt = DBCON()->prepare("SELECT * FROM category WHERE sts = '1'");
    $stmt->execute();
    $data = $stmt->fetchAll();
    foreach ($data as $k) { ?>
        <div class="product-plr-1">
            <div class="single-product-wrap">
                <div class="product-img product-img-border mb-20">
                    <a href="shop.php?cat=<?= $k["cat_name"]; ?>">
                        <img src="assets/category/<?= $k["cat_name"]; ?>.png" alt="">
                    </a>
                </div>
                <div class="product-content-categories-2 text-center">
                    <h5><a href="shop.php?cat=<?= $k["cat_name"]; ?>"><?= $k["cat_name"]; ?></a></h5>
                </div>
            </div>
        </div>

<?php   }
}

function show_shop()
{
    $stmt = DBCON()->prepare("SELECT * FROM products WHERE sts = '1'");
    $stmt->execute();
    $data = $stmt->fetchAll();
    foreach ($data as $k) { ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="single-product-wrap mb-35">
                <div class="product-img product-img-zoom mb-15">
                    <a href="product.php?id=<?= $k["id"]; ?>">
                        <img src="assets/products/<?= $k["img"]; ?>.png" alt="">
                    </a>
                </div>
                <div class="product-content-wrap-2 text-center">
                    <h3><a href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-2">
                        <span>৳ <?= $k["sell_price"]; ?></span>
                    </div>
                </div>
                <div class="product-content-wrap-2 product-content-position text-center">
                    <h3><a href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-2">
                        <span>৳ <?= $k["sell_price"]; ?></span>
                    </div>
                    <div class="pro-add-to-cart">
                        <button title="Add to Cart">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>


<?php   }
}

function show_category_base_product()
{
    $cstmt = DBCON()->prepare("SELECT * FROM category WHERE sts = '1'");
    $cstmt->execute();
    $cdata = $cstmt->fetchAll();
    foreach ($cdata as $k) { ?>
        <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-5 section-title-5-bg-1 mb-10">
                    <i class="red icon-screen-desktop"></i>
                    <h5 class="red"><?= $k["cat_name"]; ?></h5>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-12">
                        <div class="tab-content tab-hm6-categories-slider tab-content-mrg-top jump">
                            <div id="product-9" class="tab-pane active">
                                <div class="product-slider-active-5">
                                    <?php 
                                    $pstmt = DBCON()->prepare("SELECT * FROM products WHERE sts = '1' AND cat = '".$k["id"]."'");
                                    $pstmt->execute();
                                    $data = $pstmt->fetchAll();
                                    foreach ($data as $p) {
                                    ?>

                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product.php?id=<?= $p["id"]; ?>">
                                                    <img src="assets/products/<?= $p["img"]; ?>.png" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product.php?id=<?= $p["id"]; ?>"><?= $p["title"]; ?></a></h3>
                                                <div class="product-price-2">
                                                    <span>৳ <?= $p["sell_price"]; ?></span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product.php?id=<?= $p["id"]; ?>"><?= $p["title"]; ?></a></h3>
                                                <div class="product-price-2">
                                                    <span>৳ <?= $p["sell_price"]; ?></span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php   }
}

function show_shop_cat_menu()
{
    $stmt = DBCON()->prepare("SELECT * FROM category WHERE sts = '1'");
    $stmt->execute();
    $data = $stmt->fetchAll();
    foreach ($data as $k) { ?>

        <li><a href="shop.php?cat=<?= $k["id"]; ?>"><?= $k["cat_name"]; ?></a></li>

<?php   }
}

function show_shopBycat($id)
{
    $stmt = DBCON()->prepare("SELECT * FROM products WHERE sts = '1' AND cat = '".$id."' ");
    $stmt->execute();
    $data = $stmt->fetchAll();
    foreach ($data as $k) { ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="single-product-wrap mb-35">
                <div class="product-img product-img-zoom mb-15">
                    <a href="product.php?id=<?= $k["id"]; ?>">
                        <img src="assets/products/<?= $k["img"]; ?>.png" alt="">
                    </a>
                </div>
                <div class="product-content-wrap-2 text-center">
                    <h3><a href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-2">
                        <span>৳ <?= $k["sell_price"]; ?></span>
                    </div>
                </div>
                <div class="product-content-wrap-2 product-content-position text-center">
                    <h3><a href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-2">
                        <span>৳ <?= $k["sell_price"]; ?></span>
                    </div>
                    <div class="pro-add-to-cart">
                        <button title="Add to Cart">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>


<?php   }
}

function show_shopBysearch($id)
{
    $stmt = DBCON()->prepare("SELECT * FROM products WHERE sts = '1' AND title LIKE '".$id."' ");
    $stmt->execute();
    $data = $stmt->fetchAll();
    foreach ($data as $k) { ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="single-product-wrap mb-35">
                <div class="product-img product-img-zoom mb-15">
                    <a href="product.php?id=<?= $k["id"]; ?>">
                        <img src="assets/products/<?= $k["img"]; ?>.png" alt="">
                    </a>
                </div>
                <div class="product-content-wrap-2 text-center">
                    <h3><a href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-2">
                        <span>৳ <?= $k["sell_price"]; ?></span>
                    </div>
                </div>
                <div class="product-content-wrap-2 product-content-position text-center">
                    <h3><a href="product.php?id=<?= $k["id"]; ?>"><?= $k["title"]; ?></a></h3>
                    <div class="product-price-2">
                        <span>৳ <?= $k["sell_price"]; ?></span>
                    </div>
                    <div class="pro-add-to-cart">
                        <button title="Add to Cart">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>


<?php   }
}

function fetch_product($id){
    $stmt = DBCON()->prepare("SELECT * FROM products WHERE id = '".$id."'");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function add_cart($id){
    $fd = fetch_product($id);

    $data["id"]         = $id; 
    $data["image"]       = $fd["img"]; 
    $data["name"]       = $fd["title"]; 
    $data["quanity"]    = 1; 
    $data["price"]      = $fd["sell_price"]; 
    $data["tprice"]     = $fd["sell_price"];

    // alert($fd["title"]);

    array_push($_SESSION["shop_data"], $data);

}

function add_more_cart($id){
    // unset($_SESSION["shop_data"]);

    $key = null;
    if (isset($_SESSION["shop_data"])) {
        $key = array_search($id, array_column($_SESSION["shop_data"], 'id'));
    }else{
        $_SESSION["shop_data"] = array();
    }    

    if (is_numeric($key)) {
        $_SESSION["shop_data"][$key]["quanity"] = $_SESSION["shop_data"][$key]["quanity"] + 1;
        $_SESSION["shop_data"][$key]["tprice"] = $_SESSION["shop_data"][$key]["price"] * $_SESSION["shop_data"][$key]["quanity"];
        alert($key);
    }else{
        add_cart($id);
        alert("Add Items");
    }
    

}

function cart_load(){

    $i = 0;
    
    foreach ($_SESSION["shop_data"] as $k) { ?>

        <tr>
            <td class="product-thumbnail">
                <a href="#"><img height="112" width="92" src="assets/products/<?= $k["image"] ?>" alt=""></a>
            </td>
            <input type="hidden" name="shop[<?= $i; ?>][id]" value="<?= $k["id"] ?>">
            <td class="product-name"><a href="#"><?= $k["name"] ?></a></td>
            <td class="product-price-cart"><span class="amount">৳ <?= $k["price"] ?></span></td>
            <td class="product-quantity pro-details-quality">
                <div class="cart-plus-minus">
                    <input class="cart-plus-minus-box" type="text" name="shop[<?= $i; ?>][qty]" value="<?= $k["quanity"] ?>">
                </div>
            </td>
            <td class="product-subtotal">৳ <?= $k["tprice"] ?></td>
            <td class="product-remove">
                <a href="#"><i class="icon_close"></i></a>
            </td>
        </tr>

<?php    
    $i++;
    }
}

function header_show()
{
    $result['item'] = 0;
    $result['tprice'] = 0;
    if (isset($_SESSION["shop_data"])) {
        $result['item'] = count($_SESSION["shop_data"]);
        $result['tprice'] = array_sum(array_column($_SESSION["shop_data"], 'tprice'));
    }

    return $result;
}

function update_cart(){

    $data = $_SESSION["shop_data"];
    $ucart = $_POST["shop"];
    $i = 0;

    foreach ($ucart as $k) {
        $key = array_search($k["id"], array_column($_SESSION["shop_data"], 'id'));
        if ($_SESSION["shop_data"][$key]["quanity"] != $_POST["shop"][$i]["qty"]) { 

            $_SESSION["shop_data"][$key]["quanity"] = $_POST["shop"][$i]["qty"];
            $_SESSION["shop_data"][$key]["tprice"] = $_SESSION["shop_data"][$key]["price"] * $_SESSION["shop_data"][$key]["quanity"];
        }

        $i++;
    }

}

?>