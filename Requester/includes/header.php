<?php
  include('../dbConnection.php');
  session_start();
  if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
  } else {
    echo "<script> location.href='login.php'</script>";
  }
  $sql = "SELECT r_name, r_email from requesterlogin_db WHERE
          r_email = '$rEmail'";
  $result = $connection->query($sql);
  if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $rName = $row['r_name'];
  }

  if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName'] == ""){
      $passmsg = "FILL ALL THE FIELDS";
    } else {
      $newName = $_REQUEST['rName'];
      $sql = "UPDATE requesterlogin_db SET r_name = '$newName' WHERE r_email = '$rEmail'";
      if($connection->query($sql) == TRUE){
        $passmsg = 'Updated Successfully';
        // Update the session variable to reflect the new name
        $_SESSION['rName'] = $newName;
      } else {
        $passmsg = 'Unable to Update';
      }
    }
  }

?>

<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard</title>
  <link rel="stylesheet" href="RequesterProfile.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <span class="nav-item">User DashBoard</span>
        </a></li>
        <li><a href="RequesterProfile.php">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="SubmitRequest.php">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Submit Request</span>
        </a></li>
        <li><a href="CheckStatus.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Service Status</span>
        </a></li>
        <li><a href="Requesterchangepass.php">
          <i class="fas fa-solid fa-key"></i>
          <span class="nav-item">Change Password</span>
        </a></li>
        <li><a href="includes/logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <!--End column-->
  
    
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");

* {
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background: #dfe9f5;
}

.container {
  display: flex;
}

nav {
  position: relative;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  background: #fff;
  width: 280px;
  overflow: hidden;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.logo {
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}

.logo span {
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}

a {
  position: relative;
  color: rgb(85, 83, 83);
  font-size: 14px;
  display: table;
  width: 280px;
  padding: 10px;
}

nav .fas {
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}

.nav-item {
  position: relative;
  top: 12px;
  margin-left: 10px;
}

a:hover {
  background: #eee;
}

.logout {
  position: absolute;
  bottom: 0;
}

/* Main Section */
.main {
  position: relative;
  padding: 20px;
  width: 100%;
}

.main-skills {
  display: flex;
  margin-top: 20px;
}

.main-skills .card {
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.main-skills .card h3 {
  margin: 10px;
  text-transform: capitalize;
}

.main-skills .card p {
  font-size: 12px;
}

.main-skills .card button {
  background: orangered;
  color: #fff;
  padding: 7px 15px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}

.main-skills .card button:hover {
  background: rgba(223, 70, 15, 0.856);
}

</style>

    