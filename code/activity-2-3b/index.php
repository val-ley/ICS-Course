<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Making the Grade</title>	
	
	<meta name="description" content="Learning about conditional statements">
	<meta name="author" content="Valerie, student at gwss">
	<link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />

	<style>
	body {
		font-family: "Gaegu", sans-serif;
        background: url("https://i.pinimg.com/564x/d0/e6/48/d0e648701af12370276c8a8a1b735a25.jpg");
		background-size: cover;
		background-attachment: fixed;
		margin: 0;
		color: #333;
		padding: 0;
	}
	
	#niceContainer {
        font-family: "Gaegu", sans-serif;
		position: relative;
		margin-left: auto;
		margin-right: auto;
		width: 80%; 
		padding: 2%; 
		margin-top: 100px;
		background: rgba(0,0,0,0.4);
		border-radius: 0.5em; 
	}
    .box {
        position: relative;
		display: inline-block;
		box-sizing: border-box;
		padding: 10px;
		background: #f9f9f9;
        border-radius: 4px;
        border: 0px;
    }
	.niceInput {
        font-family: "Gaegu", sans-serif;
		outline: none;
		border: 1px solid #617c47;
		border-radius: 4px;
		font-size: 1.4em; 
		padding: 5;
		margin: 1px;
	}
	.subBtn {
        font-family: "Gaegu", sans-serif;
        display: inline-block;
        padding: 5px 20px;
        background-color: #617c47; /* Blue color */
        color: #fff; /* White text color */
        border: 1px solid #617c47; /* Blue border */
        border-radius: 4px; /* Rounded corners */
        text-align: center;
        text-decoration: none;
        margin: 1px;
        font-size: 18px;
        cursor: pointer;
        transition: all 0.5s ease;
    }
    .subBtn:hover {
        background-color: #3e512b; /* Slightly darker blue on hover */
    }	
    .niceFont {
        font-family: "Gaegu", sans-serif;
    }
	</style>

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Gaegu:wght@300;400;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="grid_styles.css">
</head>
<body>

		<div id="niceContainer" class="grid">
			<div class="col-span-6">

            <h2>Select a Day of the Week</h2>

            <form method="POST" >
            <label for="day">Choose a day:</label>
            <select name="day" class="niceFont">
                <option value="">Select a Day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
            <br><br>
            
            <input type="submit" name="submit1" class="subBtn"><br><br>
            <div>
            <?php
				if (isset($_POST['submit1'])) {
                    $day = $_POST['day'];
                    if (!empty($day)) {
                        echo '<div class="box">';
                        if ($day == "Monday") {
                            echo "Argh, I’m always tired on Mondays!";
                        } elseif ($day == "Tuesday") {
                            echo "It’s Tuesday, Let's go! Second day!";
                        } elseif ($day == "Wednesday") {
                            echo "Middle of the week, Happy Wednesday!";
                        } elseif ($day == "Thursday") {
                            echo "Almost there, it's Thursday!";
                        } elseif ($day == "Friday") {
                            echo "Yay, it’s Friday!";
                        } elseif ($day == "Saturday") {
                            echo "It's Saturday!";
                        } elseif ($day == "Sunday") {
                            echo "It's Sunday! Get some rest!";
                        }
                        echo "</div>";
                    } else {
                        echo "Please select a day of the week!";
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