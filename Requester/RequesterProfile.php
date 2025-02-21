<?php
  include('includes/header.php');
  include('../dbConnection.php');
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

    <!--End column-->
    <div class="profile-container">
      <h2>User Profile</h2>
      <form action="" method="POST" class="profile-form">
        <label for="rEmail">Email:</label>
        <input type="email" id="rEmail" name="rEmail" value="<?php echo $rEmail ?>" readonly >
    
        <label for="rName">Name:</label>
        <input type="text" id="rName" name="rName" value="<?php echo $rName ?>">
    
        <button type="submit" name="nameupdate">Update</button>
        <?php if(isset($passmsg)) {echo $passmsg;} ?>
      </form>
    </div>
  </div>
</body>
</html></span>

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

/* Profile Section */
.profile-container {
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    margin: 20px auto;
  }
  
  .profile-container h2 {
    text-align: center;
    color: #333;
  }
  
  .profile-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  
  .profile-form label {
    font-weight: bold;
    color: #555;
  }
  
  .profile-form input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    width: 100%;
  }
  
  .profile-form button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .profile-form button:hover {
    background-color: #0056b3;
  }
  
</style>