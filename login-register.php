<?php 
require_once 'config/init.php';
include 'header.php';
$DB=DBCON();

if (isset($_SESSION['islogg']) && $_SESSION['islogg'] != false) {
    redirect('my-account.php');
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $stmt = $DB->prepare("SELECT * FROM `users` WHERE email = :email LIMIT 1");
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($password == $result['password']) {
        $_SESSION['email'] = $email;
        $_SESSION['islogg'] = true;
        alert("Login Successfully");
        if (isset($_GET["preurl"])) {
            redirect($_GET["preurl"]);
        }else{
            redirect('my-account.php');
        }
        
    }else{
        alert("Login Unsuccessfully");
    }
}

if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $stmt = DBCON()->prepare("INSERT INTO `users`(`email`, `password`) VALUES (:email,:password)");
    $result = $stmt->execute(
        array(
            ':email' =>  $email,
            ':password'    =>  $password
        )
    );
    if($result) {
        alert("Account Successfully");
        redirect("my-account.php");
    }

}

?>
        <!-- mini cart start -->
        
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">login - register </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-register-area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="" method="post">
                                                <input name="login" value="true" type="hidden">
                                                <input name="email" placeholder="Email" type="email">
                                                <input type="password" name="password" placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input name="register" value="true" type="hidden">
                                                <input name="email" placeholder="Email" type="email">
                                                <input type="password" name="password" placeholder="Password">
                                                <div class="button-box">
                                                    <button type="submit">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>