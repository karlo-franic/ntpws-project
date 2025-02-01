<?php
    include ("db_connection.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
        <link rel="stylesheet" href="style.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Karlo Franić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
<body>
	<header>
        <div class="banner"></div>
        <nav>
            <div class="nav-container">
                <a href="index.php?menu=1">Home</a>
                <a href="index.php?menu=2">News</a>
                <a href="index.php?menu=3">Contact</a>
                <a href="index.php?menu=4">About</a>
                <a href="index.php?menu=5">Gallery</a>
            </div>
        </nav>
    </header>
    <main>
        <?php
            if (!isset($_GET['menu']) && !isset($_GET['news'])) { include("home.php"); }

            if(isset($_GET['menu'])) {
	
                if ($_GET['menu'] == 1) { include("home.php"); }

                else if ($_GET['menu'] == 2) { include("news.php"); }
                
                else if ($_GET['menu'] == 3) { include("contact.php"); }
                
                else if ($_GET['menu'] == 4) { include("about.php"); }

                else if ($_GET['menu'] == 5) { include("gallery.php"); }

            }

            if (isset($_GET['news'])) {

                if ($_GET['news'] == 1) { include("news_1.php"); }
	
                else if ($_GET['news'] == 2) { include("news_2.php"); }

                else if ($_GET['news'] == 3) { include("news_3.php"); }
            }

            
        ?>
    </main>
    <footer>
        <p>Social Media:</p>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank">
                <img src="img/facebook-icon.png" alt="Facebook">
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <img src="img/twitter-icon.png" alt="Twitter">
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img src="img/instagram-icon.png" alt="Instagram">
            </a>
            <a href="https://www.linkedin.com" target="_blank">
                <img src="img/linkedin-icon.png" alt="LinkedIn">
            </a>
        </div>
        <p class="footer-text">Copyright © 2024 Karlo Franić.</p>
        <div class="social-icons">
            <a href="https://github.com/karlo-franic/ntpws-project" target="_blank">
                <img src="img/github-icon.png" alt="GitHub">
            </a>
        </div>
    </footer>
</body>
</html>