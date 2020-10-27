<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['islogg']);
// session_destroy();

header("location: index.php");

?>