<?php include 'header.php'; 
if (isset($_GET["id"])) {
    $stmt = DBCON()->prepare("SELECT * FROM oders WHERE id = '".$_GET["id"]."'");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
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
                                        <th>Your income</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach (json_decode($data["orders"],true) as $k) {
                                            $income = ($k["tprice"] * 80) / 100;
                                            echo '<tr>
                                                    <td>'.$k["id"].'</td>
                                                    <td>'.$k["name"].'</td>
                                                    <td>'.$k["quanity"].'</td>
                                                    <td>'.$k["tprice"].'</td>
                                                    <td>'.$income.'</td>
                                                </tr>';
                                        } ?>
                                    </tbody>

                                </table>
                                <h4>Total Income: <?php echo((array_sum(array_column(json_decode($data["orders"],true), 'tprice')) *80) /100); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

<?php include 'footer.php'; ?>