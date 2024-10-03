<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Pokemon - Working with Forms</title>	
	
	<meta name="description" content="More about CSS">
	<meta name="author" content="Author information goes here...">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	
	<!-- styles - internal (not linked) -->
	<style>
	* {
		/* apply to all elements */
  		box-sizing: border-box;
	}
	body {
		position: relative;
		display: inline-block;
		height: 100%;
		width: 100%;
		padding: 0;
		margin: 0;
		color: #ffffff;  /* font color */
		font-family: "Roboto";
		background: url("https://cdn.mos.cms.futurecdn.net/UqKrHFjGaYQ3Fi9rACt6S9-1200-80.jpg");
		background-size: cover;
		background-attachment: fixed;
		text-align: center;
	}
	#container {
		position: relative;
		display: inline-block;
		width: 80%;
		padding: 10px;
		margin-top: 20px;
		margin-bottom: 20px;
		border-radius: 0.5em;
		background: rgba(61,62,104,0.7);
	}
	form {
		position: relative;
		padding: 20px;
	   	width: 80%;
	   	margin-left: auto;
	   	margin-right: auto;
		text-align: left;
	}
	input, select, textarea {
		font-size: 1.4em;
		border: 1px solid #999999;
		padding: 5px;
		border-radius: 0.5em;
		outline: none;
		margin: 5px;
	}
	.output {
		position: relative;
		display: inline-block;
		margin-top: 20px;
		background: rgba(0,0,0,0.7);
		text-align: left;
		padding: 20px;
	}
	</style>
</head>
<body>
	<!-- PHP extension code goes below this -->

	<!-- main content -->
	<div id="container">
		<h2>Pokemon - User Input from Forms</h2>
		<p>This is a practice form to start learning how to get user input from forms and process the data.</p>

		<?php
	// only show the information if the button named "subButton" has been pressed
	if ($_POST['subButton']) {
		// set the variable with the submitted value
		$firstName = $_POST['fname'];
		$Planet = $_POST['Planet'];
		$star1 = $_POST['star1'];
		$star2 = $_POST['star2'];
		$star3 = $_POST['star3'];
		$star4 = $_POST['star4'];
		$Astronomy = $_POST['Astronomy'];
		$info = $_POST['info'];
		$hideme = $_POST['hideme'];

		// display the user inputs to the screen
		echo "<div class='output'>";
		echo "<p>Your  name is <b>" . $firstName . "</b>.</p>";
		echo "<p>The best planet is <b>"  . $Planet . "</b>.</p>";
		if (isset($star1)) {
			echo "<p>A star that you like is <b>"  . $star1 . "</b>.</p>";
		}
		if (isset($star2)) {
			echo "<p>A star that you like is <b>"  . $star2 . "</b>.</p>";
		}
		if (isset($star3)) {
			echo "<p>A star that you like is <b>"  . $star3 . "</b>.</p>";
		}
		if (isset($star4)) {
			echo "<p>A star that you like is <b>"  . $star4 . "</b>.</p>";
		}
		echo "<p><b>"  . $Astronomy . "</b>.</p>";
		echo "<p>Most Interesting Astronomy Fact: <b>"  . $info . "</b>.</p>";
		echo "<p>The answer to the universe is for some reason (hidden variable): <b>" . $hideme . "</b>.</p>";
		echo "</div>";
	}
	?>

		<!-- there are two form methods: "get" and "post" ; "get" shows the values for the type variables and values, "post" hides the type variables and values //-->
		<form name="form1" action="" method="post">
			<!-- text input //-->
			Name: <input type="text" name="fname" value="" placeholder="NAME"></input>
			<hr size="1" />
			
			
			<!-- radio input //-->
			<h3>Best Planet:</h3>
			<input type="radio" name="Planet" value="Mercury" checked> Mercury</input>
			<input type="radio" name="Planet" value="Venus"> Venus</input>
			<input type="radio" name="Planet" value="Earth"> Earth</input>
			<input type="radio" name="planet" value="Mars"> Mars</input>
			<input type="radio" name="Planet" value="Jupiter" checked> Mercury</input>
			<input type="radio" name="Planet" value="Saturn"> Venus</input>
			<input type="radio" name="Planet" value="Uranus"> Earth</input>
			<input type="radio" name="planet" value="Neptune"> Mars</input>

			<hr size="1" />
			
			<!-- checkbox input //-->
			<h3>Choose some stars you like:</h3>
			<input type="checkbox" name="star1" value="The Sun">Sun</input>
			<input type="checkbox" name="star2" value="Sirius">Sirius</input>
			<input type="checkbox" name="star3" value="Polaris">Polaris</input>
			<input type="checkbox" name="star4" value="iPFT14hls">iPFT14hls</input>
			<hr size="1" />
			
			<!-- simple drop-down list //-->
			<h3>Do you like astronomy?</h3>
			<select name="Astronomy">
				<option value="">- -</option>
				<option value="Yes, you like astronomy">Yes</option>
				<option value="No, I don't like astonomy">No</option>
				<option value="Maybe I do like astronomy">Maybe</option>
			</select>
			<hr size="1" />
			
			<!-- textarea input //-->
			<h3>What is the most interesting fact you know about astronomy?</h3>
			<textarea name="info" rows="5" cols="50"></textarea>
			<hr size="1" />
			
			<!-- hidden input -->
			<input type="hidden" name="hideme" value="42"></input>
			
			<!-- submit button //-->
			<input type="submit" name="subButton" value="SUBMIT"></input>
		</form>
	</div>
<!-- turn work in widget -->
<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>

