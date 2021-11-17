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


            //get the classroom booking information
            $date = $_SESSION['date'];
            $startTime = $_SESSION['startTime'];
            $endTime = $_SESSION['endTime'];
            $courseName = $_SESSION['courseName'];
            $groupSize = $_SESSION['groupSize'];
            $className = $_SESSION['className'];

            $id = $_GET['ClassroomID'];
            $name = $_GET['Name'];
            $pc = $_GET['PC'];
            $students = $_GET['Students'];

            // echo $date ;
            // echo "------------------";
            // echo $startTime;
            // echo "------------------";
            // echo  $endTime;
            // echo "------------------";
            // echo $courseName;
            // echo "------------------";
            // echo $groupSize;
            // echo "------------------";
            // echo $className;
            // echo "------------------";
            // echo $id;
            // echo "------------------";
            // echo $name;
            // echo "------------------";
            // echo $pc;
            // echo "------------------";
            // echo  $students;

            ?>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="hero">
        <br><br><br><br>
        <h3>Book a Room</h3>

        <?php

            //$validation = "SELECT *
                           //FROM   tblclassroom
                           //WHERE  ClassroomID = '$id'";
                           //echo $validation;

            //run the query
            //$result = mysqli_query($conn, $validation) 
              //or die("Unable to run query.");
            //$row = mysqli_fetch_row($result);
            //$resultCheck = mysqli_num_rows($result);
            //echo $row['ClassroomID'];
            //echo $row['ClassroomName'];
            //echo $row['NumOfPC'];
            //echo $row['NumOfStudents'];


            //if($resultCheck > 0)
            //{
                //while($row = mysqli_fetch_assoc($result))
                //{
                  ?>
                  <p ><?php //echo $id; ?></p>
                  <p id="equiptext"><b><?php //echo $row['ClassroomName']; ?></b></p>
                  <p id="equiptext"><?php //echo "PC Count: " . $row['NumOfPC']; ?></p>
                  <p id="equiptext"><?php //echo "Student Count: " . $row['NumOfStudents']; ?></p>
                  <?php
                  //echo "students is" . $row['NumOfStudents'];
                //}//
            //}

            //if ($row['NumOfStudents'] >= $students)
            //{
              //echo "students will fit";
            //}
            //else if ($students > $row['NumOfStudents'])
            //{
              //echo "students do not fit";
            //}
            //else
            //{
              //echo "failed";
            ///}

            //query to insert room booking into database
            $sql = "INSERT INTO tblbookclassroom (ClassroomID, ClassDate, ClassStartTime, ClassEndTime, Course, GroupName, ClassSize)
                    VALUES                       ('$id', '$date', '$startTime', '$endTime', '$courseName', '$className', '$groupSize')";


            //run the query
            $result = mysqli_query($conn, $sql) 
              or die("Unable to run query.");

            //notify user room booking was a success
            if($result)
            {
              echo "Booking was successful";
            }
            //room booking was unsuccessful
            else
            {
              echo "Booking was not successful. Please try again";
            }

        ?>


        
    </div>
  

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>