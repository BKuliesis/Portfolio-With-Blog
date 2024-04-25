<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = new mysqli('localhost', 'php', '1234', 'blogs');

        if ($conn->connect_error) {     
            die("Connection failed: " . $conn->connect_error); 
        } 
        
        $title = $_POST['title'];
        $text = $_POST['text'];
        $date = date('Y-m-d');
        $time = date('H:i:s');      
        $sql = "INSERT INTO BLOG_POSTS (blogTitle, blogText, datePosted, timePosted) VALUES ('$title', '$text', '$date', '$time')";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewBlog.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();  
    } 
?>