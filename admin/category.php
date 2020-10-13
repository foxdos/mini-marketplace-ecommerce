<?php include 'header.php'; ?>
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
                                <form class="needs-validation">
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Category Name :</label>
                                            <input class="form-control" id="validationCustom01" type="text">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="validationCustom02" class="mb-1">Category Image :</label>
                                            <input class="form-control" id="validationCustom02" type="file">
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-sm btn-primary" >Add Category</button>
                                </div>
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
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        <th>Total Sub Category</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="../assets/images/electronics/product/25.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-secondary">Electronic</span></td>
                                        <td><span class="badge badge-success">5</span></td>
                                        <td>Delete</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php include 'footer.php'; ?>