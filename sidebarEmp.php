<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="sidebar.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kaimora Weddings</title>
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxs-camera'></i>
      <span class="logo_name">Kaimora Weddings</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
    
      <li>
        <a href="./sidebarEmp.php?viewEvents">
          <i class='bx bxs-report'></i>
          <span class="link_name">Events</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebarEmp.php?viewEvents">Events</a></li>
        </ul>
      </li> 



      <li>
        <a href="./sidebarEmp.php?empAvailability">
        <i class='bx bxs-message-dots'></i>
          <span class="link_name">Availability</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebarEmp.php?empAvailability">Availability</a></li>
        </ul>
      </li>
      <li>
        <a href="./sidebarEmp.php?viewEmpAssign">
        <i class='bx bxs-user-detail'></i>
          <span class="link_name">Asigned Events</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebarEmp.php?viewEmpAssign">Asigned Events</a></li>
        </ul>
      </li>


      <!-- 
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li> -->
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <!-- <div class="name-job">
        <div class="profile_name">Prem Shahi</div>
        <div class="job">Web Desginer</div>
      </div> -->
      <a href="logoutEmp.php">
          <div class="log_out">Log Out</div>
          <i class='bx bx-log-out'></i>
      </a>
        </div>
      </li>
    </ul>
  </div>


  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>

      <!--<span class="text">Side Bar</span> -->
    </div>



    <?php
    
   
    if (isset($_GET['viewEvents'])) {

      include("viewEvents.php");
    }
    if (isset($_GET['empAvailability'])) {

      include("empAvailability.php");
    }
    if (isset($_GET['viewEmpAssign'])) {

      include("viewEmpAssign.php");
    }




    ?>
  </section>

  <div>


  </div>



  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>



</body>

</html>