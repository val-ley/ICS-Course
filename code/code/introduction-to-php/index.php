<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Introduction to PHP & Variables</title>	
	
	<meta name="description" content="Introduction to PHP & Variables">
	<meta name="author" content="Teacher">	

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- link to animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<!-- link to your gride_styles.css -->
	<link rel="stylesheet" href="../css/grid_styles.css">

	<!-- link to tab icon -->
	<link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />


	<style>
	* {
		box-sizing: border-box;
	}
	body {
		background: url("https://i.pinimg.com/564x/d2/0d/ce/d20dced4f45f1c9b25e8313a6b796c8b.jpg");
		background-size: cover;
		background-attachment: fixed;
		font-family: "Roboto", sans-serif;
		font-weight: 400;
		font-size: 1.0em;
		color: #333;
	}
	.fancyInput {
		position: relative;
		display: inline-block;
		border: 1px solid #3f4b30;
		border-radius: 0.2em;
		width: 100%;
		outline: none;
		padding: 5px 10px;
		font-size: 1.1em;
	}
	.fancyInput:hover {
		border: 1px solid #3f4b30;
	}	
	h1, h2 {
		color: #3f4b30;
	}
	.subButton {
		font-size: 1.1em;
		outline: none;
		border: none;
		border-radius: 0.3em;
		margin: 10px 0;
		transition: all 0.5s ease;
		padding: 5px;
	}
	.subButton:hover {
		background: #3f4b30;
		cursor: pointer;
		color: #fff;
	}	
	.outContainer, .frmContainer {
		padding: 10px;
		background: rgba(250,245,235,0.6);
		border: 1px solid #3f4b30;
		border-radius: 0.4em;
		font-size: 1.1em;
	}
	.varOut {
		background: #3f4b30;
		color: #fff;
		padding: 1px 10px;
		border-radius: 0.2em;
	}
	input {
		margin: 5px 0;
	}
	#container {
		position: relative;
		display: inline-block;
		width: 100%;
		box-sizing: border-box;
		padding: 10px;
	}
	</style>

</head>
<body>
	<!-- main content -->
	<div id="container">
		<div class="grid">
			<!-- full width 12 column -->
			<div class="col-span-12 frmContainer">
				<h1>Simple Form Validation with PHP</h1>

				<?
				echo "
				<h2>What is PHP?</h2>
				<p><b>PHP</b> (recursive acronym for <b>P</b>HP: <b>H</b>ypertext <b>P</b>reprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>
				";
				?>
			</div><br>
			<div class="col-span-6">
				<div class='frmContainer'>
					<h2>The Form</h2>
					<p>Complete the form below and press submit.  Notice how the values are now output (echoed) to the page based and the <b>variable name</b> assigned in the form.</p>
					<h3>Form Attributes</h3>
					<ul>
						<li> "name" is the unique name of the form</li>
						<li> "get" method shows the variables and values in the address bar of your browser</li>
						<li> "post" method hides the type variables and values - the information is posted to the server</li>
						<li> "action" is the URL that the form will direct to once the submit button is pressed</li>
					</ul>

					<form name="form1" action="" method="post">
						<b>Your Name:</b><br />
						<input type="text" name="yourName" value="" class="fancyInput"></input><br />
						<b>Your Last Name:</b><br />
						<input type="text" name="yourLastName" value="" class="fancyInput"></input><br />
						<b>Your Email:</b><br />
						<input type="text" name="yourEmail" value="" class="fancyInput"></input><br />
						<b>Favourite Operating System:</b><br />
						<select name="opSys" class="fancyInput">
							<option value=""></option>
							<option value="PC">PC</option>
							<option value="MAC">MAC</option>
							<option value="Linux">Linux</option><br />
						</select>

						<b>Current Operating System:</b><br />
						<select name="curOpSys" class="fancyInput">
							<option value=""></option>
							<option value="PC">PC</option>
							<option value="MAC">MAC</option>
							<option value="Linux">Linux</option><br />
						</select>

						<input type="submit" value="SUBMIT" name="submitBtn1" class="subButton"></input>
					</form>
				</div>
			</div>
			<br>
			<div class="col-span-6">
			<?

				if (isset($_POST['submitBtn1'])) {
					$yourName = isset($_POST['yourName']) ? $_POST['yourName'] : '';
					$yourEmail = isset($_POST['yourEmail']) ? $_POST['yourEmail'] : '';
					$yourLastName = isset($_POST['yourLastName']) ? $_POST['yourLastName'] : '';
					$opSys = isset($_POST['opSys']) ? $_POST['opSys'] : '';
					$curOpSys = isset($_POST['opSys']) ? $_POST['opSys'] : '';

					echo "
					<div class='outContainer animate__animated animate__fadeIn'>
						<h2>Output</h2>
						<p>Your name: <b class='varOut'>" . $yourName . "</b><br />Your Last name: <b class='varOut'>" . $yourLastName ."</b><br />Your Email: <b class='varOut'>" . $yourEmail ."</b><br />Favourite operating system: <b class='varOut'>{$opSys}</b></p>
						";

						if ($opSys == $curOpSys && $opSys != '') {
							echo "<p> your favorite OS and current OS are the same</p>";
						} elseif ($opSys != '' && $curOpSys != '') {
							echo "<p your favorite OS and current OS are different. how is that?</p>";
						}
						else {
							echo "<p></p>";
						}
					echo "</div>";
					
				}
			?>
			</div>
		</div>
	</div>
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>