<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Valerie Maley ICS3U0</title>	
	
	<meta name="description" content="this page contains all of the directories I will be making throughout the course.">
	<meta name="author" content="Valeie Maley">	
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<!-- main content -->
	<h1 class="red_text">Valerie Maley ICS3U0</h1>
	<h2 class="green_text">Activities</h2>

	<div class="fancy" style="border-color: rgb(54, 54, 54)">
		<a href="basics" class="cool">BASICS (First Activity)</a><br /><br>
		<a href="activity-1-1" class="cool">Activity 1.1</a><br /><br>
		<a href="Activity_1.2_Valerie" class="cool">Activity 1.2</a><br /><br>
		<a href="Activity-1.3_Valerie_Maley" class="cool">Activity 1.3</a><br /><br>
		<a href="Activity-1.4-Valerie" class="cool">Activity 1.4</a><br /><br>
		<a href="activity-1-5" class="cool">Activity 1.5</a><br /><br>
		<a href="activity-1-6" class="cool">Activity 1.6</a><br /><br>
		<a href="activity-1-7" class="cool">Activity 1.7</a><br /><br>
		<a href="activity-1-8" class="cool">Activity 1.8</a><br /><br>
		<a href="activity-1-9" class="cool">Activity 1.9</a><br /><br>
	</div>

	<!-- end main content -->
	
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
