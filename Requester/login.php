<?php
    include('../dbConnection.php');
    session_start();

    if(!isset($_SESSION['is_login'])){
        if(isset($_REQUEST['rEmail'])) {
            $rEmail = $_REQUEST['rEmail'];
            $rPassword = $_REQUEST['rPassword'];

            // Fetch the hashed password from the database
            $sql = "SELECT r_email, r_password FROM requesterlogin_db
                    WHERE r_email = '".$rEmail."' limit 1";
            $result = $connection->query($sql);
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $hashedPassword = $row['r_password'];

                // Verify the password
                if(password_verify($rPassword, $hashedPassword)) {
                    $_SESSION['is_login'] = true;
                    $_SESSION['rEmail'] = $rEmail;
                    echo "<script> location.href='RequesterProfile.php';</script>";
                    exit;
                } else {
                    $msg = '<div class="alert-warning">Enter Valid Email and Password</div>';
                }
            } else {
                $msg = '<div class="alert-warning">Enter Valid Email and Password</div>';
            }
        }
    } else {
        echo "<script> location.href='RequesterProfile.php';</script>";
        exit;
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login-style.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <header>
                <h1 id="title">Login</h1>
            </header>
            <form action="login.php" method="POST">
                <!-- Login Fields -->
                <input type="email" placeholder="Enter Email" name="rEmail" required>
                <input type="password" placeholder="Enter Password" name="rPassword" required>
                <input type="submit" value="Login" id="sign-in-btn">
                <?php
                    if(isset($msg)) {echo $msg;} ;
                ?>
            </form>
            <p class="signup">Not a member?<a href="register.php">Sign Up</a></p>
        </div>
    </div>

</body>

</html>