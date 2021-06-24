<?php
    session_start();
    $_SESSION['uname'] ="";
    session_destroy();
    header("location:http://localhost/coming soon/");
?>