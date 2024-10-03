<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Youtube & Google Maps</title>	

    <!-- browser icon -->
    <link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />
	
	<meta name="description" content="Activity 1.7">
	<meta name="author" content="Valerie Maley">	
	
	<!-- link stylesheet -->
	<link rel="stylesheet" href="../css/styles.css">

	<!-- google fonts -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	
    <style> 
    body {
        background: #fff9f5;
        background-size: cover;
		padding: 50px;
    }

    .container {
        margin-bottom: 30px; /* Adds space between sections */
        padding: 20px;
        border: 2px solid #4b3429;
        border-radius: 15px;
    }

    .maps-container {
        display: block;
        align-items: center;
        padding: 20px; 
    }

    iframe {
        margin-bottom: 15px;
        border-radius: 15px;  
    }
    </style>

</head>
<body>
    <!--Title-->
    <div class="container" style="text-align: center;">
        <h1>PHP Basics: Syntax</h1>
    </div>

    <div class="container">
        <?php
           // This is my first PHP document

        echo "<p>This is my first PHP document.  The text in this paragraph was displayed using the echo command.  This is not cool.</p>";
        echo "<br />This sentence would not " . " be complete unless I learn how to properly" . " append strings." ;
        ?>
    </div>
   
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
