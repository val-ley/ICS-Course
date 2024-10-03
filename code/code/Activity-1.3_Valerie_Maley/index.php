<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Activity 1.3 - Valerie Maley</title>	
        
        <meta name="Activity 1.3" content="Activity 1-3 - Styling & Formatting HTML Pages">
        <meta name="Valerie Maley" content="hi">	
    
		 <!-- styles -->
		<style>
            body {
				background-color: #34495e;
                padding: 30px;
                color: #ffffff;  /* font color */
                font-family: Calibri, sans-serif;
			}
        </style>
	</head>

	<!-- main content -->
	<body>
		<h1>Styling & Formatting HTML Pages</h1>
		<hr size="3" style="color: white; background-color: white;">
		
		<table border="1" cellpadding="20" cellspacing="0">
			<p style="font-family: Avant Garde; padding: 10px; color:  #8e44ad; background-color: #ffffff;">In this paragraph the font has been set to Avant Garde, sans-serif; and has a padding of 10px and the font color is #8e44ad and the background color is #ffffff.</p>
			<h2 style="padding: 30px; color: #f39c12; background-color: #2980b9;"> This is a size 2 heading with a #2980b9 color background and
				padding of 30px and a font color of #f39c12</h2>
			<h3 style="font-family: 'Comic Sans MS', sans-serif; padding: 5px; color:#ffffff; background-color: #888888; width: 700px;"> 
				This is a size 3 heading (not a paragraph) with #888888 background color and comic sans ms font that is white (#ffffff) and a padding of 5px and the width is only 700px.</h3>
			<p style="background: #ececec; font-size: 2.0em; color: #d35400; font-family: courier;"> In this paragraph the font has been set to a size of 2.0em, color of #d35400 and courier font style.</p>
			<p style="background-color: #1abc9c; color: #ffffff; padding: 5px; ">
				This paragraph has a background color of #1abc9c and font color #ffffff and the paragraph is padded by 5px. Let's step this up a notch and look at styling tables. Below we are going to create a 3 column, 1 row table with a border size of 2, cellpadding of 30 and cellspacing of 0</p>
			</table>

				<table cellpadding="30" cellspacing="0" border="2">
					<tr>
						<th style="color: #000000; background-color: #ffffff;">#ffffff background and #000000 font color</th>
						<th style="color: #ffffff; background-color: #000000;">#000000 background and #ffffff font color</th>
						<th style="color: #333333; background-color: #f39c12;">#f39c12 background and #333333 font color</th>
					</tr>
				</table>
 	<!-- end main content -->

	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
	</body>
</html>