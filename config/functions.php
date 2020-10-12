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




function userinfofetch(){
	$id = $_SESSION['email'];
	$stmt = DBCON()->prepare("SELECT * FROM `users` WHERE username = '$id' OR email = '$id' LIMIT 1");
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	$fullname = json_decode($data['fullname'],true);
	$userinfo = array(
		'id' => $data['id'],
		'fname' => $fullname['first'],
		'mname' => $fullname['middle'],
		'lname' => $fullname['last'],
		'uname' => $data['username'],
		'email' => $data['email'],
		'mobile' => $data['mobile'],
		'role' => $data['role'],
		'info' => $data['information'],
	);
	$_SESSION['user_info'] = $userinfo;
}
?>