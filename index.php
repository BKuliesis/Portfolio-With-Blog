<?php
    include 'loggedIn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Inter:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <span>BK</span>
        <nav>
            <ul>
                <li><a href="index.php" class="current-page">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <?php 
            if ($loggedIn) {
                echo '<a href="logout.php" class="button">LOGOUT</a>';
            } else {
                echo '<a href="login.php" class="button">LOGIN</a>';
            }
        ?>
    </header>
    <main>
        <div class="home-flexbox">
            <div class="welcome-message">
                <h1>Hello there,</h1>
                <h1>I'm <span>Benas Kuliesis</span></h1>
                <h2>BSc Computer Science Student </h2>
                <a href="portfolio.html" class="button portfolio-button before">PORTFOLIO</a>
            </div>
            <figure>
                <img src="images/profile-picture-with-filter.png" alt="Benas Kuliesis" title="Benas Kuliesis">
            </figure>
            <a href="portfolio.php" class="button portfolio-button after">PORTFOLIO</a>
        </div>
    </main>
    <footer>
        &copy; 2024 Benas Kuliesis. All rights reserved.
    </footer>
</body>
</html>