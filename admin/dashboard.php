<?php
include('includes/header.php');
include('../dbConnection.php');

session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
}else{
  echo "<script> location.href ='admin-login.php'</script>";
}

?>

<!-- start of dashpoard page-->
    <div class="content-container">
      <div class="requester-wrapper">
      <div class="requester-box">
          <p class="title">List of Requester</p>
          <?php
          $sql = "SELECT * from requesterlogin_db";
          $result = $connection->query($sql);
          if($result->num_rows > 0){
              echo ' 
              <table class="table">
                  <thead>
                  <tr>
                      <Th scope="col">Requester ID</th>
                      <Th scope="col">Name</th>
                      <Th scope="col">Email</th>
                  </tr>
                  </thead>
                  <tbody>';
                  while($row = $result->fetch_assoc()){
                    echo '<tr>';
                      echo '<td>'.$row["r_login_id"].'</td>';
                      echo '<td>'.$row["r_name"].'</td>';
                      echo '<td>'.$row["r_email"].'</td>';
                    echo '<tr>';
                  }
                  echo '</tbody>
              </table>';
          }else{
            echo '0 Result';
          }
          ?>
          </div>
      </div>
    </div>
<!--End Dashboard section page-->

<style>

.content-container {
  padding-top: 80px; 
}

.requester-wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
}

.requester-box {
  width: 100%;
  max-width: 800px;
  background: #fff;
  padding: 20px 30px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.requester-box .title {
  text-align: center; 
  font-size: 24px;
  margin-bottom: 20px; 
  color: #333; 
  font-weight: bold; 
}
.requester-box table {
  margin-top: 0 auto; 
  text-align:center;
  margin-left: 25%;
}

.requester-box table thead th,
.requester-box table tbody td {
  padding: 10px; 
}

.requester-box table thead th {
  background-color: #f0f0f0; 
  text-align: left; 
}




