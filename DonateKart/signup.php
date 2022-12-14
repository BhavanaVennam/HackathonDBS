<?php
    include_once 'header.php';
?>

    <link rel="stylesheet" href="assets/css/signup.css">
    
</head>
<body>
    <!-- navigation section -->
    <div class="nav-bar">
        <a href="index.php">
            <img src="logo.jpeg" alt="Fund Raiser logo">
        </a>
         
        <div class="nav-links">
            <a href="#">DONORS</a>
            <a href="#">RECEIVERS</a>
            <a href="#">ADMIN</a>
        </div>

        <div class="btn-login-signup">
            <button type="submit" id="btn-login" onclick="window.location.href='login.php'">LOGIN</button>
        </div>
    </div>

    <!-- body part -->
         <!-- show message in case user enter invalid name format -->
    <div class="successMessage">
        <?php 
                    if(isset($_GET['signup'])) {
                        if($_GET['signup'] == "invalidname") {
                            echo "<span style='color: red; font-size:30px;'>!</span> The Full name you entered is not valid. Please enter a valid name.";
                        }
                    }
        ?>

        <?php 
                    if(isset($_GET['signup'])) {
                        if($_GET['signup'] == "usernametaken") {
                            echo "<span style='color: red; font-size:30px;'>!</span> The Username is already taken.";
                        }
                    }
        ?>
    </div>

    <div class="banner">
        <img src="assets/images/banner.png" alt=""><br><br>
        <span id="banner-quote">
            Do Donate. <br> It Helps Everyone.
        </span>
    </div>

    <div class="signupbox">
        <div class="boxone">
            <span id="signuptext">Sign Up </span>
        </div>

        <div class="boxtwo">
            <br><br>
            <form onsubmit='return signupFormValidate();' action="includes/signup.inc.php" method="POST">
                <input type="text" name="username" placeholder="username" pattern="[A-Za-z0-9]+" title="Username should only contain letters and numbers only. e.g. john12345" required><br><br>
                <input type="email" name="email" placeholder="E-mail" required><br><br>
                <input type="password" id = "password" name="password" placeholder="password" required><br><br>
                <input type="password" id="repeat-password" name="repeat-password" placeholder="Confirm password" required><br><br>
                <input type="tel" name="phone" placeholder="Phone: 98********" pattern="[0-9]{10}" required><br><br>

                <input type="checkbox" name="" required size=10px><span id="agreeterms"> Agree all terms and conditions</span><br>
                <input type="submit" name="submit" value="Sign Up" id="submit">
            </form>
        </div>
    </div>
    
<script src="assets/js/signup.js"></script>
