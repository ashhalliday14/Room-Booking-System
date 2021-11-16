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

            ?>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="hero">
        <br><br><br><br>
        <h3>Book a Room</h3>
        <table>
                        <tr>
                            <th></th>
                            <th>Classroom Name</th>
                            <th>Number Of PCs</th>
                            <th>Number Of Students</p></th>
                        </tr>
        <div class="displayclassrooms">    
        <?php 
            //sql to search for all equipment
            $sql = "SELECT * FROM tblClassroom";

            //run query
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                        <tr>
                            <td><p hidden><?php echo $row['ClassroomID']; ?></p></td>
                            <td><p id="equiptext"><?php echo $row['ClassroomName']; ?></p></td>
                            <td><p id="equiptext"><?php echo $row['NumOfPC']; ?></p></td>
                            <td><p id="equiptext"><?php echo $row['NumOfStudents']; ?></p></td>
                            <td>
                            <?php
                                if($_SESSION["role"] == "Teacher")
                                {
                                    ?>
                                    <!--<input type="submit" id="btn" value="Book Room"/>-->
                                    <button><a href="old_book_room_process.php?ClassroomID=<?php echo $row['ClassroomID'];?>&Name=<?php echo $row['ClassroomName'];?>&PC=<?php echo $row['NumOfPC'];?>&Students=<?php echo $row['NumOfStudents'];?>">Book Room</a></button>
                                    <br><br>
                                    <?php
                                }
                            ?></td>
                        </tr>
                        


                    <!-- edit stock
                    <div class="box">
                        <form action="book_room_process.php?ClassroomID=<?php //echo $row['ClassroomID'];?>" method="post">
                            <p hidden><?php //echo $row['ClassroomID']; ?></p>
                            <p id="equiptext"><b><?php //echo $row['ClassroomName']; ?></b></p>
                            <p id="equiptext"><?php //echo "PC Count: " . $row['NumOfPC']; ?></p>
                            <p id="equiptext"><?php //echo "Student Count: " . $row['NumOfStudents']; ?></p>

                            <?php
                                //if($_SESSION["role"] == "Teacher")
                                //{
                                    ?>
                                    <input type="submit" id="btn" value="Book Room"/>
                                    <br><br>
                                    <?php
                                //}
                            ?>
                        </form>
                    </div> -->
                    <?php
                }
            }
            ?>
            </table>
    </div>
    </div>
  

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

