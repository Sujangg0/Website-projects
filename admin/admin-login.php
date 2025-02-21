<?php
    include('../dbConnection.php');
    session_start();

    if(!isset($_SESSION['is_adminlogin'])){
        if(isset($_REQUEST['aEmail'])) {
            $aEmail = $_REQUEST['aEmail'];
            $aPassword = $_REQUEST['aPassword'];
            $sql = "SELECT a_email, a_password FROM adminlogin_tb
                    WHERE a_email = '".$aEmail."' AND a_password = '".$aPassword."' limit 1";
            $result = $connection->query($sql);
            if($result->num_rows ==1){
                $_SESSION['is_adminlogin'] = true;
                $_SESSION['aEmail'] = $aEmail;
                echo "<script> location.href='dashboard.php';</script>";
                exit;
            } else {
                $msg = '<div class="alert-warning">Enter Valid Email and Password</div>';
            }
        }
    } else {   // if already login then move to dashboard
        echo "<script> location.href='dashboard.php';</script>";
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Admin Login Form</title>
      <link rel="stylesheet" href="admin-log-style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   </head>
   <body>
      <div class="center">
         <div class="header">
            Admin Login 
         </div>
         <form>
            <input type="text" placeholder="Email" name="aEmail">
            <i class="far fa-envelope"></i>
            <input id="pswrd" type="password" placeholder="Password" name="aPassword">
            <i class="fas fa-lock" onclick="show()"></i>
            <input type="submit" value="Sign in">
            <?php
                    if(isset($msg)) {echo $msg;} ;
            ?>
            <a href="#">Forgot Password?</a>
         </form>
      </div>
      <script>
         function show(){
          var pswrd = document.getElementById('pswrd');
          var icon = document.querySelector('.fas');
          if (pswrd.type === "password") {
           pswrd.type = "text";
           pswrd.style.marginTop = "20px";
           icon.style.color = "#7f2092";
          }else{
           pswrd.type = "password";
           icon.style.color = "grey";
          }
         }
      </script>
   </body>
</html>