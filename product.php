<?php include 'header.php';

if (isset($_GET["id"])) {

    if (isset($_GET["cart"])) {
        add_more_cart($_GET["id"]);
        redirect("product.php?id=".$_GET["id"]);
    }

    $stmt = DBCON()->prepare("SELECT * FROM products INNER JOIN category ON category.id = products.cat WHERE products.id = '".$_GET["id"]."'");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
}

?>
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">product</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details-area pt-120 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-fixed-img">
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/products/<?= $data["img"]; ?>.png">
                                        <img src="assets/products/<?= $data["img"]; ?>.png" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="assets/products/<?= $data["img"]; ?>.png"><i class="icon-size-fullscreen"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content pro-details-content-mrg">
                            <h2><?= $data["title"]; ?></h2>
                            <p><?= $data["description"]; ?></p>
                            <div class="pro-details-price">
                                <span class="new-price">৳ <?= $data["unit_price"]; ?></span>
                                <span class="old-price">৳ <?= $data["sell_price"]; ?></span>
                            </div>
                            <div class="pro-details-quality">
                                <span>Quantity:</span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span>Category:</span> <a href="shop.php?cat=<?= $data["cat"]; ?>"><?= $data["cat_name"]; ?></a></li>
                                </ul>
                            </div>
                            <div class="pro-details-action-wrap">
                                <div class="pro-details-add-to-cart">
                                    <a title="Add to Cart" href="product.php?id=<?= $_GET["id"]; ?>&cart=true">Add To Cart </a>
                                </div>
                                <!-- <div class="pro-details-action">
                                    <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="description-review-wrapper pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dec-review-topbar nav mb-45">
                            <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                            <a data-toggle="tab" href="#des-details2">Specification</a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    <p>Crafted in premium watch quality, fenix Chronos is the first Garmin timepiece to combine a durable metal case with integrated performance GPS to support navigation and sport. In the tradition of classic tool watches it features a tough design and a set of modern meaningful tools.</p>
                                    <p> advanced performance metrics for endurance sports, Garmin quality navigation features and smart notifications. In fenix Chronos top-tier performance meets sophisticated design in a highly evolved timepiece that fits your style anywhere, anytime. Solid brushed 316L stainless steel case with brushed stainless steel bezel and integrated EXOTM antenna for GPS + GLONASS support. High-strength scratch resistant sapphire crystal. Brown vintage leather strap with hand-sewn contrast stitching and nubuck inner lining and quick release mechanism.</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="title width1">Name</td>
                                                <td>Salwar Kameez</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">SKU</td>
                                                <td>0x48e2c</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Models</td>
                                                <td>FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Categories</td>
                                                <td>Digital Print</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Size</td>
                                                <td>60’’ x 40’’</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Brand </td>
                                                <td>Individual Collections</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Color</td>
                                                <td>Black, White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<?php include 'footer.php'; ?>