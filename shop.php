<?php

include 'header.php'; 



?>
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-120 pb-120">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-12">
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">

                                        <?php
                                        if (isset($_GET["cat"])) {
                                            show_shopBycat($_GET["cat"]);
                                        }if (isset($_GET["search"])) {
                                            show_shopBysearch($_GET["search"]);
                                        }else{
                                            show_shop();
                                        }
                                        ?>
                                    </div>
                                </div>                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>