<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Styling Links & Other CSS Tips</title>	
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
	h1 {
		text-transform: uppercase;
	}
	body {
		position: relative;
		display: inline-block;
		height: 100%;
		width: 100%;
		padding: 0;
		margin: 0;
		color: #333333;  /* font color */
		font-family: Calibri;
		background: url("https://i.pinimg.com/564x/d2/0d/ce/d20dced4f45f1c9b25e8313a6b796c8b.jpg");
		background-size: cover;
		background-attachment: fixed;
		text-align: center;
	}
	#container {
		position: relative;
		display: inline-block;
		width: 80%;
		padding: 30px;
		margin-top: 20px;
		border-radius: 0.5em;
		background: rgba(255,255,255,0.8);
	}

    .button-container {
        display: flex;
        gap: 25px;
        justify-content: center;
    }

	/* style the paragraph */
	p.norm {
		position: relative;
		display: inline-block;
		border-radius: 0.3em;
		padding: 20px;
		font-size: 1.2em;
		background: rgba(0,0,0,0.7);
		color: #ffffff;
	}

	/* default link */
	a:link, a:active, a:visited {
		color: #1842A9;
		transition: all 0.5s ease;
	}
	a:hover	{
		color: #EC6C10;
	}

	/* example button style */	
	a.teacher-button:link, a.teacher-button:visited , a.teacher-button:active {
		position: relative;
		display: inline-block;
		padding: 10px 20px 10px 20px;
		margin: 10px; /* 10px around the outside of the link */
		background: #EC6C10;
		color: #ffffff;	
		font-size: 2.0em; /* 210% of normal size */
		text-decoration: none;  /* underline or none */
		font-family: "Roboto";
		border-radius: 0.2em; /*Top/Right/Botton/Left */
		border: 1px solid #333;
		transition: all 0.5s ease;			
	}
	a.teacher-button:hover {
		background: #ffffff;
		color: #f06d06;
		box-shadow: 5px 5px 5px #222222;
	}
	
	/* button 1 style */
	a.my-button1:link, a.my-button1:visited, a.my-button1:active {
        background-color: #f8f7eb;
        border: 2px solid #4e5714;
        border-radius: 30px;
        color: #4e5714;
        display: inline-block;
        font-weight: 600;
        font-size: 18px;
        padding: 0 18px;
        line-height: 50px;
        text-align: center;
        text-decoration: none;
    }

    a.my-button1:hover {
    background-color: #ffffff;
    transform: translateY(-9px, -5px);
    box-shadow: #4e5714 4px 4px 0 0;
    }

		/* button 2 style */
    a.my-button2:link, a.my-button2:visited, a.my-button2:active {
        background: #b534d9;
        background-image: -webkit-linear-gradient(top, #b534d9, #102238);
        background-image: -moz-linear-gradient(top, #b534d9, #102238);
        background-image: -ms-linear-gradient(top, #b534d9, #102238);
        background-image: -o-linear-gradient(top, #b534d9, #102238);
        background-image: linear-gradient(to bottom, #b534d9, #102238);
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        border-radius: 28px;
        -webkit-box-shadow: 0px 0px 22px #f063f3;
        -moz-box-shadow: 0px 0px 22px #f063f3;
        box-shadow: 0px 0px 22px #f063f3;
        font-family: Arial;
        color: #ffffff;
        font-size: 26px;
        padding: 10px 20px 10px 20px;
        border: solid #143e59 0px;
        text-decoration: none;
    }

    a.my-button2:hover {
        background: #000000;
        text-decoration: none;
    }

	
	</style>

</head>
<body>
	<!-- main content -->
	<div id="container">
		<h1>Styling Links</h1>
		<p class="norm">In this activity you will create at least one other link style with a defined class.  From this point forward all of your links on your activities must be styled.  You may want to research other css properties to further understand the cool styles you can add.</p>
		<h2>Default Link</h2>
		<a href="#">Default Link</a>

		<h2>Teacher's Link</h2>
		<a href="https://www.rocketleague.com/" class="teacher-button">ROCKET LEAGUE</a>
		
		<h2>My Links</h2>
		<div class="button-container">
            <a href="#" class="my-button1">an amazing video</a>
            <a href="#" class="my-button2">amazing text</a>
        </div>
        <br>
	</div>
	<!-- /main content -->
	
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
