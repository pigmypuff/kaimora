<?php
session_start();
include "config.php";
$logedInUseremail = $_SESSION['email'];
//echo $logedInUseremail;

if (isset($_POST['submit'])) {
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  $submit_date = date("Y-m-d H:i:s");
 

  $sql = "INSERT INTO reviews (message, user_email,date_created) VALUES ('$message', '$logedInUseremail','$submit_date')";
  if (mysqli_query($conn, $sql)) {
   // echo "Review added successfully";
  } else {
    //echo "Error adding review: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


</head>


<body>


  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">

        <div class="row">
          <div class="col-lg-6 mb-4 p-0">
            <div class="card border-0 shadow-none">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="kaimora1.jpg" class="img-fluid; rounded" width="80%" height="70%" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

            </div>
          </div>


          <div class="col-lg-6 mb-4 p-0 ">


            <div class="card border-0 shadow-none">

              <div class="card-body">
                <form method="POST" id="reviewForm" name="reviewForm" action="./addReview.php">
                  <br><br>
                  <h5 class="card-title">Tell us what you think about us!</h5>
                  <div class="form-group">
                    <textarea name="message" class="form-control" id="message" cols="30" rows="12" placeholder=""></textarea>
                  </div>
                  <br>

                  <input type="submit" name="submit" value="Send" class="btn btn-outline-dark">
                  <div class="submitting"></div>
              </div>

            </div>
          </div>
          </form>


        </div>


      </section>
      <!--Section: Content-->


    </div>
  </main>
  <!--Main layout-->
</body>


</html>