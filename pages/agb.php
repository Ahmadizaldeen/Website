<?php
require_once __DIR__."/../include/config.php";
require_once __DIR__."/../include/if_session.php";
require_once __DIR__."/../include/head.php";
require_once __DIR__."/../include/header.php";
?>

<nav>
	<?php require_once __DIR__ . "/../include/navigation.php"; ?>
	<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
		require_once "../include/user_tools.php"; 
	else require_once __DIR__ . "/../include/user_tools.php"; ?>
</nav>

<main></main>
	
<?php require_once __DIR__."/../include/footer.php";?>	