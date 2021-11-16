<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Reset Passwords</title>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="homepage.php">DigiTech<span class="text-primary"></span> </a></h1>
          </div>

          <?php
            //include navigation bar
            include 'inc/navigation.php';

            //include database connection
            include 'inc/connection.php';
            ?>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="hero">
      <br><br><br><br>
        <!--form to reset passwords-->
	    <form method="POST" action="reset_password_process.php">
	        <p>Reset a User's Password</p>

	        <label>Choose a User:</label>
            <br>
	        <select id="user" name="user">
	            <?php
                    //include connection to db
	                include 'inc/connection.php';

	                //select all users from the db
	                $query = mysqli_query($conn, "SELECT Username
	                                              FROM   tbllogin");
	                
	                //fetch results as associative array
	                while ($row = $query->fetch_assoc())
	                {
	                    ?>
	                    <!--display all usernames in a list-->
	                    <option>
	                        <?php echo $row['Username']; ?>
	                    </option>
	                    <?php
	                }
	            ?>
	        </select>
            <br>

	        <!--user to enter a new password-->
	        <label>Enter New Password:</label>
            <br>
	        <input type="password" id="pass" name="pass"/>
            <br>
            
	        <!--submit button to change password-->
	        <input type="submit" value="Change Password">
	    </form>
    </div>
  

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>