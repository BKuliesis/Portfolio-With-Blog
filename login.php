<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/login.css">
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
    <main>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $conn = new mysqli('localhost', 'php', '1234', 'blogs');

                if ($conn->connect_error) {     
                    die("Connection failed: " . $conn->connect_error); 
                } 

                $email = $_POST['email'];
                $password = $_POST['password'];      
                $sql = "SELECT password FROM USERS WHERE email = '$email'";
                $result = $conn->query($sql);
                echo "
                <form action='login.php' method='POST'>
                    <h1>Login</h1>
                    <input type='email' name='email' placeholder='Email' required class='text-box' value='$email'>
                    <input type='password' name='password' placeholder='Password'  required class='text-box' value='$password'>
                ";
                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    if ($row['password'] == $password) {
                        session_start();
                        $_SESSION['email'] = $email;
                        header("Location: addEntry.php");
                    } else {
                        echo "<p class='error'>Incorrect password!</p>";
                    }
                } else {
                    echo "<p class='error'>Email not found!</p>";
                }
                echo "
                    <div class='buttons'>
                        <input type='submit' value='LOGIN' class='button'>
                    </div>
                </form>
                ";
                $result->close();
                $conn->close();         
            } else {
                echo "
                <form action='login.php' method='POST'>
                    <h1>Login</h1>
                    <input type='email' name='email' placeholder='Email' required class='text-box'>
                    <input type='password' name='password' placeholder='Password'  required class='text-box'>
                    <div class='buttons'>
                        <input type='submit' value='LOGIN' class='button'>
                    </div>
                </form>
                ";
            }
        ?>
    </main>
    <footer>
        &copy; 2024 Benas Kuliesis. All rights reserved.
    </footer>
</body>
</html>