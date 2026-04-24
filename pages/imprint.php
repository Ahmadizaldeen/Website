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
	<section>
  <h1>Impressum</h1>

  <h2>Angaben gemäß § 5 TMG</h2>

  <p>
    Diese Webseite ist ein Lernprojekt zur Webentwicklung.
  </p>

  <h2>Betreiber</h2>

  <p>
    Max Mustermann<br>
    Deutschland
  </p>

  <h2>Kontakt</h2>

  <p>
    E-Mail: impressum@lernprojekt.dev
  </p>

  <h2>Haftung</h2>

  <p>
    Für Inhalte und technische Fehler wird keine Haftung übernommen, da sich diese Seite im Entwicklungszustand befindet.
  </p>

  <h2>Urheberrecht</h2>

  <p>
    Inhalte dürfen nur zu Lernzwecken verwendet werden.
  </p>
</section>
</main>
	
<?php require_once __DIR__."/../include/footer.php";?>	