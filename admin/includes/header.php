<?php
include ('../dbConnection.php');
?>


<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body> <!--Sidebar-->
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">TheCompany</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="work.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Work order</span>
          </a>
        </li>
        <li>
          <a href="request.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Requests</span>
          </a>
        </li>
        <li>
          <a href="technician.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Technician</span>
          </a>
        </li>
        <li>
          <a href="clients.php">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Clients</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-key'></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>
        <li class="log_out">
          <a href="includes/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div><!--Sidebar Ends-->

<!--Start heading of page-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
      <div class="profile-details">
        <span class="admin_name">You: Admin</span>
      </div>
    </nav>
</section>
<!-- End of heading of page-->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
.sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: #0A2558;
  transition: all 0.5s ease;
}
.sidebar.active{
  width: 60px;
}
.sidebar .logo-details{
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
.sidebar .nav-links{
  margin-top: 10px;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li a.active{
  background: #081D45;
}
.sidebar .nav-links li a:hover{
  background: #081D45;
}
.sidebar .nav-links li i{
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}
.sidebar .nav-links .log_out{
  position: absolute;
  bottom: 0;
  width: 100%;
}

/*Style for dashboard panel page */

.home-section {
  position: relative;
  background: #f5f5f5;
  min-height: 10vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}

.sidebar.active ~ .home-section {
  width: calc(100% - 60px);
  left: 60px;
}

.home-section nav {
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}

.sidebar.active ~ .home-section nav {
  left: 60px;
  width: calc(100% - 60px);
}

.home-section nav .sidebar-button {
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}

nav .sidebar-button i {
  font-size: 35px;
  margin-right: 10px;
}

.home-section nav .profile-details {
  display: flex;
  align-items: center;
  background: #f5f6fa;
  border: 2px solid #efeef1;
  border-radius: 6px;
  height: 50px;
  min-width: auto;
  padding: 0 15px 0 2px;
}

nav .profile-details .admin_name {
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}

nav .profile-details i {
  font-size: 25px;
  color: #333;
}

</style>


<!--Javascript
<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
