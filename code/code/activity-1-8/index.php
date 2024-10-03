<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Activity 1.8 - Putting It All Together</title>	
	
	<meta name="description" content="Activity 1.7">
	<meta name="author" content="Valerie Maley">	
	
	<!-- link stylesheet -->
	<link rel="stylesheet" href="../css/styles.css">

	<!-- google fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
<style> 
body {
    background: #f2f2f2;
    margin: 0px;
}

.bubble_font {
font-family: "Fredoka", sans-serif;
font-size: 1.3em;
text-align: LEFT;
}

/* list */
ul {
  text-align: left; 
}

/* links */
.link_style {
  text-decoration: none; 
  color: #3f4b30; 
  font-weight: bold;
  font-size: 1.2em; 
  border-bottom: 2px solid transparent; /* Add an underline effect */
  padding-bottom: 2px;
  transition: all 0.3s ease; 
}

.link_style:hover {
  color: #617c47; 
  border-bottom: 2px solid #617c47; /* Add bottom border on hover */
}

/* table/container style */

table {
  border-spacing: 20px;
}

th, td {
  background: #ffffff; 
  padding: 20px; 
  margin-bottom: 10px;
  border: 5px solid;
  border-color: #acaa9b;
  border-radius: 0.5em; 
  font-size: 1.1em; 
  font-family: "Fredoka", sans-serif;
}

/* navigation bar */
  
.topnav {
	background-color: #333333;
	overflow: hidden;
	width: 100%;
	height: 55px;
  
	}
  
	.topnav a {
	float: left;
	color: #f2f2f2;
	text-align: left;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 19px;
	}
  
	.topnav a:hover {
	background-color: #333333;
	color: #f2f2f2;
	}
  
	.topnav a.active {
	background-color: #3f4b30;
	color: white;
	}
  
	.dropdown {
	  float: left;
	  overflow: hidden;
	}
	
	/* Dropdown button */
	.dropdown .dropbtn {
	  font-size: 16px;
	  border: none;
	  outline: none;
	  color: #f2f2f2;
	  background-color: inherit;
	  font-family: inherit; 
	  margin: 0px; 
	}
	
  
	.navbar a:hover, .dropdown:hover .dropbtn {
	  background-color: #617c47;
	}
	
  
	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #333333;
	  min-width: 160px;
	  z-index: 1;
	}
	
  
	.dropdown-content a {
	  float: none;
	  color: #f2f2f2;
	  padding: 12px 16px;
	  text-decoration: none;
	  display: block;
	  text-align: left;
	}
	
  
	.dropdown-content a:hover {
	  background-color: #617c47;
	}
	
  
	.dropdown:hover .dropdown-content {
	  display: block;
	}

  </style>

</head>
<body>

    
  <!-- nav bar (includes going back link) -->
  <div class="topnav">
    <a href="../index.php"><i class="fa-solid fa-house"></i></a> 

    <div class="dropdown">
    <button class="dropbtn">
      <a class="bubble_font">Section 1</a>
    </button>
    <div class="dropdown-content">
      <a href="../basics">Activity 1.1</a>
      <a href="activity-1-1">Activity 1.1</a>
      <a href="Activity_1.2_Valerie">Activity 1.2</a>
      <a href="Activity-1.3_Valerie_Maley">Activity 1.3</a>
      <a href="Activity-1.4-Valerie">Activity 1.4</a>
      <a href="activity-1-5">Activity 1.5</a>
      <a href="activity-1-6">Activity 1.6</a>
      <a href="activity-1-7">Activity 1.7</a>
      <a class="active" href="activity-1-8">Activity 1.8</a>
      <a href="activity-1-9">Activity 1.9</a>
    </div>
    </div> 
  </div> 


   <!-- Main Table-->

<table>
  <tr>
    <th> <img src="http://icsprogramming.ca/examples/images/assembly-operating-language-application.jpg"><br>
    <p>The operating system manages a computer's hardware and resources;a platform for running applications. Programming languages are used to write those applications, which rely on the OS to access and use system resources; connects hardware and applications.</p>
  </th>
    <th> 
      <h2>Machine Code/Interpreters & Compilers</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/1OukpDfsuXE?si=BlG-7r4tzWAZB_c4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <p>Assembly language is a low-level language that uses mnemonics to directly control hardware. Low-level languages offer precise hardware control but are complex and less user-friendly. High-level languages simplify programming by abstracting hardware details, making it easier to write code.</p>
      <p>Compiler translates the entire source code into machine code before it runs for faster performance.  Interpreter executes code line by line as it runs, which allows immediate execution but it's usually slower.</p>
    </th>

  </tr>
  <tr>
    <th>
  <ul>
    <h2>Information on Different Programming Languages</h2>
    <li><p><a href="https://www.w3schools.com/php/" class="link_style"> PHP </a></p></li>
    <li><p><a href="https://www.w3schools.com/python/default.asp" class="link_style"> Python </a></p></li>
    <li><p><a href="https://www.w3schools.com/js/default.asp" class="link_style"> Java </a></p></li>
    <li><p><a href="https://www.w3schools.com/cs/index.php" class="link_style"> C# </a></p></li>
    <li><p><a href="https://www.w3schools.com/cpp/default.asp" class="link_style"> C++ </a></p></li>
  </ul> 
  </th>

  <th>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.876107462822!2d110.43219207563973!3d29.31530965274807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x369bafca1a43aca1%3A0xa18079ec65a40b6f!2sZhangjiajie%20National%20Forest%20Park!5e0!3m2!1sen!2sca!4v1727125535289!5m2!1sen!2sca" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <p>I like this place and would like to visit it someday because this is the location that inspired the hallelujah mountains in the Avatar movies (the blue people ones).</p>
  </th>
  </tr>

  </table>


	
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT']. "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
