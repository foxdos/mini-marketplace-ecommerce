<?php include 'header.php'; 
if (isset($_POST["fname"])) {
    create_vendor();
}
?>

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create User
                                    <small>Norda Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Users </li>
                                <li class="breadcrumb-item active">Create User </li>
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
                        <div class="card tab2-card">
                            <div class="card-header">
                                <h5> Add User</h5>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Account</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form class="needs-validation user-add" method="post">
                                            <h4>Account Details</h4>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> First Name</label>
                                                <input class="form-control col-xl-8 col-md-7" name="fname" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Last Name</label>
                                                <input class="form-control col-xl-8 col-md-7" name="lname" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                <input class="form-control col-xl-8 col-md-7" name="email" type="email" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Mobile</label>
                                                <input class="form-control col-xl-8 col-md-7" name="mobile" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                                <input class="form-control col-xl-8 col-md-7" name="password" type="password" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Shop Name</label>
                                                <input class="form-control col-xl-8 col-md-7" name="sname" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Shop Address</label>
                                                <input class="form-control col-xl-8 col-md-7" name="saddress" type="text" required="">
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

<?php include 'footer.php'; ?>