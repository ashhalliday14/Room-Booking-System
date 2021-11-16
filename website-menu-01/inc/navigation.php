<?php

    //start a session
    session_start();

    //check user role type and display correct navigation bar
    if ($_SESSION['role'] == "Admin")
    {
        include("inc/adminNavigation.php");
    }
    else if ($_SESSION['role'] == "Manager")
    {
        include("inc/managerNavigation.php");
    }
    else if ($_SESSION['role'] == "Teacher")
    {
        include("inc/teacherNavigation.php");
    }

?>