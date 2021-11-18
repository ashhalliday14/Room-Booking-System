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

    <title>Update Room Information</title>
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
        <h3>Update Room Information</h3>
        <?php
            //include connection
            include 'inc/connection.php';       

            //get the classroom ID to edit
            $id = $_GET['ClassroomID'];

            //query to find the classroom
            $sql = "SELECT * 
                    FROM   tblclassroom 
                    WHERE  ClassroomID='$id' 
                    LIMIT  1";

            //run the query
            $result = mysqli_query($conn, $sql) 
                or die("Unable to run query.");
            $row = mysqli_fetch_row($result);

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] . "?ClassroomID=$id"?>" method="post" class="form_add" id="editbox">
            <p id="editprojecttext">Edit Room Information:</p>

            <input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>

            <label id="editlabel">Classroom Name:</label>
            <input type="text" style="text-align: left" name="ClassroomName" value="<?php echo $row[1];?>" class="add_author" >
            <br><br>

            <label id="editlabel">Number of PCs:</label>
            <input type="text" name="NumOfPC" style="text-align: left" class="NumOfPC" value="<?php echo $row[2];?>">
            <br><br>

            <label id="editlabel">Number of Students:</label>
            <input type="text" name="NumOfStudents" value="<?php echo $row[3];?>" class="add_author">
            <br><br>

            <label id="editlabel">Off Campus?</label>
            <select>
                <?php 
                    if ($row['OffCampus'] == 0)
                    {
                        ?>
                        <option value="no">No</option>
                        <?php
                    }
                    else if ($row['OffCampus'] == 1)
                    {
                        ?>
                        <option value="yes">Yes</option>
                        <?php
                    }
                ?>      
            </select>
            <br><br>

            <input type="submit" value="Submit Changes" class="add_button" id="btn">
        </form>

        <?php   
            //check that the ID has been set to pull back that project
            if(!isset($_GET["ClassroomID"]) || !is_numeric($_GET["ClassroomID"]))
            {
                header("Location: projects.php");
            }

            //query to find project
            $sql = "SELECT * 
                    FROM   tblclassroom 
                    WHERE  ClassroomID='$id' 
                    LIMIT  1";

            //run the query
            $result = mysqli_query($conn, $sql) 
                or die("Unable to run query.");
            $row = mysqli_fetch_row($result);

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                //set variables based on user input for changing project info
                $classroomName = $_POST['ClassroomName'];
                $numOfPC = $_POST['NumOfPC'];
                $numOfStudents = $_POST['NumOfStudents'];

                //ensure that all fields have been filled before submitting
                if (!empty($classroomName) && !empty($numOfPC) && !empty($numOfStudents))
                {
                    //sql to add changes to project
                    $sql = "UPDATE tblclassroom 
                            SET    ClassroomName = '$classroomName', NumOfPC = '$numOfPC', NumOfStudents = '$numOfStudents' 
                            WHERE  ClassroomID = $id";

                    //run the query
                    $result = mysqli_query($conn, $sql)
                        or die("Could not run query");

                    //close the connection
                    mysqli_close($conn);

                    //if project was edited successfully
                    if ($result)
                    {
                        ?>
                        <p id="text">Classroom successfully edited. <a href="projects.php">Click here</a> to return to the projects page</p>
                        <?php
                    }
                    //if project editing was not successful
                    else
                    {
                        ?>
                        <p id="text">Classroom could not be edited. <a href="projects.php">Click here</a> to return to the projects page</p>
                        <?php
                    }
                }
                //notify user to fill out all fields
                else
                {
                    ?>
                    <p id="text">Please ensure all fields are filled. <a href="projects.php">Click here</a> to return to the projects page</p>
                    <?php
                }
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

<!DOCTYPE html>
<html>
    <head>
        <title>Update Room Information</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <?php

        //include connection
        include 'inc/connection.php';

        //include navigation bar
        include 'inc/navigation.php';

        //get the classroom ID to edit
        $id = $_GET['ClassroomID'];
    
        //query to find the classroom
        $sql = "SELECT * 
                FROM tblClassroom 
                WHERE ClassroomID='$id' 
                LIMIT 1";

        //run the query
        $result = mysqli_query($conn, $sql) 
            or die("Unable to run query.");
        $row = mysqli_fetch_row($result);

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] . "?ClassroomID=$id" . $id;?>" method="post" class="form_add" id="editbox">
        <p id="editprojecttext">Edit Room Information:</p>
    
        <input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>

        <label id="editlabel">Classroom Name:</label>
        <input type="text" style="text-align: left" name="ClassroomName" value="<?php echo $row[1];?>" class="add_author" >
        <br><br>

        <label id="editlabel">Number of PCs:</label>
        <input type="text" name="NumOfPC" style="text-align: left" class="NumOfPC" value="<?php echo $row[2];?>">
        <br><br>

        <label id="editlabel">Number of Students:</label>
        <input type="text" name="NumOfStudents" value="<?php echo $row[3];?>" class="add_author">
        <br><br>

        <input type="submit" value="Submit Changes" class="add_button" id="btn">
    </form>

    <?php

    //check that the ID has been set to pull back that project
    if(!isset($_GET["ClassroomID"]) || !is_numeric($_GET["ClassroomID"])){
        header("Location: projects.php");
    }

    //query to find project
    $sql = "SELECT * 
            FROM tblClassroom 
            WHERE ClassroomID='$id' 
            LIMIT 1";

    //run the query
    $result = mysqli_query($conn, $sql) 
        or die("Unable to run query.");
    $row = mysqli_fetch_row($result);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //set variables based on user input for changing project info
        $classroomName = $_POST['ClassroomName'];
        $numOfPC = nl2br($_POST['NumOfPC']);
        $numOfStudents = $_POST['NumOfStudents'];

        //ensure that all fields have been filled before submitting
        if (!empty($projectName) && !empty($description) && !empty($owner)){
            //sql to add changes to project
            $sql = "UPDATE tblClassroom 
            SET ClassroomName = '$classroomName', NumOfPC = '$numOfPC', NumOfStudents = '$numOfStudents' 
            WHERE ClassroomID = $id";

            //run the query
            $result = mysqli_query($conn, $sql)
                or die("Could not run query");

            //close the connection
            mysqli_close($conn);

            //if project was edited successfully
            if ($result){
                ?>
                <p id="text">Classroom successfully edited. <a href="projects.php">Click here</a> to return to the projects page</p>
                <?php
            }
            //if project editing was not successful
            else{
                ?>
                <p id="text">Classroom could not be edited. <a href="projects.php">Click here</a> to return to the projects page</p>
                <?php
            }
        }
        //notify user to fill out all fields
        else{
            ?>
            <p id="text">Please ensure all fields are filled. <a href="projects.php">Click here</a> to return to the projects page</p>
            <?php
        }
    }
?>

</html>