<?php
require_once __DIR__."/../include/config.php";
require_once __DIR__."/../include/if_session.php";
require_once __DIR__."/../include/head.php";
require_once __DIR__."/../include/header.php";
?>

<nav>
	<?php require_once "../include/navigation.php"; ?>
	<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
		require_once "../include/user_tools.php"; 
	else echo "<a href = '../login.php'>Login</a>"; ?>
</nav>

<main></main>
	
<?php require_once __DIR__."/../include/footer.php";?>	