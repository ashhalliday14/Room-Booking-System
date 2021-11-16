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

            //get the classroom ID to edit
            $id = $_GET['ClassroomID'];
            $name = $_GET['Name'];
            $pc = $_GET['PC'];
            $students = $_GET['Students'];

            $_SESSION['ID'] = $id;
            $_SESSION['Name'] = $name;
            $_SESSION['PC'] = $pc;
            $_SESSION['Students'] = $students;

            ?>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="hero">
        <br><br><br><br>
        <h3>Book a Room</h3>

        <table>
        <form action="check_book_room.php" method="get">
            <tr>
                <td>Room ID</th>
                <th>Classroom Name</th>
                <th>Number of PCs</th>
                <th>Number of Students</th>
                <th>Date of Class</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Course Name</th>
                <th>Group Size</th>
                <th>Class Name</th>
            </tr>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $pc; ?></td>
                <td><?php echo $students; ?></td>
                <td><input type="date" id="date" name="class_date"></td>
                <td><input type="time" id="start_time" name="start_time"></td>
                <td><input type="time" id="end_time" name="end_time"></td>
                <td><input type="text" id="course_name" name="course_name"></td>
                <td><input type="number" id="group_size" name="group_size" min="1" max="<?php echo $students; ?>"></td>
                <td><input type="text" id="class_name" name="class_name"></td>
                <!--<td><button><a href="">Book Room</a></button></td>-->
                <td><input type="submit" value="Book Room"></td>
            </tr>
        </form>
        </table>


        <div class="displayclassrooms">    
            <?php     
                //query to find the classroom
                $sql = "SELECT * 
                        FROM tblClassroom 
                        WHERE ClassroomID='$id' 
                        LIMIT 1";

                        //SELECT *
                        //FROM tblBookClassroom
                        //WHERE ClassroomID='$id'
                        //AND ClassDate = '$classDate'
                        //AND ClassStartTime >= '$classStart'
                        //AND ClassEndTime <= '$classEnd';";

                //run the query
                $result = mysqli_query($conn, $sql) 
                    or die("Unable to run query.");
                $row = mysqli_fetch_row($result);

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