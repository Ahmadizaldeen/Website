<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<hr>
<span><?="Hallo " . $_SESSION['user']?></span>
<a href = "user_pages/setting.php">Setting</a>
<a href = "user_pages/static.php">static</a>
<a href = "user_pages/signout.php">signout</a>
<hr>