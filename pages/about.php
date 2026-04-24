<?php
require_once __DIR__."/../include/config.php";
require_once __DIR__."/../include/if_session.php";
require_once __DIR__."/../include/head.php";
require_once __DIR__."/../include/header.php";
?>

<nav>
	<?php require_once __DIR__."/../include/navigation.php"; ?>
	<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
		require_once __DIR__."/../include/user_tools.php"; 
	else echo "<a href = '".BASE_URL."/login.php'>Login</a>"; ?>
</nav>

<main>
<section>
  <h1>Über Uns</h1>

  <p>
    Willkommen auf dieser Übungswebseite – einem Ort, an dem Code wächst, Fehler leben und manchmal alles überraschend funktioniert.
  </p>

  <p>
    Diese Seite dient ausschließlich Lernzwecken und wurde entwickelt, um Webentwicklung praktisch zu verstehen.
    HTML, CSS, JavaScript und PHP treffen hier regelmäßig aufeinander – manchmal friedlich, manchmal eher nicht.
  </p>

  <h2>Unser Ziel</h2>

  <ul>
    <li>Saubere Webentwicklung lernen</li>
    <li>Strukturierte Projekte aufbauen</li>
    <li>Fehler verstehen statt ignorieren</li>
  </ul>

  <p>
    Wenn etwas hier nicht perfekt aussieht, ist das kein Fehler – sondern Teil des Lernprozesses.
  </p>
</section>
</main>
	
<?php require_once __DIR__."/../include/footer.php";?>	