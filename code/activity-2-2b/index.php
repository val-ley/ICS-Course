<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Working with Variables: Parsing URLs</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="grid_styles.css">
    <link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />

    <style>
        body {
            margin: 0;
            width: 100%;
            height: 100%;
            color: #333333;
            font-family: "Roboto";
            text-align: center;
            background: #f2f2f2;
            background-size: cover; 
        }
        h2 {
		color: #3f4b30;
	    }

        h3 {
		color: #333;
		text-transform: uppercase;
	    }
        table {
            width: 50%;
            margin: 20px auto;
            text-align: left;
            width: 100%; 
        }
        th, td {
            font-size: 1.1em; 
        }

        .container {
            margin-bottom: 10px; 
            padding: 20px;
            border: 2px solid #4b3429;
            border-radius: 15px;
            display: inline-block;
        }
        .fancyInput {
            border: 1px solid #d35400;
            outline: none;
            font-size: 1.5em;
            font-family: 'Roboto';
        }
        .fancyInput:hover {
            border: 1px solid #2980b9;
        }
    </style>
</head>
<body>


    <?php
        $x = isset($_GET['x']) ? $_GET['x'] : 0;
        $y = isset($_GET['y']) ? $_GET['y'] : 0;
        $z = isset($_GET['z']) ? $_GET['z'] : 0;
        $title = isset($_GET['title']) ? $_GET['title'] : 'No Title';
        $pad = isset($_GET['pad']) ? $_GET['pad'] : 5;
        $border = isset($_GET['brdr']) ? $_GET['brdr'] : 1;
        $backgroundColor = isset($_GET['bckrd']) ? $_GET['bckrd'] : '#f2f2f2';
        $bgImage = isset($_GET['bgImage']) ? $_GET['bgImage'] : '';

    echo "<p class='container'>We are learning how to parse variables from URLs. The value of x is $x, the value of y is $y, the value of z is $z, and the title is $title.</p>";
    ?>

    <h2>
        <?php echo $title; ?>
    </h2>

<div class="grid">

    <?php
        $result1 = $x + $y - 2 * $z;
        $result2 = 2 * $x - 4 * $y + (3 * $z - 80);
        $result3 = $result1 + $result2;
    ?>
<div class="col-span-6>">
    <!-- Table -->
    <table cellpadding="<?php echo $pad; ?>" border="<?php echo $border; ?>" style="background-color:<?php echo $backgroundColor; ?>">
        <tr>
            <th>Mathematical Operation</th>
            <th>Result</th>
        </tr>

        <tr>
            <td>x + y - 2 * z</td> 
             <td><?php echo $result1; ?></td>
        </tr>

        <tr>
            <td>2x - 4y + (3z - 80)</td>
            <td><?php echo $result2; ?></td>
        </tr>

        <tr>
            <td>Res of Eq1 + Res of Eq2</td>
            <td><?php echo $result3; ?></td>
        </tr>
    </table>
    </div>
    <!-- Form to accept user inputs -->
    <div class="col-span-6>">
    <form method="get" class='container'>

        X-value: <input type="text" name="x" value="<?php echo $x; ?>"> <br />
        Y-value: <input type="text" name="y" value="<?php echo $y; ?>"> <br />
        Z-value: <input type="text" name="z" value="<?php echo $z; ?>"><br />
        Title: <input type="text" name="title" value="<?php echo $title; ?>"> <br />
        Table Padding: <input type="text" name="pad" value="<?php echo $pad; ?>"><br />
        Table Border: <input type="text" name="brdr" value="<?php echo $border; ?>"> <br />
        Background Color: <input type="color" name="bckrd" value="<?php echo $backgroundColor; ?>"><br />
        Background Image URL: <input type="text" name="bgImage" value="<?php echo $bgImage; ?>"><br />
        
        <input type="submit" value="submit">
    </form>
    </div>
</div>
    <?php

        if (!empty($bgImage)) {
            echo "<style>body { background-image: url('$bgImage'); background-size: cover; }</style>";
        }
    ?>

<!-- end main content -->

	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
