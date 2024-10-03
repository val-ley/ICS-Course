<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>PHP Variables Lesson - YOUR NAME</title>	
	
	<meta name="description" content="PUT YOUR PAGE DESCRIPTION HERE">
	<meta name="author" content="PUT YOUR NAME HERE">	
	
	<link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />
	<link rel="stylesheet" href="styles.css?v=1.0">
	
	<style>
	body {
		padding: 20px 80px 20px 80px;
		
		/* http://lea.verou.me/css3patterns/ */
		background: #fff; 
		background-image: 
		linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
		linear-gradient(#eee .1em, transparent .1em);
		background-size: 100% 1.2em;
		
		/* http://cssfontstack.com/ */
		font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
	}
	/* default link styles */
	a:link, a:visited, a:active {
		color: #333333;
		text-decoration: underline;
	}
	a:hover {
		color: #ffa500;
		text-decoration: underline;
	}
	</style>
</head>
<body>
	<!-- main content -->
	<h1>PHP Variables Lesson</h1>
	<p>In this lesson you will learn some basics about variables in PHP.  <b>Variables are like containers that store numbers, strings or in general, information</b>.  For more examples see: <a href="http://www.w3schools.com/php/php_variables.asp">http://www.w3schools.com/php/php_variables.asp</a></p>
	
	<!-- PHP Code Snipets goes below this -->

    <?php
$var1 = "Hello World!";  // no spaces in variables and start with a $
$var2 = "...How are you?";
?>
<?php
echo "<h2>Mathematical Operations</h2>";

// define the three variables
$x = 20;
$y = 5;
$z = 100;

// show the variables
echo "<p>The value of x is <b>" . $x . "</b>, y is <b>" . $y . "</b> and z is <b>" . $z . "</b></p>";

// ADD x and y then subtract z and print it
$result1 = ($x + $y) - $z;
echo "<p>$x + $y - $z = " . $result1 . "</p>";

// MULTIPLY the three numbers together and print it
$result2 = $x * $y * $z;
echo "<p>$x *$y *$z = " . $result2 . "</p>";

// MULTIPY x and y then DIVIDE by z
$result3 = ($x * $y) / $z;
echo "<p>($x * $y) / $z = " . $result3 . "<p>";

// SQUARE of x
$result4 = $x*$x;
echo "<p>$x*$x = " . $result4 . "</p>";

// 3^5
$result5 = pow($y,5);
echo "<p>$y^5 = " . $result5 . "</p>";

// find the SQUARE ROOT of z
$result6 = sqrt($z);
echo "<p>sqrt($z) = " . $result6 . "</p>";

echo "<h2>Math Reference Sheet</h2><p>The following Math Reference Sheet will be very helpful: <a href='http://www.w3schools.com/php/php_ref_math.asp'>http://www.w3schools.com/php/php_ref_math.asp</a></p>";
?>

	<!-- /main content -->
	
<!-- turn work in widget -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>

</body>
