<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calculations with PHP</title>	
	
	<meta name="description" content="Put the description here">
	<meta name="author" content="Author information goes here...">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />

	<link rel="stylesheet" href="grid_styles.css">
	
	<link rel="stylesheet" href="../css/styles.css">

	<style>
	body {
		margin: 0;
		width: 100%;
		height: 100%;
		color: #333333;
		font-family: "Roboto";
		text-align: center;
		background: url("https://i.pinimg.com/564x/d2/0d/ce/d20dced4f45f1c9b25e8313a6b796c8b.jpg");
		background-size: cover; 
	}
	h1 {
		color: #3f4b30;
	}
	h3 {
		color: #333;
		text-transform: uppercase;
	}
	#container {
		position: relative;
		display: inline-block;
		width: 80%;
		box-sizing: border-box;
		padding: 10px;
		margin-top: 20px;
		border-radius: 0.5em;
		background: rgba(255,255,255,0.8);
	}
	.box {
		position: relative;
		display: inline-block;
		box-sizing: border-box;
		border: 1px solid #333;
		width: 100%;
		height: 100%;
		padding: 10px;
		background: #f9f9f9;
	}
	.subBtn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #BFB33B; /* Green color */
        color: #fff; /* White text color */
        border: 1px solid #BFB33B; /* Green border */
        border-radius: 4px; /* Rounded corners */
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.5s ease;
    }
    .subBtn:hover {
        background-color: #617c47; /* Slightly darker blue on hover */
		border-bottom: 2px solid #415232;
    }
    input, textarea, select {
    	outline: none;
    	padding: 5px;
    	border: 1px solid #007bff;
    	border-radius: 4px;
    	font-size: 1.2em;
    	margin: 1px;
    }	
  
	</style>
</head>
<body>
	<!-- nav bar -->
	<div class="topnav">
			<a href="../index.php"><i class="fa-solid fa-house"></i></a> 

			<div class="dropdown">
				<button class="dropbtn">
				<a class="bubble_font">Section 1</a>
				</button>

				<div class="dropdown-content">
					<a href="basics">Basics</a>
					<a href="activity-1-1">Activity 1.1</a>
					<a href="Activity_1.2_Valerie">Activity 1.2</a>
					<a href="Activity-1.3_Valerie_Maley">Activity 1.3</a>
					<a href="Activity-1.4-Valerie">Activity 1.4</a>
					<a href="activity-1-5">Activity 1.5</a>
					<a href="activity-1-6">Activity 1.6</a>
					<a href="activity-1-7">Activity 1.7</a>
					<a href="activity-1-8">Activity 1.8</a>
					<a href="activity-1-9">Activity 1.9</a>
				</div>
			</div> 
				<div class="dropdown">
				<button class="dropbtn">
				<a class="bubble_font">Section 2</a>
				</button>

				<div class="dropdown-content">
					<a href="activity-2-1">Activity 2.1</a>
					<a href="grid-layout">Grid Layout</a>
					<a href="php-variables-lesson">PHP Variables Lesson</a>
					<a href="php-variables-lesson-2" >PHP Variables Lesson 2</a>
					<a href="activity-2-2" class="active">Activity 2.2</a>
				</div>
			</div> 
		</div> 
	
<div id="container">
	<div class="grid">
		

		<!-- main content -->

		<div class="col-span-6">
			<div class="box">
				<h2>Average Speed</h2><br />
				<form name="speed" method="post">
					<b>Distance (km):</b><br />
					<input type="number" name="distance" autocomplete="off" placeholder="0" value="" step="any"><br />
					<b>Time (h):</b><br />
					<input type="number" name="time" autocomplete="off" placeholder="0" value="" step="any"><br /><br />
					<input type="submit" value="CALCULATE" name="submit1" class="subBtn">
				</form>
				
				<?php
				if (isset( $_POST['submit1'])) {
					$distance =  $_POST['distance'];
					$time =  $_POST['time'];
					if ($time > 0) {
						$speed = $distance / $time;
						echo "<p>The average speed is " . $speed . " km/h.</p>";
					} else {
						echo "<p>time cannot be zero.</p>";
					}
				}
				?>
			</div>
		</div>

		<div class="col-span-6">
			<div class="box">
				<h2>Area of a Trapezoid</h2><br />
				<form name="trapezoid" method="post">
					<b>Base A:</b><br />
					<input type="number" name="base_a" autocomplete="off" placeholder="0" value="" step="any"><br />
					<b>Base B:</b><br />
					<input type="number" name="base_b" autocomplete="off" placeholder="0" value="" step="any"><br>
					<b>Height:</b><br />
					<input type="number" name="height" autocomplete="off" placeholder="0" value="" step="any"><br><br />
					<input type="submit" value="CALCULATE" name="submit2" class="subBtn">
				</form>
				
				<?php

				if (isset( $_POST['submit2'])) {
					$base_a = $_POST['base_a'];
					$base_b = $_POST['base_b'];
					$height = $_POST['height'];
					$area_trapezoid = (($base_a 
					+ $base_b) * $height) / 2;
					echo "<p>The area of the trapezoid is " . $area_trapezoid . " units.</p>";
				}

				?>
			</div>
		</div>

		<div class="col-span-6">
			<div class="box"?>			
				<h2>Speed of Sound</h2><br />	
				<b>Temperature (Celsius)</b><br />
				<form name="sound_speed" method="post" placeholder="0" value="0">
					<select name="temp">
						<option value="-10">-10</option>
						<option value="0">0</option>
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
					</select><br /><br />
					<input type="submit" value="CALCULATE" name="submit3" class="subBtn"></input>
				</form>

				<?php
				$temp = $_POST['temp']; 

				if (isset($_POST['submit3'])) {
					$speed_of_sound = 0.6 * $temp + 332;
					echo "<p>The speed of sound at " . $temp . "°C is " . $speed_of_sound . " m/s.</p>";
				}
				?>
			</div>
		</div>

		<div class="col-span-6">
			<div class="box">
				<h2>Calculate pH Levels</h2><br />
				<form name="ph_level" method="post">
					<b>Minutes after eating:</b><br />
					<input type="number" name="minutes" autocomplete="off" placeholder="0" value="" step="any"><br><br />
					<input type="submit" value="CALCULATE" name="submit4" class="subBtn">
				</form>
				
				<?php
				if (isset($_POST['submit4'])) {
					$minutes = $_POST['minutes'];
					if (is_numeric($minutes) && $minutes >= 0) {
						$ph_level = ((-20 * $minutes) / ($minutes * $minutes + 4)) + 7;
						echo "<p>After " . $minutes . " minutes, the pH level is " . round($ph_level, 2) . ".</p>";
					} else {
						echo "<p>Ph is 7.</p>";
					}
				}
				?>
			</div>
		</div>
	</div>
</div>

<!-- end main content -->

	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>