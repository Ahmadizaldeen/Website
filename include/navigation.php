<?php require_once __DIR__ . "/config.php"; ?>

<a href = "<?= BASE_URL ?>/pages/home.php">Home</a>
<a href = "<?= BASE_URL ?>/pages/page1.php">Muster Table</a>
<a href = "<?= BASE_URL ?>/pages/page2.php">Chess</a>
<a href = "<?= BASE_URL ?>/pages/page3.php">Dynamic Tables</a>
<a href = "<?= BASE_URL ?>/pages/page4.php">Lotto</a>
<?php if (!isset($_SESSION['user'])): ?>
<a href = "<?= BASE_URL ?>/signup.php">Sign up</a>
<?php endif; ?>