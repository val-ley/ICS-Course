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
		background: url("https://wallpapercave.com/wp/53asxQv.jpg");
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
		$password = $_POST['pwd'];
		$evolveType = $_POST['evolveType'];
		$pokemon1 = $_POST['pokemon1'];
		$pokemon2 = $_POST['pokemon2'];
		$pokemonType = $_POST['pokemonType'];
		$info = $_POST['info'];
		$hideme = $_POST['hideme'];

		// display the user inputs to the screen
		echo "<div class='output'>";
		echo "<p>Your first name is <b>" . $firstName . "</b>.</p>";
		echo "<p>Your password is <b>"  . $password . "</b>.</p>";
		echo "<p>Your evolve type is <b>"  . $evolveType . "</b>.</p>";
		if (isset($pokemon1)) {
			echo "<p>You caught <b>"  . $pokemon1 . "</b>.</p>";
		}
		if (isset($pokemon2)) {
			echo "<p>You caught <b>"  . $pokemon2 . "</b>.</p>";
		}
		echo "<p>Your Pokemon type is <b>"  . $pokemonType . "</b>.</p>";
		echo "<p>Additional Pokemon Information: <b>"  . $info . "</b>.</p>";
		echo "<p>The answer to the universe is (hidden variable): <b>" . $hideme . "</b>.</p>";
		echo "</div>";
	}
	?>

		<!-- there are two form methods: "get" and "post" ; "get" shows the values for the type variables and values, "post" hides the type variables and values //-->
		<form name="form1" action="" method="post">
			<!-- text input //-->
			First Name: <input type="text" name="fname" value="" placeholder="FIRST NAME"></input>
			<hr size="1" />
			
			<!-- password input //-->
			Password: <input type="password" name="pwd" value=""></input>
			<hr size="1" />
			
			<!-- radio input //-->
			<h3>Evolve Type</h3>
			<input type="radio" name="evolveType" value="Fire" checked> Basic</input>
			<input type="radio" name="evolveType" value="Grass"> Evolution 1</input>
			<input type="radio" name="evolveType" value="Water"> Evolution 2</input>
			<input type="radio" name="evolveType" value="Water"> GX</input>
			<input type="radio" name="evolveType" value="Water"> EX</input>

			<hr size="1" />
			
			<!-- checkbox input //-->
			<h3>Gotta Catch'em All!</h3>
			<input type="checkbox" name="pokemon1" value="Pikachu"> I caught PIKACHU</input>
			<input type="checkbox" name="pokemon2" value="Charamander"> I caught CHARAMANDER</input>
			<hr size="1" />
			
			<!-- simple drop-down list //-->
			<h3>Type</h3>
			<select name="pokemonType">
				<option value="">- Choose a Type -</option>
				<option value="Fairy">Fairy</option>
				<option value="Dragon">Dragon</option>
				<option value="Electric">Electric</option>
				<option value="Grass">Grass</option>
				<option value="Water">Water</option>
			</select>
			<hr size="1" />
			
			<!-- textarea input //-->
			<h3>Pokemon Description</h3>
			<textarea name="info" rows="5" cols="50"></textarea>
			<hr size="1" />
			
			<!-- hidden input -->
			<input type="hidden" name="hideme" value="42"></input>
			
			<!-- submit button //-->
			<input type="submit" name="subButton" value="SUBMIT"></input>
		</form>
	</div>
</body>
</html>

