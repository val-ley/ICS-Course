<?php if (!isset($_SESSION)) { session_start(); } ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Activity 1-2 - Valerie Maley</title>	
        
        <meta name="description" content="Activity 1-1 - Computer Programming">
        <meta name="author" content="Author information goes here...">	
        
        <link rel="stylesheet" href="styles.css">
        
        <!-- styles -->
        <style>
            body {
                padding: 20px 20px 20px 20px;
                color: #333333;  /* font color */
                font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
                max-width: 1250px;
            }
            h1 {
                color: #0f462f;
            }

        </style>
    </head>

    <body>
        <!-- main content -->
        <div class="container">
			<div class="fancy half_width_box" style="border: 3px solid rgb(54, 54, 54); float: left;">
				<h1>Manipulating Images</h1>
				<h2>Creating Algorithms: Flowcharts</h2>
				<p>A flowchart is a diagram that represents a set of instructions. Flowcharts use symbols to represent different types of instructions. These symbols are used to then show a step-by-step solution to the problem.</p>
			</div>
			<div class="fancy half_width_box" style="border: 3px solid rgb(54, 54, 54); float: right;"> 
				<img src="https://icsprogramming.ca/test/images/flowchart_symbols.jpg" alt="flowchart-symbols" title="Flowchart Symbols" style="width: 38%;" />
			</div>
		</div>

        <!-- table and images -->
        <table class="styled-table" border="1">
            <tr>
                <th> <img src="https://icsprogramming.ca/images/flowchart_example.png" alt=”flowchart-example” title="This is the original image."></th>
                <th> <img src="https://icsprogramming.ca/images/flowchart_example.png" alt=”flowchart-example” width="100px" height="100px" title="This image is 100px by 100px"> </th>
            </tr>
            <tr>
                <th><img src="https://icsprogramming.ca/images/flowchart_example.png" alt=”flowchart-example” width="100px" title="This image is scaled to have a fixed width of 100px"></th>
                <td><img src="https://icsprogramming.ca/images/flowchart_example.png" alt=”flowchart-example” height="100px" title="This image is scaled to have a fixed height of 100px"></td>
            </tr>
            <tr>
                <th><img src="../images/cat.jpeg" alt="smirking cat" title="smirking cat" style="width: 200px; height: 200px;"/></th>
                <th><img src="../images/clifs.png" alt="2 clifs" title="clifs_drawing" style="width: 500px;"/></th>
            </tr>
        </table>
        <!-- end main content -->
        
        <!-- turn work in widget -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
    </body>
</html>
