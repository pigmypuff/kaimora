<?php

    session_start();

    include "config.php";
  
?>




<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<title>Kaimora Weddings</title>


</head>


<body>


  <nav class="navbar fixed-top navbar-expand-lg bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="./navigationBar.php?carousal"><img src="logo.jpg" height="50" alt="CoolBrand"> Kaimora Weddings</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./navigationBar.php?carousal">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./navigationBar.php?aboutPage">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./navigationBar.php?portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./navigationBar.php?view">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="customerLogin.php">Log In</a></li>
                  <li><a class="dropdown-item" href="./navigationBar.php?requestStatus">Request Status</a></li>
                  <li><a class="dropdown-item" href="#">Payments</a></li>
                  <li><a class="dropdown-item" href="./navigationBar.php?addReview">Reviews</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                </ul>
              </li> 
             <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
           <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
      </div>
      <div class="navbar bg-light">
        <form class="container-fluid justify-content-start">
          <a href="./navigationBar.php?requestForm">
          <button class="btn btn-sm btn-outline-secondary mx-2" type="button">Requst a Quote </button></a>
        </form>
      </div>

    </div>
  </nav>

  <section>


    <?php
    if (isset($_GET['portfolio'])) {

      include("portfolio.php");
    } 
    
    if (isset($_GET['view'])) {

      include("view.php");
    }
    
    if (isset($_GET['carousal'])) {

      include("carousal.php");
    } 
    if (isset($_GET['addReview'])) {

      include("addReview.php");
    }
    if (isset($_GET['aboutPage'])) {

      include("aboutPage.php");
    } 
    if (isset($_GET['requestForm'])) {

      include("requestForm.php");
    } 
    if (isset($_GET['requestStatus'])) {

      include("requestStatus.php");
    } 
    //*if (isset($_GET['customerLogin'])) {

      /*include("customerLogin.php");
    }  */
    
    ?>

  </section>

</body>



</html>