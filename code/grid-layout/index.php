<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Grid Layout & Responsive Design</title>	
	
	<meta name="description" content="Template Page & Grid Layout & Responsive Design">
	<meta name="author" content="Teacher">	

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="grid_styles.css">

	<style>
	body {
		margin: 0;
		width: 100%;
		height: 100%;
		color: #333333;
		font-family: "Roboto";
	}
	h3 {
		color: #333;
		text-transform: uppercase;
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
			<div class="col-span-12">
				<h1><i class="fas fa-th"></i> Grid Layout & Responsive Design</h1>
			</div>

			<!-- full width 12 column -->
			<div class="col-span-12">
				<h3>Full Width - 12 col</h3>
				<p>The key is the sum of the columns must always equal 12.  That's about it. :)</p>
			</div>	

			<!-- 6 + 6 = 12 -->
			<div class="col-span-6">
				<h3>6 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>	
			<div class="col-span-6">
				<h3>6 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>	

			<!-- 8 + 4 = 12 -->
			<div class="col-span-8">
				<h3>8 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>	
			<div class="col-span-4">
				<h3>4 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>	

			<!-- 2 + 3 + 7 = 12 -->
			<div class="col-span-2" style="background: #ccc;">
				<h3>2 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>	
			<div class="col-span-3" style="background: #cea200;">
				<h3>3 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col-span-7" style="background: #ccc;">
				<h3>7 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<iframe width="100%" height="500" src="https://www.youtube.com/embed/ScMzIvxBSi4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>	

			<!-- 2 + 2 + 8 = 12 -->
			<div class="col-span-2">
				<h3>2 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>	
			<div class="col-span-2">
				<h3>2 col</h3>
				<img src="https://www.thecoderpedia.com/wp-content/uploads/2020/06/Programming-Jokes-Coding-Error-1024x860.jpg?x80061" alt="sad" style="width: 100%; padding: 5px;" />
			</div>		
			<div class="col-span-8">
				<h3>8 col</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>					
		</div>
	</div>
	<!-- /main content -->

	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>

