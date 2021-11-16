<?php

    //start a session
    session_start();

    //unset all session variables
    $_SESSION = array();

    //destroy the session
    session_destroy();

    //direct user to login page
    header("Location: login.php");
    exit;

?>