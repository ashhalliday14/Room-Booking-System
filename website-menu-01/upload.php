<?php

    //start a session
    session_start();

    //variables for image location and file type
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    //check the file uploaded in an image type
    if(isset($_POST["submit"])) 
    {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) 
        {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else 
        {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    //check if the file already exists in the system
    if (file_exists($target_file)) 
    {
        echo "Sorry, the image already exists.";
        $uploadOk = 0;
    }

    //check the image file size uploaded
    if ($_FILES["fileToUpload"]["size"] > 500000) 
    {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    //ensure only certain file types are uploaded
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
    {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    //check if $uploadOk is set to 0
    if ($uploadOk == 0) 
    {
        echo "Sorry, your file was not uploaded.";
    } 
    //try to upload the file
    else
    {
        //upload file and redirect user
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $file= htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
            $_SESSION['uploadFile'] = $file;
            header('Location: update_layouts_complete.php');
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }

?>