<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    


</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="logo.jpg" height="50" alt="CoolBrand"> Kaimora Weddings</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./navigationBar1.php?portfolio.php">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view.php">Contact Us</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> > 
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
           <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
          <div class="navbar bg-light">
            <form class="container-fluid justify-content-start">
                <button class="btn btn-sm btn-outline-secondary mx-2" type="button" >Requst a Quote </button>  
                
              <button class="btn btn-sm btn-outline-secondary" type="button"> Log In</button>
            </form>
          </div>

        </div>


        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <!-- Avatar -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle d-flex align-items-center"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="user.png "
                      class="rounded-circle"
                      height="22"
                      alt="Portrait of a Woman"
                      loading="lazy"
                    />
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            </div>
          
      </nav>

<br>
<br>
<br>
<br>
<section>


<?php
    if (isset($_GET['portfolio'])) {

      include("portfolio.php");
    }
    else{
      include("carousal.php");
    }
?>

</section>

</body>
</html>