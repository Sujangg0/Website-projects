<?php
include('includes/header.php');
include('../dbConnection.php');

if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='Login.php'</script>";
}

if (isset($_POST['updatePassword'])) {
    $rPass = $_POST['rPassword'];
    $sql = "UPDATE requesterlogin_db SET r_password = '$rPass' WHERE r_email = '$rEmail'";

    if ($connection->query($sql) === TRUE) {
        $passmsg = 'Password Updated Successfully';
    } else {
        $passmsg = 'Unable to Update Password';
    }
}
?>

<div class="change-password-container">
    <h2>Change Password</h2>
    <form action="#" method="POST" class="change-password-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="rEmail" placeholder="Enter your email" value="<?php echo $rEmail ?>" readonly>

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="rPassword" placeholder="Enter new password" required>

        <button type="submit" name="updatePassword">Update Password</button>
    </form>
    <?php echo isset($passmsg) ? $passmsg : ''; ?>
</div>

<?php
include('includes/footer.php');
?>

<style>
    /* Change Password Section */
    .change-password-container {
        padding: 20px;
        border-radius: 10px;
        width: 400px;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .change-password-container h2 {
        text-align: center;
        color: #333;
    }

    .change-password-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .change-password-form label {
        font-weight: bold;
        color: #555;
    }

    .change-password-form input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        width: 100%;
    }

    .change-password-form button {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .change-password-form button:hover {
        background-color: #0056b3;
    }
</style>
