<?php

    //include connection to DB
    include 'inc/connection.php';

    //start a user session
    session_start();

    //take the user input for username and password
    $username = $_POST['user'];
    $password = md5 ($_POST['pass']);

    //stores session variables for logged in and username
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;

    //database query for login process
    $query = mysqli_query($conn, "SELECT *
                                  FROM   tbllogin
                                  WHERE  Username = '$username'
                                  AND    Password = '$password'")
            or die("Failed to Login");
    $row = mysqli_fetch_array($query);

    //check username and password fields contain values
    if (!empty($row["Username"]) && !empty($row["Password"]))
    {
        //if user is an admin
        if ($row["AccessLevel"] == 1)
        {
            //set role vairable as admin
            $_SESSION["role"] = "Admin";
            session_start();
            header("Location: homepage.php");
        }

        //if user is a manager
        else if ($row["AccessLevel"] == 2)
        {
            //set role vairable as manager
            $_SESSION["role"] = "Manager";
            session_start();
            header("Location: homepage.php");
        }

        //if user is a manager
        else if ($row["AccessLevel"] == 3)
        {
            //set role vairable as manager
            $_SESSION["role"] = "Teacher";
            session_start();
            header("Location: homepage.php");
        }
    }

?>