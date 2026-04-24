<?php
require_once __DIR__."/../../include/config.php";
require_once __DIR__."/../../include/if_session.php";
require_once __DIR__."/../../include/head.php";
require_once __DIR__."/../../include/header.php";
require_once __DIR__."/../../include/blog_statistic.php";
?>
    
	<nav>
		<?php require_once __DIR__ . "/../../include/navigation.php"; ?>
		<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
			require_once __DIR__ . "/../../include/user_tools.php"; ?>
	</nav>

	<main>
        <h3>Anzahl der Users :</h3>
		<?php echo get_user_count($blogs_file); ?>
		<h3>Anzahl aller Posts  :</h3>
		<?php echo get_posts_count($blogs_file); ?>
		<br>
    </main>
	
<?php require_once __DIR__."/../../include/footer.php";?>	