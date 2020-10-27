<?php include 'header.php'; 
if (isset($_GET["id"])) {
    $stmt = DBCON()->prepare("SELECT * FROM oders WHERE id = '".$_GET["id"]."'");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $utmt = DBCON()->prepare("SELECT * FROM users WHERE email = '".$data["cid"]."'");
    $utmt->execute();
    $udata = $utmt->fetch(PDO::FETCH_ASSOC);
}

?>

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Orders
                                    <small>Norda Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sales</li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Products Category</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="post" enctype="multipart/form-data">
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Fullname:</label>
                                            <input disabled="" class="form-control" value="<?= $udata["fname"]." ".$udata["lname"]; ?>" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Email:</label>
                                            <input disabled="" class="form-control" value="<?= $data["cid"]; ?>" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Mobile:</label>
                                            <input disabled="" class="form-control" value="<?= $udata["mobile"]; ?>" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Address:</label>
                                            <?php 
                                            $addData = json_decode($udata["address"],true);
                                            $addData = $addData["flatNumber"]." ".$addData["street_address"]." ".$addData["town"]." ".$addData["zip"];
                                            ?>
                                            <input disabled="" class="form-control" value="<?= $addData; ?>" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Note</label>
                                            <textarea disabled="" class="form-control"><?= $data["note"]; ?></textarea>
                                        </div>
                                    </div>
                                
                                <br>
<!--                                 <div class="btn-popup pull-right">
                                    <button type="submit" class="btn btn-sm btn-primary" >Add Category</button>
                                </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Item Cart</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Item</th>
                                        <th>Quanity</th>
                                        <th>Sub Total</th>
                                        <th>Seller</th>
                                        <th>Extra Charge</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach (json_decode($data["orders"],true) as $k) {
                                            echo '<tr>
                                                    <td>'.$k["id"].'</td>
                                                    <td>'.$k["name"].'</td>
                                                    <td>'.$k["quanity"].'</td>
                                                    <td>'.$k["tprice"].'</td>
                                                    <td>'.show_seller_admin($k["id"]).'</td>
                                                    <td>60</td>
                                                </tr>';
                                        } ?>
                                    </tbody>

                                </table>
                                <h4>Total Price: <?php echo(array_sum(array_column(json_decode($data["orders"],true), 'tprice')) + 60); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

<?php include 'footer.php'; ?>