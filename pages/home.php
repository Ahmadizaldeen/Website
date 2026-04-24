<?php
require_once __DIR__."/../include/config.php";
require_once __DIR__."/../include/if_session.php";
require_once __DIR__."/../include/head.php";
require_once __DIR__."/../include/header.php";
?>

<nav> <!-- seiten für gaste ausblinden-->
	<?php require_once __DIR__."/../include/navigation.php"; ?>
	<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
		require_once __DIR__."/../include/user_tools.php"; 
	else echo "<a href ='".BASE_URL."/login.php'>Login</a>"; ?>
		
</nav>

<main>
	<h2>Willkommen auf meinem Blog</h2>
	<hr>
	<h3>News :</h3>
	<?php require_once __DIR__."/../include/blog_functions.php";
	$blogs_file = "../data/blogs.txt";
	?>
	<div border="1" style="border-collapse: collapse; width: 75%; text-align: left;">
		<?=show_posts($blogs_file);?>
	</div>
</main>
	
<?php require_once __DIR__."/../include/footer.php";?>	