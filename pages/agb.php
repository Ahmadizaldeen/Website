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

<main>
	<section>
  <h1>Allgemeine Geschäftsbedingungen</h1>

  <h2>§1 Geltungsbereich</h2>
  <p>
    Diese Webseite ist ein Lernprojekt. Mit der Nutzung akzeptierst du, dass nicht alles produktionsreif ist.
  </p>

  <h2>§2 Inhalte</h2>
  <ul>
    <li>Inhalte können sich jederzeit ändern</li>
    <li>Funktionen können experimentell sein</li>
    <li>Design kann sich spontan entwickeln</li>
  </ul>

  <h2>§3 Haftung</h2>
  <p>
    Für Fehler, Bugs oder unerwartetes Verhalten wird keine Haftung übernommen.
  </p>

  <h2>§4 Schluss</h2>
  <p>
    Wenn alles funktioniert: nicht anfassen.
  </p>
</section>
</main>
	
<?php require_once __DIR__."/../include/footer.php";?>	