<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="Library.css">
    <style>
        body {
            background-image: url(Media/BG.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("php/account.php");

            if (isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($con, $_POST['username']);
                $password = mysqli_real_escape_string($con, $_POST['password']);
            
                // Query to check username and password
                $result = mysqli_query($con, "SELECT * FROM users WHERE Username='$username' AND Password='$password'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    // Valid login, set session variables
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['Id'];

                    // Redirect to Home.php
                    header("Location: Home.php");
                    exit(); // Ensure no further code runs after the redirect
                } else {
                    // Invalid login
                    echo "<div class='message'>
                            <p>Wrong Username or Password</p>
                          </div>";
                    echo "<a href='Login.php'><button class='btn'>Go Back</button></a>";
                }
            } else {
            ?>
            <text class="back"><a href="Welcome.html"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>Back </a></text>
            <br>
            <br>
            <header>Login</header>
            <p>Welcome back, Lasallian! Please Login to your account.</p>
            <br>
            <br>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
                <br>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <br>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <br>
                <div class="links">
                    Don't have an account? <a href="Signup.php">Sign Up</a> here.
                </div>
                <br><br>
            </form>
        </div>
    </div>
    <?php } ?>
</body>
</html>
