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
<!-- Request column start-->
<div class="request-column">
    <?php
        $sql = "SELECT request_id, request_type, request_details FROM submitrequest_tb";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card-container">';
                    echo '<div class="card">';
                        echo '<div class="card-header">';
                            echo 'Request ID: ' . $row['request_id'];
                        echo '</div>';
                        echo '<div class="card-body">';
                            echo '<h5 class="card-title">Request Info: ' . $row['request_type'] . '</h5>';
                            echo '<p class="card-text">' . $row['request_details'];
                            echo '</p>';
                            echo '<div class="btn">';
                            echo '<input type="submit" class="view-btn" value="View">';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
    ?>
</div>


<style>
/* Center the content horizontally and vertically */
.request-column {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center horizontally */
    height: 100vh; /* Set height to 100% of viewport height */
}

.card-container {
    width: 300px;
    margin: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.card {
    background-color: #f9f9f9;
    padding: 20px;
}

.card-header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.card-body {
    padding: 10px;
}

.card-title {
    font-size: 18px;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
}
.btn {
    display: flex;
    justify-content: center; /* Center horizontally */
    margin-top: 8px ; 
}

.view-btn {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.view-btn:hover {
    background-color: #45a049; /* Darker green */
}


</style>