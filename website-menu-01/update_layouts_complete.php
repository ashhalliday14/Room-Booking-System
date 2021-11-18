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
    <link rel="stylesheet" href="css/style2.css">

    <title>Update Layouts</title>
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

            //get classroom id that was selected
            //$id = $_GET['ClassroomID'];
            $id = $_SESSION['layoutID'];
            $uploadFile = $_SESSION['uploadFile'];
            //echo $uploadFile;

            ?>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="hero">
      <br><br><br><br><br>

      <?php

        $sql = "UPDATE tblimage
                SET    Image = '$uploadFile'
                WHERE  ClassroomID = $id;
                ";

        //run the query
        $result = mysqli_query($conn, $sql) 
            or die("Unable to run query.");
        //$row = mysqli_fetch_row($result);
        //$resultCheck = mysqli_num_rows($result);

        if ($result)
        {
            echo "Room layout was successfully changed.";
        }
        else
        {
            echo "Room layout could not be edited at this time. Please try again.";
        }
      ?>
      
        
          
        </div>
    </div>
  

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>