<?php 
include 'header.php'; 
if (isset($_GET['can'])) {
    cancel_product($_GET['can']);
}else if(isset($_GET['act'])){
    active_product($_GET['act']);
}
if (!(isset($_GET["new"]) || isset($_GET["current"]) || isset($_GET["can"]) || isset($_GET["act"]))) {
    die();
}
?>

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product List
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                    
                    <?php 
                    if (isset($_GET["new"])) {
                        admin_new_product();
                    }else if (isset($_GET["current"])) {
                        admin_current_product();
                    }
                     ?>


                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

<?php include 'footer.php'; ?>