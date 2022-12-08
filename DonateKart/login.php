<?php
    include_once 'header.php';
?>

    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="nav-bar">
        <a href="index.php"></a>
         
        <div class="nav-links">
            <a href="takers.php">TAKERS</a>
            <a href="donors.php">DONORS</a>
			<a href="admin.php">ADMIN</a>
        </div>

        <div class="btn-login-signup">
            <button type="submit" id="btn-signup" onclick="window.location.href='signup.php'">SIGN UP</button>
        </div>
    </div>

    <div class="banner">
        <img src="assets/images/banner.png" alt=""><br><br>
        <span id="banner-quote">
            "No one has ever become <br> poor by giving."
        </span>
    </div>

    <div class="successMessage">
	    <?php
         
                    if(isset($_GET['emailverified'])) {
                        if($_GET['emailverified'] == "success") {
                            echo "You have successfully signed up and verified your email. Now you can login as organizer in DonateHere";
                        }
                    }
        ?>
        <?php 
                    if(isset($_GET['newpassword'])) {
                        if($_GET['newpassword'] == "passwordupdated") {
                            echo 'Your password has been reset. Now you can login to the system using new password';
                        }
                    }
        ?>
        <?php 
                    if(isset($_GET['login'])) {
                        if($_GET['login'] == "notauthenticuser") {
                            echo "You are not an authentic registered user.";
                        }
                    }
        ?>
        <?php 
                    if(isset($_GET['login'])) {
                        if($_GET['login'] == "invalidPassword") {
                            echo "You entered wrong password, Please enter a valid password. Or Reset your password if you forgot it";
                        }
                    }
        ?>
        <?php 
                    if(isset($_GET['account'])) {
                        if($_GET['account'] == "notverified") {
                            echo "This account has not been yet verified. An email was sent to ".$_SESSION['o_email']." on ".$_SESSION['o_date'] ;
                        }
                    }
        ?>
        <?php 
                    if(isset($_GET['login'])) {
                        if($_GET['login'] == "error") {
                            echo "OOPs! you tried to access the wrong page";
                        }
                    }
        ?>
    </div>
    <div class="loginbox">
        <div class="boxone">
            <span id="logintext">Login </span>
        </div>

        <div class="boxtwo">
            <br><br><br>
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="username" placeholder="Username/E-mail" required><br><br>
                <input type="password" name="password" placeholder="password" required><br><br>
                
                <a href="resetPassword.php">forget password?</a><br>
                <input type="submit" name="submit" value="Login">
            </form>
            


        </div>
    </div>