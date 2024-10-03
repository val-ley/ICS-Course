<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Making the Grade</title>	
	
	<meta name="description" content="Learning about conditional statements">
	<meta name="author" content="Valerie, student at gwss">
	<link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/1560881833/catscience_400x400.jpg" />

	<style>
	body {
		font-family: "Calibri", sans-serif;
		background: url("../images/chalkboard-background-with-doodles.jpg");
		background-size: cover;
		background-attachment: fixed;
		margin: 0;
		color: #ffffff;
		padding: 0;
	}
	.error {
		color: #ff0000;
	}
	#reportContainer {
		position: relative;
		margin-left: auto;
		margin-right: auto;
		width: 80%; 
		padding: 2%; 
		margin-top: 100px;
		background: rgba(0,0,0,0.4);
		border-radius: 0.5em; 
	}
	.niceInput {
		outline: none;
		border: 1px solid #617c47;
		border-radius: 4px;
		font-size: 1.1em; 
		padding: 5;
		margin: 1px;
	}
	.subBtn {
        display: inline-block;
        padding: 5px 20px;
        background-color: #617c47; /* Blue color */
        color: #fff; /* White text color */
        border: 1px solid #617c47; /* Blue border */
        border-radius: 4px; /* Rounded corners */
        text-align: center;
        text-decoration: none;
        margin: 1px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.5s ease;
    }
    .subBtn:hover {
        background-color: #3e512b; /* Slightly darker blue on hover */
    }	
	</style>

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="grid_styles.css">
</head>
<body>
	<?
	// Process the form
	if ($_POST['subBtn']) {
		// store the posted values from the form in variables
		$stu_name = $_POST['theName'];
		$stu_mark = $_POST['theMark'];

		$errorMsg = ""; // initialize error message
		$error = false;
		$special_comment = "";
		
		if ($stu_name == "" OR $stu_mark == "") {
			// append error statement if fields are left empty (simple error checking)
			$errorMsg .= "<p class='error'>You must include a name and mark!</p>";
			$error = true;
		} else if ($stu_mark < 0 || $stu_mark > 100) {
			// out of range marks
			$errorMsg .= "<p class='error'>Mark is out of range! Please enter a mark between 0 and 100.</p>";
			$error = true;
		} else {
			if ($stu_mark < 50) {
				$letter_grade = "Unsuccessful";
			} else if ($stu_mark < 55) {
				$letter_grade = "D-";
			} else if ($stu_mark == 55) {
				$letter_grade = "D";
			} else if ($stu_mark < 60) {
				$letter_grade = "D+";
			} else if ($stu_mark < 65) {
				$letter_grade = "C-";
			} else if ($stu_mark == 65) {
				$letter_grade = "C";
			} else if ($stu_mark < 70) {
				$letter_grade = "C+";
			} else if ($stu_mark < 75) {
				$letter_grade = "B-";
			} else if ($stu_mark == 75) {
				$letter_grade = "B";
			} else if ($stu_mark < 80) {
				$letter_grade = "B+";
			} else if ($stu_mark < 90) {
				$letter_grade = "A-";
			} else if ($stu_mark == 90) {
				$letter_grade = "A";
			} else {
				$letter_grade = "A+";

				if ($stu_mark >= 95) {
					$special_comment = "Excellent Work!";
				}
			}
		}
	}
	?>
	<div id="reportContainer">
		<h1>Making the Grade!</h1>
		<p>This is a mock student report.  Include more details about the learning outcomes of this task.  Make sure you are using the grid layout as indicated in this base code.<br />
		
		<!-- responsive design -->
		<div class="grid">
			<div class="col-span-6">
				<!-- add user input form here-->
				<h3>Student Information</h3>		
				<form method="post">
					<label for="theName">Student Name:</label><br>
					<input type="text" id="theName" name="theName" class="niceInput"><br><br>
					<label for="theMark">Student Mark:</label><br>
					<input type="number" id="theMark" name="theMark" class="niceInput"><br><br>
					<input type="submit" name="subBtn" value="Submit" class="subBtn">
				</form>
			</div>
			<div class="col-span-6">
				<h3>Output</h3>
				<?
				if ($_POST['subBtn']) {
					if ($error == true) {
						echo $errorMsg;
					} else {
						echo "<p>
						<b>Student's Name:</b> " . $stu_name . "<br />
						<b>Student's Mark:</b> " . $stu_mark . "<br />
						<b>Letter Grade:</b> " . $letter_grade . "<br />
						</p>";

						if ($special_comment != "") {
							echo "<p><b>Special Comment:</b> " . $special_comment . "</p>";
						} else {
							echo "<p style='color: rgba(0, 0, 0, 0);'></p>";
						}
					}
				}		
				?>				
			</div>
		</div>
	</div>
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>