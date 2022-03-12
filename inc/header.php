<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../classes/Project.php');
$db  = new Database();
$pro = new Project();
?>
<!doctype html>
<html>

<head>
	<title>Jquery Simple Event</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="project">
		<section class="headeroption">
			<h2>Jquery Basic Events</h2>
		</section>
		<section class="maincontent">