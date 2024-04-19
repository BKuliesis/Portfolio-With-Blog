<?php
    session_start();
    $loggedIn = false;
    if(isset($_SESSION['email'])) {
        $loggedIn = true;
    }
?>