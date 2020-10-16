<?php  

function isHome()
{
	$getIndex = explode('/', $_SERVER['SCRIPT_NAME']);
	if($getIndex[2] == "index.php")
		return 1;
	else
		return 0;
}

function redirect($url){
	echo '<script type="text/javascript">window.location.href = "'.$url.'";</script>';
}
function alert($msg){
	echo '<script>alert("'.$msg.'");</script>';
}

function admin_new_product()
{
	$stmt = DBCON()->prepare("SELECT * FROM `products` WHERE `sts` = 0");
	$stmt->execute();
	$data = $stmt->fetchAll();
	foreach ($data as $k) { ?>

		<div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#"><img src="#" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a href="#">
                                        <h6><?= $k["title"]; ?></h6>
                                    </a>
                                    <h4><?= $k["sell_price"]; ?> <del><?= $k["unit_price"]; ?></del></h4>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6">
                                            <a href="products.php?act=<?= $k["id"]; ?>" class="btn btn-xs btn-info">Approve</a>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <a href="products.php?can=<?= $k["id"]; ?>" class="btn btn-xs btn-warning">Cancel</a>
                                        </div>
                                    </div>                                      
                                </div>
                            </div>
                        </div>
                    </div>

<?php	}
}

function admin_current_product()
{
	$stmt = DBCON()->prepare("SELECT * FROM `products` WHERE `sts` = 1");
	$stmt->execute();
	$data = $stmt->fetchAll();
	foreach ($data as $k) { ?>

		<div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#"><img src="#" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a href="#">
                                        <h6><?= $k["title"]; ?></h6>
                                    </a>
                                    <h4><?= $k["sell_price"]; ?> <del><?= $k["unit_price"]; ?></del></h4>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6">
                                            <a href="products.php?can=<?= $k["id"]; ?>" class="btn btn-xs btn-warning">Cancel</a>
                                        </div>
                                    </div>                                      
                                </div>
                            </div>
                        </div>
                    </div>

<?php	}
}


function cancel_product($id){
	$stmt = DBCON()->prepare("UPDATE `products` SET `sts`= '2' WHERE `id` = '".$id."'");
	$res = $stmt->execute();
	redirect('products.php?current=true');

}
function active_product($id){
	$stmt = DBCON()->prepare("UPDATE `products` SET `sts`= '1' WHERE `id` = '".$id."'");
	$res = $stmt->execute();
	redirect('products.php?current=true');
}
function create_category(){
	$stmt = DBCON()->prepare("INSERT INTO `category`(`cat_name`) VALUES ('".$_POST["cat_name"]."')");
	$res = $stmt->execute();
	redirect('category.php');

}
function category_info()
{
	$stmt = DBCON()->prepare("SELECT * FROM `category`");
	$stmt->execute();
	$data = $stmt->fetchAll();
	foreach ($data as $k) {?>
		<tr>
			<td><?= $k['id']; ?></td>
			<td><span class="badge badge-secondary"><?= $k['cat_name']; ?></span></td>
            <td>
                <a href="category.php?del=<?= $k['id']; ?>" class="btn btn-danger btn-xs">Delete</a>
            </td>
		</tr>
<?php
	}
}

function delete_category($id){
	$stmt = DBCON()->prepare("DELETE FROM `category` WHERE `id` = '".$id."'");
	$res = $stmt->execute();
	redirect('category.php');
}
function user_list(){
	$stmt = DBCON()->prepare("SELECT * FROM `users`");
	$stmt->execute();
	$data = $stmt->fetchAll();
	foreach ($data as $k) {?>
		<tr>
			<td><?= $k['id']; ?></td>
			<td><?= $k['fname']; ?></td>
			<td><?= $k['lname']; ?></td>
			<td><?= $k['email']; ?></td>
			<td><?= $k['mobile']; ?></td>
		</tr>
<?php
	}
}

function create_users(){
	$stmt = DBCON()->prepare(
		"INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `mobile`, `role`) 
		VALUES (:fname, :lname, :email, :pass, :mob, :role)");
	$res = $stmt->execute(array(
		':fname' => $_POST["fname"],
		':lname' => $_POST["lname"],
		':email' => $_POST["email"],
		':pass' => md5($_POST["password"]),
		':mob' => $_POST["mobile"],
		':role' => '1'
		));
	redirect('user-list.php');

}

function vendor_list(){
	$stmt = DBCON()->prepare("SELECT * FROM `vendors`");
	$stmt->execute();
	$data = $stmt->fetchAll();
	foreach ($data as $k) {?>
		<tr>
			<td><?= $k['id']; ?></td>
			<td><?= $k['shop_name']; ?></td>
			<td><?= $k['shop_address']; ?></td>
			<td><?= $k['uid']; ?></td>
		</tr>
<?php
	}
}

function create_vendor(){
	$stmt = DBCON()->prepare(
		"INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `mobile`, `role`) 
		VALUES (:fname, :lname, :email, :pass, :mob, :role)");
	$res = $stmt->execute(array(
		':fname' => $_POST["fname"],
		':lname' => $_POST["lname"],
		':email' => $_POST["email"],
		':pass' => md5($_POST["password"]),
		':mob' => $_POST["mobile"],
		':role' => '2'
		));
	if (!empty($res)) {
		$stmt = DBCON()->prepare("SELECT * FROM `users` WHERE `email` = '".$_POST["email"]."'");
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		if (isset($data)) {
			alert($data["id"]);
			$stmt = DBCON()->prepare("INSERT INTO `vendors`(`shop_name`, `shop_address`, `uid`) VALUES (:sname, :saddress, :uid)");
			$res = $stmt->execute(array(
				':sname' => $_POST["sname"],
				':saddress' => $_POST["saddress"],
				':uid' => $data["id"]
				));

			redirect('list-vendor.php');
		}else{
			alert("data error");
		}
	}else{
		alert("insert error");
	}

	
	

	

}
?>