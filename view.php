<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="contactus.css">
	<title>Contact Us!</title>
    
</head>

<body>

<?php

include "config.php";

   if(isset($_POST['submit'])){
      
      $Name = $_POST['name'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $email = $_POST['email'];
     
      
      //SQL QUERY
      $sql = "INSERT INTO contact(Name, email, subject, message) VALUES('$Name','$email', '$subject','$message');";
       
      
      //Execute the query
      
      $result =   $conn->query($sql);
     
      if($result == TRUE){
         echo "New record created successfully";
         header("location: ./navigationBar.php?view");
         
      }else{
         echo "Error:". $sql. "<br>". $conn->error;
      }    
    
      
   }

 ?>


<!--
	<nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="navigationBar.php"><img src="logo.jpg" height="50" alt="CoolBrand"> Kaimora Weddings</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="navigationBar.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.php">Portfolio</a>
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
          <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
         <!--   </div>
          <div class="navbar bg-light">
            <form class="container-fluid justify-content-start">
                <button class="btn btn-sm btn-outline-secondary mx-2" type="button">Requst a Quote </button>  
                
              <button class="btn btn-sm btn-outline-secondary" type="button"> Log In</button>
            </form>
          </div>

        </div>
      </nav> -->





    <section class="ftco-section img" style="background-image: url(bg.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5" style="color:black">
									<h3 class="mb-4" style="color:black">Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker" style="color:black"></span>
				        		</div>
				        		<div class="text pl-4" style="color:black">
					            <p><span style="color:black">Address:</span> Kaimora Weddings, Kaluthara Road, Matugama</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone" style="color:black"></span>
				        		</div>
				        		<div class="text pl-4" style="color:black">
					            <p style="color:black"><span style="color:black">Phone:</span> <a href="" style="color:black">+9476 322 9566</a></p> 
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start" style="color:black">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane" style="color:black"></span>
				        		</div>
				        		<div class="text pl-4" style="color:black">
					            <p><span style="color:black">Email:</span> <a href="" style="color:black">kaimoraweddings@gmail.com</a></p>
					          </div>
				          </div>
				        	
			          </div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4 shadow" >
									<h3 class="mb-4">Get in touch</h3>
									<div id="form-message-warning" class="mb-4">
										
									</div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" action="./view.php">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name ="submit" value="Send Message" class="btn btn-outline-dark">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</body>
</html>