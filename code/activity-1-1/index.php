<?php if (!isset($_SESSION)) { session_start(); } ?><?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<title>ACTIVITY 1-1 - Valerie Maley</title>	
		
		<meta name="description" content="Activity 1-1 - Computer Programming">
		<meta name="author" content="Author information goes here...">	
		

		<!-- styles - internal (not linked) -->
		<style>

			body {
                max-width: 1050px;
				padding: 10px;
				background: url("https://icsprogramming.ca/test/images/fence.jpg"); 
				color: #333333;  /* font color */
				font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
			}
			a:link, a:visited, a:active {
				color: #333;
				color: #3e3e3e
			}	
			a:hover {
				color: #ffff;


			.basic_text{
				font-size: 1.0em;
				color: #000000;
                font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
			}

			}

			.box {
    			background-color: #FFA500;
    			padding: 20px;
   				color: #0355fa;
				font-size: 1.4em;
				font-family: "Papyrus", sans-serif;
			}

		</style>


	</head>

	<body>

		<!-- main content -->

		<h1><b> This is a h1 heading </b> </h1>

		<p class ="basic_text">This activity involves creating HTML code that will reproduce this output accurately. The body has a 10px padding around the <br />whole thing and the font is "Century Gothic." There is a backgroundimage:<br /> url("https://icsprogramming.ca/test/images/fence.jpg"); as well. The default links have a link, visited, and active color of<br /> 3e3e3e and textdecoration underline. The hover state color is #ffffff (white), no textdecoration and backgroundcolor of <br />#9400d3.</p>

		<hr />

		<h2><b> HTML is Easy To Learn (h2 title) </b> </h2>

		<hr />

		<p>Welcome to the world of the <b>World Wide Web.</b> This is the first paragraph. While short it is still a paragraph!</p>
		<p>This is the second paragraph. It is also short and boring. Let's create a link to the <a href=https://www.w3schools.com/tags>HTML Quick Reference List</a></p>
		<p> In the third paragraph we'll try line breaks... <br />H<br />E<br />L<br />L<br />O</p>

		<p>Let's create two different types of links.</p>
		<p> >> Link to <a href=https://www.google.ca>google </a></p>
		<p> >> Create an email (mailto) link to <a href=https://mail.google.com/mail/u/5/#inbox> braunc@hdsb.ca </a></p>

		<div class="box">
    		This paragraph has the font "Papyrus", font-size of 1.4em, and text color #0355fa. This paragraph <br>
            has the class name of "box". It also has a padding of 20px and a background-color of #FFA500<br>
            (orange).
		</div>

		<p class="basic_text"> different colours using the 'span' tag: <span style="color:red">class 'red-text' and color #ff0000 - RED</span> - <span style="color:blue">class 'blue-text' and color #0000ff - BLUE </span> <span style="color:green">- class<br>'green-text' and color #00ff00 - GREEN</span></p>

		<p> Now to the good stuff. <b>Unordered Lists!</b><p>

		<ul>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
		</ul> 

			<p> And <b>Ordered Lists!</b></p>

			<ol>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ol> 

			<table border="1">
				<tr>
					<th>Column 1</th>
					<th>Column 2 </th>
					<th>Column 3</th>
				</tr>
				<tr>
					<td>sometext</td>
					<td>sometext</td>
					<td>sometext</td>
				</tr>
				<tr>
					<td>sometext</td>
					<td>sometext</td>
					<td>sometext</td>
				</tr>
			</table> 

			<!-- end main content -->
			
			<!-- turn work in widget -->
			<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
	</body>

</html>