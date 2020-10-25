<?php 
require_once 'config/init.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eCom</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- All CSS is here
	============================================ -->
    <!-- 
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <div class="main-wrapper">
        <header class="header-area">
            <div class="header-large-device">
                <div class="header-middle">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/images/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu main-menu-padding-1 main-menu-lh-2">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="shop.php">Shops </a>
                                                <ul >
                                                    <li>
                                                        <ul>
                                                            <?php show_shop_cat_menu(); ?>
                                                            
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.php">About Us </a></li>
                                            <li><a href="contact.php">CONTACT </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="header-action header-action-flex">
                                    <div class="same-style-2 same-style-2-font-inc">
                                        <a href="login-register.php"><i class="icon-user"></i></a>
                                    </div>
                                    <div class="same-style-2 same-style-2-font-inc header-cart">
                                        <a href="cart.php">
                                            <i class="icon-basket-loaded"></i><span class="pro-count purple">02</span>
                                            <span class="cart-amount">$2,435.30</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-bottom-ptb">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="main-categori-wrap main-categori-wrap-modify">
                                    <a class="categori-show" href="#"><i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i></a>
                                    <div class="category-menu categori-hide categori-not-visible">
                                        <nav>
                                            <ul>
                                                <?php show_shop_cat_menu(); ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="categori-search-wrap categori-search-wrap-modify">
                                    
                                    <div class="search-wrap-3">
                                        <form action="shop.php" method="GET">
                                            <input name="search" placeholder="Search Products..." type="text">
                                            <button><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="header-offer-wrap-5">
                                    <h3>50% OFF</h3>
                                    <h4>cyber <br>funk</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="index.php">
                                    <img alt="" src="assets/images/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="login-register.php"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="wishlist.php"><i class="icon-heart"></i><span class="pro-count purple">03</span></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="checkout.php">
                                        <i class="icon-basket-loaded"></i><span class="pro-count purple">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
