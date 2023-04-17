<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="contactus.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  
	<title>Contact Us!</title>

</head>

<body>

	<?php

	include "config.php";

	if (isset($_POST['submit'])) {

		$Name = $_POST['name'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$email = $_POST['email'];


		//SQL QUERY
		$sql = "INSERT INTO contact(Name, email, subject, message) VALUES('$Name','$email', '$subject','$message');";


		//Execute the query

		$result =   $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully";
			echo '<script>$(document).ready(function(){toastr.success("We received your message!");});</script>';
			header("location: ./navigationBar.php?view");
		} else {
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}

	?>

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
								<div class="contact-wrap w-100 p-md-5 p-4 shadow">
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
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="submit" value="Send Message" class="btn btn-outline-dark" id="liveToastBtn">
													<div class="submitting"></div>
													
													<div class="toast-container position-fixed bottom-0 end-0 p-3">
														<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
															<div class="toast-header">

																<strong class="me-auto"></strong>
																<small></small>
																<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
															</div>
															<div class="toast-body">
																We received your message!
															</div>
														</div>
													</div>
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



	<script>
		const toastTrigger = document.getElementById('liveToastBtn')
		const toastLiveExample = document.getElementById('liveToast')

		if (toastTrigger) {
			const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
			toastTrigger.addEventListener('click', () => {
				toastBootstrap.show()
			})
		}
 // Get the button that triggers the toast message
 var btn = document.getElementById("liveToastBtn");
  
  // Get the toast container
  var toastContainer = document.getElementById("liveToast");
  
  // Add an event listener to the button
  btn.addEventListener("click", function() {
    // Show the toast message
    var toast = new bootstrap.Toast(toastContainer);
    toast.show();
    
    // Hide the toast message after 5 seconds
    setTimeout(function() {
      toast.hide();
    }, 5000);
  });
		/* // Show the toast message
		 $(document).ready(function(){
		   $('.toast').toast({ autohide: false }).toast('show');
		 });*/
	</script>

</body>

</html>