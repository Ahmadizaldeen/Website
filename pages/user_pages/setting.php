<?php
require_once __DIR__."/../../include/config.php";
require_once __DIR__."/../../include/if_session.php";
require_once __DIR__."/../../include/head.php";
require_once __DIR__."/../../include/header.php";
?>

<nav>
	<?php require_once __DIR__ . "/../../include/navigation.php"; ?>
	<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
		require_once __DIR__ . "/../../include/user_tools.php"; ?>
</nav>

<main>
    <h2>Einstellungen</h2>
    <h3>Profil</h3>
    <p>
        Name: <?= $_SESSION['user_data']['firstname'] . " " . $_SESSION['user_data']['lastname'] ?><br>
        Username: <?= $_SESSION['user_data']['user_name'] ?>
    </p>
	
    <hr>

    <h3>Theme Farbe</h3>
    <input type="color" id="theme-color">
    <button onclick="resetColor()">Zurücksetzen</button>
</main>
	
<?php require_once __DIR__."/../../include/footer.php";?>	