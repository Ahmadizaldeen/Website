<?php
require_once __DIR__."/../tools/get_filename_as_title.php";
$title = get_file_name();
require_once __DIR__ . "/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title?></title>
	<link rel = "stylesheet" href = "<?= BASE_URL ?>/css/style.css">
	<style></style>
	<script src = "<?= BASE_URL ?>/js/script.js"></script>
</head>