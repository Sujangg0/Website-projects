<?php 
include('includes/header.php');
include('../dbConnection.php');

// Check if session is not already started
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
  } else {
    echo "<script> location.href='login.php'</script>";
  }

if(isset($_REQUEST['submitRequest'])){
  $rname = $_REQUEST['reqName'];
  $radd = $_REQUEST['reqAddress'];
  $remail = $_REQUEST['reqEmail'];
  $rphone = $_REQUEST['reqPhone'];
  $rtype = $_REQUEST['reqType'];
  $rdetail = $_REQUEST['reqDetail'];
  $sql = "INSERT INTO submitrequest_tb(requester_name, requester_address, requester_email, requester_phone, request_type, request_details) 
          VALUES('$rname', '$radd', '$remail', '$rphone', '$rtype','$rdetail')";
  if($connection->query($sql)== TRUE){
    $msg = "Request Submitted Successfully";
  } else {
    $msg = "Unable to Submit Your Request";
  }
} 
?>

<div class="submit-container">
  <form action="#" method="POST" class="submit-form">
    <h2>Submit Request</h2>

    <label for="requesterName">Requester Name:</label>
    <input type="text" id="requesterName" name="reqName" placeholder="Enter your name" required>

    <label for="requesterAddress">Requester Address:</label>
    <textarea id="requesterAddress" name="reqAddress" placeholder="Enter your address" required></textarea>

    <label for="requesterEmail">Requester Email:</label>
    <input type="email" id="requesterEmail" name="reqEmail" placeholder="Enter your email" required>

    <label for="requesterPhone">Requester Phone Number:</label>
    <input type="tel" id="requesterPhone" name="reqPhone" placeholder="Enter your phone number" required>

    <label for="requestType">Request Type:</label>
    <textarea id="requestType" name="reqType" placeholder="Enter type of request" required></textarea>

    <label for="requestDetails">Request Details:</label>
    <textarea id="requestDetails" name="reqDetail" rows="4" placeholder="Enter details about your request" required></textarea>

    <button type="submit" name="submitRequest">Submit Request</button>
  </form>
</div>

<?php include('includes/footer.php'); ?>

<style>
  /* Submit Request Section */
  .submit-container {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center content horizontally */
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .submit-container h2 {
    text-align: center;
    color: #333;
  }

  .submit-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 100%; /* Full width */
  }

  .submit-form label {
    font-weight: bold;
    color: #555;
  }

  .submit-form input,
  .submit-form textarea {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    width: 100%;
  }

  .submit-form button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .submit-form button:hover {
    background-color: #0056b3;
  }
</style>
