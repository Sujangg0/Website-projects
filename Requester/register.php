<?php
include('../dbConnection.php');

if (isset($_REQUEST['rSignup'])){
    $rName = $_REQUEST['rName'];
    $rEmail = $_REQUEST['rEmail'];
    $rPassword = $_REQUEST['rPassword']; // Plain text password

    // Hash the password
    $hashedPassword = password_hash($rPassword, PASSWORD_DEFAULT);

    $rContact = $_REQUEST['rContact'];
    $rAddress = $_REQUEST['rAddress'];

    // Check if the user with the given email already exists
    $sqlCheck = "SELECT * FROM requesterlogin_db WHERE r_email = '$rEmail'";
    $result = $connection->query($sqlCheck);

    if ($result->num_rows > 0) {
        // User already exists
        //  display a message
        echo "<script>alert('User with this email already exists!');</script>";
    } else {
        // User does not exist, proceed with registration
        $sql = "INSERT INTO requesterlogin_db (r_name, r_email, r_password, r_contact_num, r_address) 
        VALUES ('$rName', '$rEmail', '$hashedPassword', '$rContact', '$rAddress')";

        if ($connection->query($sql) === TRUE) {
            echo "<script> location.href='login.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register-style.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <header>
                <h1 id="title">Sign Up</h1>
            </header>
            <form action="register.php" method="POST">
                <!-- Signup Fields -->
                <input type="text" id="namefield" placeholder="Enter Name" name="rName" required>
                <input type="email" placeholder="Enter Email" name="rEmail" required>
                <input type="password" placeholder="Enter Password" name="rPassword" required>
                <input type="text" id="contact" placeholder="Enter Contact Number" name="rContact" required>
                <input type="text" id="address" placeholder="Enter Address" name="rAddress" required>
                <input type="submit" value="Sign Up" id="sign-up-btn" name="rSignup">
            </form>
            <p class="login">Already a member?<a href="login.php">Login</a></p>
        </div>
    </div>

</body>

</html>
