<?php
require_once __DIR__."/include/if_session.php";
require_once __DIR__."/include/config.php";
require_once __DIR__."/include/head.php";
require_once __DIR__."/include/header.php";
?>

<nav> 
	<?php require_once __DIR__."/include/navigation.php"; ?>
	<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
		require_once __DIR__."/include/user_tools.php"; 
	else echo "<a href ='".BASE_URL."/login.php'>Login</a>"; ?>
		
</nav>

<main>
    <?php require_once __DIR__."/pages/home.php";?>
</main>
<?php require_once __DIR__."/include/footer.php";?>	