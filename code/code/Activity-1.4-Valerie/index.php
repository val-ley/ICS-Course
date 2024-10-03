<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson: Building Tables in HTML</title>
    <meta name="description" content="Lesson on building tables in HTML">
    <meta name="author" content="Valerie Maley"> 

    <!-- favicon - shows in the browser tab -->
    <link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- styles - internal (not linked) -->
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #333333;
            text-align: center;
            font-family: "Roboto";
            background: url("https://i.pinimg.com/736x/b2/4e/f1/b24ef1a24a4365ab8e3ffbba0cdf4792.jpg");
            background-size: cover;
            background-attachment: fixed;
        }

        * {
            box-sizing: border-box; /* make sure all elements keep the size you want even if you add padding */
        }
        h3 {
            color: #333;
            text-transform: uppercase;
        }
        #container {
            position: relative;
            display: inline-block;
            margin-top: 20px;
            width: 80%;
            padding: 10px;
            background: rgba(255,255,255,0.8);
            text-align: center;
        }

        /* style links */
        a:link, a:visited, a:active {
            color: #294C5F;
            text-decoration: none; /* Remove underlines from links */
            transition: all 0.3s ease;
        }
        a:hover {
            color: #AECDE1;
        }

        /* basic styling */
        table, th, td {
            border: 1px solid black;
            vertical-align: top;
            border-collapse: collapse;
            padding: 10px;
            margin: 0 auto;
        }

        /* style the tables using classes */
        .table-container {
            width: 50%;
            border-collapse: collapse;
        }

        .table-container td, .table-container th {
            padding: 10px;
            vertical-align: top;
            font-weight: 400;
            vertical-align: middle
        }
        .pink_block {
            background-color: #ff28fb;
        }
        .orange_block {
            background-color: #FF5412;
        }
        .yellow_block {
            background-color: #FFF003;
        }
        .green_block {
            background-color: #2B7931;
        }
        .blue_block {
            background-color: #00E4FB;
        }
        .navy_block {
            background-color: #0948F6;
        }
        .free_block {
            background-color: #FDFDFD;
        }




    </style>
</head>
<body>

    <!-- level 3 schedule table -->
  <div id="container" class="table-container">
    <h3>LEVEL 3 - 70%</h3>

    <table>
        <tr>
            <th colspan="6"><h3>Example Schedule</h3></th>
        </tr>
        <tr>
            <th>colspan="1"</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr>
            <td>1:00</td>
            <td colspan="2" class="pink_block">BLOCK A</td>
            <td class="orange_block">BLOCK B</td>
            <td colspan="2" class="pink_block">BLOCK A</td>
        </tr>
        <tr>
            <td>1:30</td>
            <td colspan="5" class="yellow_block">BLOCK C</td>
        </tr>
        <tr>
            <td>2:00</td>
            <td colspan="3" class="blue_block">BLOCK D</td>
            <td colspan="2" class="free_block">FREE</td>
        </tr>
        <tr>
            <td>2:30</td>
            <td colspan="5" class="free_block">FREE</td>
        </tr>
        <tr>
            <td>3:00</td>
            <td colspan="1" class="navy_block">BLOCK E</td>
            <td colspan="4" class="green_block">BLOCK F</td>
        </tr>
    </table>
    <br>

<!-- level 4 schedule table -->

    <h3>LEVEL 4 - 100%</h3>

    <table class="table-container">
        <tr>
            <th colspan="6"><h3>Example Schedule</h3></th>
        </tr>
        <tr>
            <th colspan="1"></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr>
            <td>1:00</td>
            <td rowspan="2" class="pink_block">BLOCK A</td>
            <td colspan="1"></td>
            <td rowspan="2" class="pink_block">BLOCK A</td>
            <td rowspan="8" class="orange_block">BLOCK B</td>
            <td rowspan="2" class="pink_block">BLOCK A</td>
        </tr>
        <tr>
            <td>1:30</td>
            <td rowspan="2" class="yellow_block">BLOCK C</td>
        </tr>
        <tr>
            <td>2:00</td>
            <td rowspan="3" class="blue_block">BLOCK D</td>
            <td rowspan="3" class="blue_block">BLOCK D</td>
            <td rowspan="3" class="blue_block">BLOCK D</td>
        </tr>
        <tr>
            <td>2:30</td>
        </tr>
        <tr>
            <td>3:00</td>
            <td rowspan="3" class="navy_block">BLOCK E</td>
        </tr>
        <tr>
            <td>3:30</td>
            <td rowspan="3" class="green_block">BLOCK F</td>
            <td rowspan="3" class="green_block">BLOCK F</td>
            <td rowspan="3" class="green_block">BLOCK F</td>
        </tr>
        <tr>
            <td>4:00</td>
        </tr>
        <tr>
            <td>4:30</td>
        </tr>
        

    </table>

  </div>

  <!-- turn work in widget -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
