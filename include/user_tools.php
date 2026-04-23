<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/config.php"; 

?>
<hr>
<span><?="Hallo " . $_SESSION['user_data']['firstname'] . " ". $_SESSION['user_data']['lastname']?></span>
<a href = "<?= BASE_URL ?>/pages/user_pages/create_post.php">Create Post</a>
<a href = "<?= BASE_URL ?>/pages/user_pages/setting.php">Setting</a>
<a href = "<?= BASE_URL ?>/pages/user_pages/static.php">static</a>
<a href = "<?= BASE_URL ?>/pages/user_pages/signout.php">signout</a>
<hr>