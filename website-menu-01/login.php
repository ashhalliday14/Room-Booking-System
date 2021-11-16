<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>

    <body class="loginbody">
        <div class="main">
            <form action="login_process.php" method="POST" class="form1">
                <p  class="sign" >DigiTech Room Booking System</p>
                <p class="sign" >Please Login:</p>
                <!-- <p>
                    <label>Username:</label>
                    <input type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass"/>
                </p> -->
                <input class="un" type="text" allign="center" placeholder="Username" name="user">
                <input class="pass" type="password" allign="center" placeholder="Password" name="pass">
                <!-- <p>
                    <input type="submit" value="Login">
                </p> -->
                <!-- <a class="submit" allign="center" type="submit">Sign in</a> -->
                <input type="submit" value="Login" class="submit" allign="center">
            </form>
        </div>
    </body>
</html>