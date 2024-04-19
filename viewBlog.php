<?php
    include 'loggedIn.php';
    include 'viewBlogFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog.css">
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
                <li><a href="viewBlog.php" class="current-page">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="buttons">
            <?php 
                if ($loggedIn) {
                    echo '<a href="addEntry.php" class="button addpost">ADD POST</a>';
                    echo '<a href="logout.php" class="button">LOGOUT</a>';
                } else {
                    echo '<a href="login.php" class="button">LOGIN</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <div class="blog-title">
            <?php 
                $conn = new mysqli('localhost', 'php', '1234', 'blogs');

                if ($conn->connect_error) {     
                    die("Connection failed: " . $conn->connect_error); 
                } 

                $sql = "SELECT datePosted, timePosted FROM BLOG_POSTS";
                $result = $conn->query($sql);
                $dates = [];
                while ($row = $result->fetch_assoc()) {
                    $dates[] = $row;
                }
                $dates = sortPosts($dates);
                $monthsWithBlogPosts = [];
                foreach($dates as $date) {
                    $monthYear = date('F Y', strtotime($date['datePosted']));
                    if (!in_array($monthYear, $monthsWithBlogPosts)) {
                        $monthsWithBlogPosts[] = $monthYear;
                    }
                }

                echo "
                <select name='month' class='select-month'>
                    <option value='All'>All Months</option>
                ";
                foreach($monthsWithBlogPosts as $month) {
                    echo "<option value='$month'>$month</option>";
                }
                echo "</select>";
            ?>
            <div class="buttons">
                <?php 
                    if ($loggedIn) {
                        echo '<a href="addEntry.php" class="button addpost">ADD POST</a>';
                        echo '<a href="logout.php" class="button">LOGOUT</a>';
                    } else {
                        echo '<a href="login.php" class="button">LOGIN</a>';
                    }
                ?>
            </div>
        </div>
        <?php
            $sql = "SELECT blogTitle, blogText, datePosted, timePosted FROM BLOG_POSTS";
            $result = $conn->query($sql);
            $posts = [];
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
            $posts = sortPosts($posts);
            foreach($posts as $post) {
                $title = $post['blogTitle'];
                $text = $post['blogText'];
                $date = formatDate($post['datePosted']);
                $time = date('G:i', strtotime($post['timePosted']));
                echo "
                <div class='blog'>
                    <div class='date-and-time'>
                        <img src='images/clock.png' alt=''>
                        <p>$date, $time UTC</p>
                    </div>
                    <h3>$title</h3>
                    <h4>$text</h4>
                </div>
                ";
            }

            $conn->close();
        ?>
    </main>
    <footer>
        &copy; 2024 Benas Kuliesis. All rights reserved.
    </footer>
    <script src="js/selectMonth.js"></script>
</body>
</html>