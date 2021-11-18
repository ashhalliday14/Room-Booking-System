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

    <title>Book a Room</title>
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

            //start_session();
            //session_start();

            ?>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="hero">
        <br><br><br><br><br>
        <h3>Book a Room</h3>
        
        <div class="displayclassrooms">    
          <br>
            <form action="book_room_process.php" method="get">
                <table>
                    <tr>
                        <th>Class Date:</th>
                        <th>     </th>
                        <th>Class Start Time:</th>
                        <th>     </th>
                        <th>Class End Time:</th>
                        <th>     </th>
                        <th>Course Name:</th>
                        <th>     </th>
                        <th>Group Size:</th>
                        <th>     </th>
                        <th>Group Name:</th>
                    </tr>
                    <br>
                    <tr>
                        <td><input type="date" id="date" name="class_date"></td>
                        <td>     </td>
                        <td><input type="time" id="start_time" name="start_time"></td>
                        <td>     </td>
                        <td><input type="time" id="end_time" name="end_time"></td>
                        <td>     </td>
                        <td><input type="text" id="course_name" name="course_name"></td>
                        <td>     </td>
                        <td><input type="number" id="group_size" name="group_size"></td>
                        <td>     </td>
                        <td><input type="text" id="class_name" name="class_name"></td>
                        <td>     </td>
                        <td><input type="submit" value="Book Room"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
  

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

