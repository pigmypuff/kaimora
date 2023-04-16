<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
//session_start();
include "config.php";
// if (isset($_SESSION['name'])) {
$name = $_SESSION['name'];
$email = $_SESSION['email'];
// }
//echo $name;
//echo $email;
$sql = "SELECT * FROM requests where user_email='$email'";
$result = $conn->query($sql);


?>


<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie= edge" />


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />


  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" /> -->

</head>


<body>




  <main class="my-5">
    <br>
    <br>
    <br>
    <br>

    <div class="container">
      <!--Section: Content-->
      <section class="text-center">

        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="card card border-0 shadow-none">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="kaimora1.jpg" class="img-fluid; rounded" width="78%" height="50%" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                <br>

              </div>

            </div>
          </div>



          <div class="col-lg-6 mb-4">
            <div class="card ">


              <br>
              <br>
              <br>
              <br>

              <div class="card-body">
                <h5 class="card-title">
                  We received your request!<br>
                  Wait for a response. .
                </h5>

                <table class="table">
                  <thead>
                    <tr>
                      <th>Requestor Name</th>
                      <th>Requested Date</th>
                      <th>Response</th>
                      <th>Payment Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                      <tr>

                        <td><?php echo $name; ?></td>
                        <td><?php echo $row['submittedDate']; ?></td>
                        <td><?php
                            if ($row['accepted'] == 0) {
                              echo "Pending";
                            } elseif ($row['accepted'] == 1) {
                              echo "Accepted";
                            } else {
                              echo "Declined";
                            }
                            ?>
                        </td>

                        <td>
                          <?php
                          if ($row['accepted'] == 0) {
                          ?>

                            <button type="button" class="btn btn-light" disabled>Pay Advance Amount</button>
                          <?php
                          } ?>
                          <?php if ($row['accepted'] == 1 && $row['payment_status'] == "no payments") {
                          ?>

                            <button type="button" class="btn btn-light" onclick="location.href='payment.php?status=advance&packageName=<?php echo $row['Package_name']; ?>'">Pay Advance Amount</button>

                          <?php
                          } ?>
                          <?php if ($row['accepted'] == 1 && $row['payment_status'] == "advance payment") {
                          ?>
                            <button type="button" class="btn btn-light" onclick="location.href='payment.php?status=remaining&packageName=<?php echo $row['Package_name']; ?>'">Pay Remaining Amount</button>


                          <?php
                          }
                          ?>
                          <?php if ($row['accepted'] == 1 && $row['payment_status'] == "full payment") {
                          ?>
                            <button type="button" class="btn btn-light" disabled>Completed</button>


                          <?php
                          }
                          ?>
                        </td>
                      </tr>
                    <?php

                    }

                    ?>
                  </tbody>


                </table>



              </div>
              <br>
              <br>
              <br>
              <br>

            </div>
          </div>
        </div>


      </section>
      <!--Section: Content-->


    </div>


  </main>

  <!--Main layout-->
</body>



</html>