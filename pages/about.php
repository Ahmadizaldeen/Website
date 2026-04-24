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
<p> Über Uns

Willkommen auf dieser legendären Übungswebseite — dem digitalen Ort, an dem Kaffee in Code umgewandelt wird und Bugs manchmal als „Features“ weiterleben.

Diese Seite wurde mit viel Geduld, einigen fragwürdigen Entscheidungen um 2 Uhr nachts und einer gesunden Portion „Warum funktioniert das jetzt nicht?“ erstellt.

Hier wird gelernt, getestet, verbessert und gelegentlich auch leicht verzweifelt. HTML, PHP, CSS haben bereits einige hitzige Diskussionen erlebt — meistens hat am Ende der fehlende Semikolon gewonnen.

Unser Ziel ist einfach:

Eine funktionierende, saubere und vielleicht sogar schöne Webseite zu bauen.

Unsere Nebenaufgaben:

Debugging betreiben wie ein Detektiv
Stack Overflow heimlich als zweiten Lehrer nutzen
Fehler beheben, die gestern noch nicht da waren
So tun, als wäre alles von Anfang an geplant gewesen

Falls hier also mal etwas komisch aussieht:
Das ist entweder ein geheimer Prototyp…
oder ich habe wieder div in div in div gebaut.

Trotzdem gilt:

Jeder große Entwickler hat klein angefangen.

Und genau hier passiert das.

Danke fürs Vorbeischauen — und bitte nicht zu tief in den Quellcode schauen.
Manche Dinge sind besser ungelöst.
</p>
</main>
	
<?php require_once __DIR__."/../include/footer.php";?>	