<?php

session_start();
include "config.php";

// Retrieving session variables
$email = $_SESSION['email'];
$name = $_SESSION['name'];

// Retrieving values from the URL 
$status = $_GET['status'];
$packageName = $_GET['packageName'];
$difference= 0 ;
// echo '<script>let i = "' .$status. '"</script>';

// Fetching the amount from the packages table based on the package name
$sql_package = "SELECT amount FROM packages where package_name='$packageName'";
$result_package = $conn->query($sql_package);
$row_package = $result_package->fetch_assoc();
$amount = $row_package['amount'];

// Calculating the difference between full amount and advance amount
if($status === "advance"){
$difference = $amount*0.1;

}else if($status === "remaining"){
$sql_payment = "SELECT *,full_amount - advance_amount AS difference FROM payments where user_email='$email' and package_name='$packageName'";
$result_payment = $conn->query($sql_payment);
$row_payment = $result_payment->fetch_assoc();
$difference = $row_payment['difference'];
}

//echo $difference;


// Handling form submission
 if (isset($_POST['form_submitted'])) {
  $submit_date = date("Y-m-d H:i:s");
  echo $status;

  // Updating payment details and request status based on the payment type
  if($status === "remaining"){
    $sql = "UPDATE payments SET full_paymentDate='$submit_date' WHERE user_email='$email' and package_name='$packageName'";
    $sql1 = "UPDATE requests SET payment_status='full payment' WHERE user_email='$email' and Package_name='$packageName' ";
  
  }else if($status === "advance"){
    $sql = "INSERT INTO payments(advance_amount,advance_paymentDate,full_amount,user_email,package_name) VALUES ('$difference','$submit_date','$amount','$email','$packageName')";
    $sql1 = "UPDATE requests SET payment_status='advance payment' WHERE user_email='$email' and Package_name='$packageName' ";
  }

   // Executing the queries
    $result =   $conn->query($sql);
    $result2 =   $conn->query($sql1);

    if ($result == TRUE && $result2==TRUE) {

        echo "New record created successfully";
        header("Location: navigationBar.php?requestStatus");
        
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
 
 }





?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Payments</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <script type="text/javascript">
      
        window.onload = function() {
            document.getElementById('submitForm').addEventListener('click', function(event) {

                var data = {
                    service_id: 'service_mm4fp0s',
                    template_id: 'template_bc0rxtq',
                    user_id: 'TsPnV9qqo03Jnn5kJ',
                    template_params: {
                        'to_name': '<?php echo $name?>',
                        'to_email':'imasha50@gmail.com',
                        'message': 'We received your payment of <?php echo $difference?>. Your payment is successfull !',
                    }
                };
                
                fetch('https://api.emailjs.com/api/v1.0/email/send', {
                    method: 'POST',
                    headers:{
                        "Content-type": 'application/json'
                    },
                    body: JSON.stringify(data),
                  
                })
                .then(res=>res.text())
                .then(res=>{
                    console.log(res)

                    setTimeout(() => {
                         document.getElementById('paymentForm').submit()
                        
                    }, 500);
                })
                .catch(error=>{
                    console.log(error)
                })

            });
           
        }
    </script> 

</head>


<body>



<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="navigationBar.php?requestStatus" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Go Back</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    
                  </div>
                  
                </div>

            <!--     <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          
                        </div>
                        <div class="ms-3">
                          <h5>Iphone 11 pro</h5>
                          <p class="small mb-0">256GB, Navy Blue</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        
                        <div style="width: 80px;">
                          <h5 class="mb-0">$900</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

               <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Samsung galaxy Note 10 </h5>
                          <p class="small mb-0">256GB, Navy Blue</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">2</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$900</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Canon EOS M50</h5>
                          <p class="small mb-0">Onyx Black</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$1199</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>  -->

                <div class="card mb-3 mb-lg-0">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        
                        <div class="ms-3">
                          <h5><?php echo $packageName; ?></h5>
                          <p class="small mb-0"> </p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        
                        <div style="width: 90px;">
                          <p> Rs.<?php echo $difference; ?></p>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4" id="paymentForm" name="paymentForm" action="./payment.php?status=<?php echo $status; ?>&packageName=<?php echo $packageName; ?>" method="POST">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6"> 
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>
                     
                        <input name="form_submitted" value="sent" hidden />

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Amount</p>
                      <p class="mb-2">Rs.<?php echo $difference; ?></p>  
                    </div>

                    <!-- <div class="d-flex justify-content-between">
                      <p class="mb-2">Advance Amount</p>
                      <p class="mb-2">Rs.<?php echo $amount*0.1; ?></p>
                    </div> -->

                   <!-- <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">$4818.00</p>
                    </div> -->

                   <div class="d-flex justify-content-end">
                     <button id="submitForm" class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <!-- <span>Rs.<?php echo $amount*0.1; ?></span> -->
                        <span>Pay <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>
                   </div>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- <script>
   document.getElementById("value").innerHTML = i
  </script> -->
</body>


</html>