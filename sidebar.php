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
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-detail'></i>
            <span class="link_name">Employee</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="">Employee</a></li>
          <li><a href="./sidebar.php?addEmployee">Add Employee</a></li>
          <li><a href="./sidebar.php?viewEmployee">View Employee</a></li>
          <li><a href="./sidebar.php?checkAvailability">Availability</a></li>

        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-bookmarks'></i>
            <span class="link_name">Bookings</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Bookings</a></li>
          <li><a href="./sidebar.php?addBooking">Add Bookings</a></li>
          <li><a href="#">View bookings</a></li>
        </ul>
      </li>

      <li>
        <a href="./sidebar.php?viewPayments">
          <i class='bx bxs-credit-card-alt'></i>
          <span class="link_name">Payments</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebar.php?viewPayments">Payments</a></li>
        </ul>
      </li>

      <li>
        <a href="./sidebar.php?viewRequests">
          <i class='bx bxs-book-open'></i>
          <span class="link_name">Requests</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebar.php?viewRequests ">Requests</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-detail'></i>
            <span class="link_name">Customers</span>
           
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
          <!--<i class='bx bxs-chevron-down arrow' ></i>-->
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Customers</a></li>
          <li><a href="./sidebar.php?addCustomer">Add Customer</a></li>
          <li><a href="./sidebar.php?viewCustomer">View Customer</a></li>
         <!-- <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>-->
        </ul>
      </li>
      <li>

      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-package'></i>
            <span class="link_name">Packages</span>
           
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
          <!--<i class='bx bxs-chevron-down arrow' ></i>-->
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Packages</a></li>
          <li><a href="./sidebar.php?addPackages">Add Packages</a></li>
          <li><a href="./sidebar.php?viewPackages">View Packages</a></li>
         <!-- <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>-->
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder-open'></i>
          <span class="link_name">Reviews</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebar.php?reviews">Reviews</a></li>
        </ul>
      </li>
     <!--  
      <li>
        <a href="./sidebar.php?reports">
          <i class='bx bxs-report'></i>
          <span class="link_name">Reports</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebar.php?reports">Reports</a></li>
        </ul>
      </li>-->



      <li>
        <a href="./sidebar.php?messageView">
        <i class='bx bxs-message-dots'></i>
          <span class="link_name">Messages</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./sidebar.php?messageView">Messages</a></li>
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



    <!-- Calendly inline widget begin 
<div class="calendly-inline-widget" data-url="https://calendly.com/ienanayakkara97?hide_landing_page_details=1&hide_gdpr_banner=1" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->

    <?php
    if (isset($_GET['addEmployee'])) {

      include("AddEmployee.php");
    }

    if (isset($_GET['viewEmployee'])) {

      include("viewEmployee.php");
    }
    if (isset($_GET['reports'])) {

      include("Reports.php");
    }
    if (isset($_GET['viewCustomer'])) {

      include("ViewCustomer.php");
    }
    if (isset($_GET['reviews'])) {

      include("reviews.php");
    }

    if (isset($_GET['messageView'])) {

      include("messageView.php");
    }
    if (isset($_GET['addCustomer'])) {

      include("AddCustomer.php");
    }
    if (isset($_GET['addBooking'])) {

      include("AddBooking.php");
    }
    if (isset($_GET['viewRequests'])) {

      include("viewRequests.php");
    }
    if (isset($_GET['addPackages'])) {

      include("AddPackages.php");
    }
    if (isset($_GET['viewPackages'])) {

      include("ViewPackages.php");
    }
    if (isset($_GET['checkAvailability'])) {

      include("checkAvailability.php");
    }
    if (isset($_GET['viewPayments'])) {

      include("viewPayments.php");
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