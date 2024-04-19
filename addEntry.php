<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/preview.css">
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
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["dummy"])) {
                echo "
                <main>
                    <form action='addEntry.php' method='POST'>
                        <h1>Add Post</h1>
                        <input type='text' name='title' placeholder='Title' class='text-box' value='$_POST[title]'>
                        <textarea name='text' placeholder='Enter your text here' class='text-box'>$_POST[text]</textarea>
                        <div class='buttons'>
                            <input type='submit' value='POST' class='button'>
                            <input type='submit' value='PREVIEW' class='button'>
                            <input type='reset' value='CLEAR' class='button'>
                        </div>
                    </form>
                </main>
                <footer>
                    &copy; 2024 Benas Kuliesis. All rights reserved.
                </footer>
                <script src='js/addEntry.js'></script>
                <script src='js/setAction.js'></script>
                ";
            } else {
                $currentTitle = $_POST["title"];
                $currentText = $_POST["text"];
                echo "
                <main>
                    <div class='blog'>
                        <div class='date-and-time'>
                            <img src='images/clock.png' alt=''>
                            <p>Today, Now</p>
                        </div>
                        <h3>$currentTitle</h3>
                        <h4>$currentText</h4>
                    </div>
                ";

                $conn = new mysqli('localhost', 'php', '1234', 'blogs');

                if ($conn->connect_error) {     
                    die("Connection failed: " . $conn->connect_error); 
                } 

                include 'viewBlogFunctions.php';

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
                    <div class='blog existing-posts'>
                        <div class='date-and-time'>
                            <img src='images/clock.png' alt=''>
                            <p>$date, $time UTC</p>
                        </div>
                        <h3>$title</h3>
                        <h4>$text</h4>
                    </div>
                    ";
                }

                echo "</main>";

                $conn->close();

                echo "
                <footer class='preview-footer'>
                    <form action='addEntry.php' method='POST'>
                        <input type='hidden' name='title' value='$currentTitle'>
                        <input type='hidden' name='text' value='$currentText'>
                        <input type='hidden' name='dummy' value='dummy'>
                        <input type='submit' value='EDIT' class='button edit'>
                    </form>
                    <form action='addPost.php' method='POST'>
                        <input type='hidden' name='title' value='$currentTitle'>
                        <input type='hidden' name='text' value='$currentText'>
                        <input type='submit' value='UPLOAD' class='button'>
                    </form>
                </footer>
                ";
            }
        } else {
            echo "
            <main>
                <form action='addEntry.php' method='POST'>
                    <h1>Add Post</h1>
                    <input type='text' name='title' placeholder='Title' class='text-box'>
                    <textarea name='text' placeholder='Enter your text here' class='text-box'></textarea>
                    <div class='buttons'>
                        <input type='submit' value='POST' class='button'>
                        <input type='submit' value='PREVIEW' class='button'>
                        <input type='reset' value='CLEAR' class='button'>
                    </div>
                </form>
            </main>
            <footer>
                &copy; 2024 Benas Kuliesis. All rights reserved.
            </footer>
            <script src='js/addEntry.js'></script>
            <script src='js/setAction.js'></script>
            ";
        }
    ?>
</body>
</html>