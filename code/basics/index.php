<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Plants</title>	
	
	<meta name="description" content="The basics of creating an HTML5 page">
	<meta name="author" content="HTML Basics">	
	
	<!-- link stylesheet -->
	<link rel="stylesheet" href="../css/styles.css">

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/noto-serif-display" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <style> 
    body {
        max-width: 1250px;
    }
    </style>

</head>
<body> 
    
    <hr>
    <h1 class="fancy_font">ALL ABOUT PLANTS</h1>
    <hr>
    <br>

	<!-- main content -->

			<img style="width: 1200px; height: 100px; object-fit: cover;" src="https://i.pinimg.com/564x/08/70/4c/08704cc74cc80fade542602de55f76e7.jpg" alt="trailpath" class="rounded-corner"/>
		</div>
		
		<!-- new section -->
            
            <div class="half_width_box" style="float: right">
                <h3>Pothos.</h3>
                <p>Best plant.</p>
                <p>Qualities making it the best plant:</p>
                <ul>
                    <li>Easy to take care of (It does not die due to poor care).</li>
                    <li>It looks very nice.</li>
                    <li>Easy to propogate, so you can have more pathos plants.</li>
                    </ul>
                    <img style="width: 400px; height: 400px; "src="https://i.pinimg.com/564x/10/89/ee/1089ee2705aaa6758a5938847c267939.jpg" alt="pothos plant" class="rounded-corner" class="center"/>
            </div>

            <div class="half_width_box">
                <h3>Bamboo.</h3>
                <p>Pretty good plant, have nothing bad to say.</p><br><br>
				<img style="width: 400px; height: 400px; "src="https://i.pinimg.com/564x/a7/62/81/a762816c4db29f4cc47df75c532544c5.jpg" alt="bamboo plant" class="rounded-corner" class="center"/>
                <br><br><p style="color:white;">a</p>
            </div>

		<!-- new section -->
		<div class="fancy">
			<h3>A lot of plants.</h3>
			<p>wow</p>
			<img src="https://i.pinimg.com/736x/02/78/00/02780059167a9c95830cc31c3c75de71.jpg" title="a lot of plants" class="rounded-corner" style="height: 600px; width: 1000px; object-fit: cover;
"/>
				
			<h3>What Majestic Placeholder Text</h3>

			<p>The following text was generated from: <a href="http://www.lipsum.com/" class="cool">http://www.lipsum.com/</a></p>
		
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et quam diam. Praesent dolor sem, pulvinar eget fermentum at, ultrices in eros. Proin scelerisque tellus dapibus arcu ultricies iaculis. Vivamus sodales dolor a ligula suscipit eget viverra mauris porta. Fusce dictum metus id ipsum sodales consectetur. Suspendisse nibh odio, ultricies ac vulputate a, aliquet mollis metus. Curabitur ultricies pretium lorem a hendrerit. Sed malesuada vulputate eros vel molestie. Integer nulla felis, pharetra ac dignissim id, fringilla quis nunc. Nam sit amet massa eget nibh placerat commodo at vitae felis. Duis mattis neque eget dui euismod in fringilla erat fermentum. Proin faucibus lobortis pellentesque. Nullam ligula tortor, mattis sed eleifend vitae, consequat tincidunt libero. Ut a mollis mauris.</p>
		</div>

				<!-- new section -->
		<div class="fancy">
			<h3>Extra Links</h3>
			<p>Know how to take care of your plants: <a href=https://howmanyplants.com/>click me!</a></p>
			<p>Learn about Propogation <a href=https://www.skh.com/thedirt/plant-propagation-techniques/>here</a></p>
		</div>
	</div>
	<!-- /main content -->
	
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
