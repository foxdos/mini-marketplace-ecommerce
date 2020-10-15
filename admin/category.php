<?php include 'header.php'; 

if (isset($_POST["cat_name"])) {
    create_category();
}
if (isset($_GET["del"])) {
    delete_category($_GET["del"]);
}

?>
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category
                                    <small>Norda Admin panel</small>
                                </h3>
                            </div>
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
                                <h5>Products Category</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="post">
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Category Name :</label>
                                            <input class="form-control" name="cat_name" type="text">
                                        </div>
                                    </div>
                                
                                <br>
                                <div class="btn-popup pull-right">
                                    <button type="submit" class="btn btn-sm btn-primary" >Add Category</button>
                                </div>
                                </form>
                            </div>
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
                                <h5>Manage Category</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php category_info(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php include 'footer.php'; ?>