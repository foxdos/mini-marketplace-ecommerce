<?php include 'header.php'; 

if (!isset($_SESSION['islogg'])) {
    redirect('login-register.php?preurl=checkout.php');
}else{
    $stmt = DBCON()->prepare("SELECT * FROM users WHERE email = '".$_SESSION['email']."'");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $address = json_decode($data["address"],true);
}
if (isset($_POST["message"])) {
    order_place($_POST["message"]);
}


?>
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">Checkout </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="checkout-main-area pt-120 pb-120">
            <div class="container">
                <!-- <div class="customer-zone mb-20">
                    <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your code</a></p>
                    <div class="checkout-login-info3">
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <input type="submit" value="Apply Coupon">
                        </form>
                    </div>
                </div> -->
                <form method="post">
                    <div class="checkout-wrap pt-30">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="billing-info-wrap mr-50">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>First Name <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" value="<?= $data["fname"]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Last Name <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" value="<?= $data["lname"]; ?>" >
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                                <input class="billing-address" placeholder="House number and street name" type="text" value="<?= $address['street_address'];?>">
                                                <input placeholder="Apartment, suite, unit etc." type="text" value="<?= $address['flatNumber'];?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" value="<?= $address['town'];?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" value="<?= $address['zip'];?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Phone <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" value="<?= $data["mobile"]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" value="<?= $data["email"]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="additional-info-wrap">
                                        <label>Order notes</label>
                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="your-order-area">
                                    <h3>Your order</h3>
                                    <div class="your-order-wrap gray-bg-4">
                                        <div class="your-order-info-wrap">
                                            <div class="your-order-info">
                                                <ul>
                                                    <li>Product <span>Total</span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-middle">
                                                <ul>
                                                    <?php checkout_list(); ?>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-subtotal">
                                                <ul>
                                                    <li>Subtotal <span>৳ <?= header_show()["tprice"]; ?> </span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-shipping">
                                                <ul>
                                                    <li>Shipping Charge<p>৳60 </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-total">
                                                <ul>
                                                    <li>Total <span>৳ <?= header_show()["tprice"]+60; ?> </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="payment-method">
                                            <div class="pay-top sin-payment">
                                                <label for="payment-method-3">Cash on delivery</label>
                                                <div class="payment-box payment_method_bacs">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="Place-order">
                                        <style type="text/css">
                                            .your-order-area .Place-order button {
                                                background-color: #ff2f2f;
                                                display: block;
                                                cursor: pointer;
                                                padding: 16px 50px 17px;
                                                text-transform: uppercase;
                                                font-weight: 700;
                                                width: 100%;
                                                color: #fff;
                                                font-size: 14px;
                                                font-weight: 600;
                                                text-align: center;
                                            }
                                        </style>
                                        <button type="submit">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include 'footer.php'; ?>