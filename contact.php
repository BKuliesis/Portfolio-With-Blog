<?php
    include 'loggedIn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/contact.css">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="contact.php" class="current-page">Contact</a></li>
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
    <form class="contact">
            <h1>Contact Me</h1>
            <p>Feel free to reach out or view my work through the links below. I'm always open to connect!</p>
            <div class="contact-grid">
                <a href="https://www.linkedin.com/in/benas-kuliesis/" target="_blank"><img src="images/contact-icons/linkedin.png" alt="LinkedIn"></a>
                <a href="https://github.com/BKuliesis" target="_blank"><img src="images/contact-icons/github.png" alt="GitHub" class="circle-icon"></a>
                <a href="mailto:bkuliesis@gmail.com" target="_blank"><img src="images/contact-icons/email.png" alt="Email"></a>
                <a href="https://wa.me/447845644972" target="_blank"><img src="images/contact-icons/whatsapp.png" alt="WhatsApp"></a>
            </div>
        </form>
    </main>
    <footer>
        &copy; 2024 Benas Kuliesis. All rights reserved.
    </footer>
</body>
</html>