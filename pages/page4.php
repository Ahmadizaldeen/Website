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
	else echo "<a href = '".BASE_URL."/login.php'>Login</a>"; ?>
</nav>

<main>
	<h3>Versuche dein Glück</h3>
	<?php require_once __DIR__."/public_pages/lotto_generator.php";?>
</main>
	
<?php require_once __DIR__."/../include/footer.php";?>	