<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Youtube & Google Maps</title>	
	
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
        <h1>Embedding Media</h1>
    </div>
    <!-- youtube embed -->
    <div class="container">
        <h2>Embedding YouTube Videos</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/KmQUTtOfUao?si=224U50R-StlBhCrv&amp;controls=0" title="YouTube video player" frameborder="3" allow="accelerometer; autoplay"></iframe>
    </div>
   <!-- /youtube embed -->

    <!-- google maps embed -->
    <div class="container maps-container">
        <h2>Embedding Google Maps</h2><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.876107462822!2d110.43219207563973!3d29.31530965274807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x369bafca1a43aca1%3A0xa18079ec65a40b6f!2sZhangjiajie%20National%20Forest%20Park!5e0!3m2!1sen!2sca!4v1727125535289!5m2!1sen!2sca" width="600" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d511631.13738884265!2d29.435361253041066!3d59.939457439978085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696378cc74a65ed%3A0x6dc7673fab848eff!2sSt%20Petersburg%2C%20Russia!5e0!3m2!1sen!2sca!4v1727125764590!5m2!1sen!2sca" width="600" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- /google maps embed -->

	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
