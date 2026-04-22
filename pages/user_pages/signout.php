<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once "../../include/config.php";
if (!isset($_SESSION['user_data'])){ // keine direktes zugriff auf user-pages ohne Login
    
    echo "You are not logged in.";
    header("Location:" .BASE_URL ."login.php");
    exit();
}
session_unset();
session_destroy();
header("Location: ../home.php");
?>