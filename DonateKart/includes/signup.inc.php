<?php

if(!isset($_POST['submit']))
{ //if one try to access signup.inc.php without access
    header("Location: ../signup.php");
    exit();
} 


        include_once 'dbh.inc.php'; //creating connection to database

    //$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // for email verification: generate vkey
    $vkey = md5(time().$username);
     
    
        // check if there is already a username with same inputted data by new user
        $sql = "SELECT * FROM donor_details WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0)
         {
            ?>
            alert("Username Taken");
            <?php
            header("Location: ../signp.php");
            exit();
         } 
        else 
        {
            // password hashing
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            // insert the organizer into database
            $sql = "INSERT INTO donor_details(username, email, password, phone) VALUES('$username','$email','$hashedPassword','$phone');";
            $insertSuccess = mysqli_query($conn, $sql);

            if($insertSuccess)
             {
                header("Location: ../login.php");
                exit();

            } 
            else 
            {
                echo $conn->error;
            } 

        }






