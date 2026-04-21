<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user'])){ // keine direktes zugriff auf user-pages ohne Login
    header("Location:" .BASE_URL ."/login.php");
    exit();
}
session_unset();
session_destroy();
header("Location: ../home.php");
?>