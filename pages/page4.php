<?php
if (session_status() === PHP_SESSION_NONE) { // prüft ob die Session bereits gestartet
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 4</title>
	<link rel = "stylesheet" href = "css/style.css">
	<style></style>
	<script src = "js/script.js"></script>
</head>
<body>

	<header><h1>Page 4</h1></header>

	<nav>
		<?php require_once "../include/navigation.php"; ?>
		<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
			require_once "../include/user_tools.php"; ?>
	</nav>

	<main></main>
	
	<footer>
		<?php require_once "../include/footer_navi.php"; ?>
	</footer>
	
</body>
</html>