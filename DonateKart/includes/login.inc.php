<?php

session_start();

    include 'dbh.inc.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']); //$username can either be username or email
    $password = mysqli_real_escape_string($conn, $_POST['password']);//user prepared statement instead of this

    //error handling: check if username exits in database
    $sql = "SELECT * FROM donor_details WHERE email='$username';";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1) { //if no such record in database
        header("Location: ../login.php?login=notauthenticuser");
        exit();
    } else {
        // check for correct password
        if($row = mysqli_fetch_assoc($result)) {
            if($password != $row['password']) {
                header("Location: ../login.php?login=invalidPassword");
                exit();
            } elseif($password == $row['password']) {
                // login the user here
                //session variables
                 
                header("Location: ../homepage.php");

                
            }
        }
    }


