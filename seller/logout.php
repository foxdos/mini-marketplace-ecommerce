<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['sellislogg']);
session_destroy();

header("location: login.php");

?>