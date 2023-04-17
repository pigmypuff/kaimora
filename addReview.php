<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
//session_start();
include "config.php";
$logedInUseremail = $_SESSION['email'];
//echo $logedInUseremail;

if (isset($_POST['submit'])) {
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  $submit_date = date("Y-m-d H:i:s");


  $sql = "INSERT INTO reviews (message, user_email,date_created) VALUES ('$message', '$logedInUseremail','$submit_date')";
  if (mysqli_query($conn, $sql)) {
    // echo "Review added successfully";
    echo '<script>$(document).ready(function(){toastr.success("Thank you for the review!");});</script>';
  } else {
    //echo "Error adding review: " . mysqli_error($conn);
  }
}

error_reporting(E_ALL & ~E_NOTICE);
?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



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
                <form method="POST" id="reviewForm" name="reviewForm" action="./navigationBar.php?addReview">
                  <br><br>
                  <h5 class="card-title">Tell us what you think about us!</h5>
                  <div class="form-group">
                    <textarea name="message" class="form-control" id="message" cols="30" rows="12" placeholder="" required></textarea>
                  </div>
                  <br>

                  <input type="submit" name="submit" value="Send" class="btn btn-outline-dark" id="liveToastBtn">
                  <div class="submitting"></div>
                  <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-header">

                        <strong class="me-auto"></strong>
                        <small></small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body">
                        Thank you for the review!
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


    </section>
    <!--Section: Content-->



  </main>
  <!--Main layout-->
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