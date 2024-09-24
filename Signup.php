<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Signup</title>
<link rel="stylesheet" href="Library.css">
<style>
body{
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
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
            
            //verifying the unique email

            $verify_query = mysqli_query($con, "SELECT Username FROM users WHERE Username='$username'");
            
            if(mysqli_num_rows($verify_query) !=0 ){
                echo "<div class='message'>
                        <p> This Username is used, Try another one please!</p>
                        </div>";
                echo "<a href= 'Signup.php'><button class='btn'>Go Back</button>";
            }
            else{

                mysqli_query($con,"INSERT INTO users(Username,Password) VALUES('$username','$password')") or die("Error Occured");

                echo "<div class='message'>
                        <p> You're All Signed Up!</p>
                        </div>";
                echo "<a href= 'Login.php'><button class='btn'>Login Now</button>";

            }
            }else{

            ?>


            <text class="back"><a href="Welcome.html"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>Back </a></text>
            <br>
            <br>
            <header>Sign Up</header>
            <p>Welcome, Lasallian! Create your account and Sign up here.</p>
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
                
                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div>
                <br>
                <div class="links">
                    Already have an account? <a href="Login.php">Login</a> here.
                </div>
                <br><br>
            </form>
        </div>
    </div>
    <?php } ?>
    
</body>