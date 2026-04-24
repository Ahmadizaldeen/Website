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
  <h1>Kontakt</h1>

  <p>
    Wenn du Fragen hast, Feedback geben willst oder einfach nur testen möchtest, ob das Formular wirklich funktioniert:
  </p>

  <h2>Kontaktmöglichkeiten</h2>

  <p><strong>E-Mail:</strong> kontakt@meine-uebungswebseite.de</p>

  <h2>Typische Probleme</h2>

  <ul>
    <li>Button reagiert nicht → wahrscheinlich Feature</li>
    <li>Seite sieht anders aus → bewusst so</li>
    <li>Fehler im Code → willkommen im Lernprozess</li>
  </ul>
</section>
</main>
	
<?php require_once __DIR__."/../include/footer.php";?>	