<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


</head>

<body>

    <?php

    include "config.php";

    if (isset($_POST['register'])) {

        $FName = $_POST['fname'];
        $LName = $_POST['lname'];
        $email = $_POST['email'];

        $password = $_POST['password'];

        $contact = $_POST['contact'];
       
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $joinedDate = $_POST['joinedDate'];


        //SQL QUERY
        $sql = "INSERT INTO employee(FirstName, LastNAme, email, password,  contact,NIC,address,DOB,JoinedDate) VALUES 
        ('$FName','$FName','$email', '$password', '$contact','$nic','$address','$dob','$joinedDate');";


        //Execute the query

        $result =   $conn->query($sql);

        if ($result == TRUE) {
            //  echo "New record created successfully";
            header("location: sidebarEmp.php?");
        } else {
            //  echo "Error:". $sql. "<br>". $conn->error;
            header("location: registerEmployee.php");
        }
    }

    ?>






    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="login.jpg" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Kaimora Weddings</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign Up</h5>

                                        <div class="form-outline mb-4; p-xs">
                                            <input type="name" id="form2Example17" class="form-control form-control-lg" name="fname" />
                                            <label class="form-label" for="form2Example17">First Name</label>
                                        </div>
                                        <div class="form-outline mb-4; p-xs">
                                            <input type="name" id="form2Example17" class="form-control form-control-lg" name="lname" />
                                            <label class="form-label" for="form2Example17">Last Name</label>
                                        </div>

                                        <div class="form-outline mb-4; p-xs">
                                            <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4; p-xs">
                                            <input type="contact" id="form2Example17" class="form-control form-control-lg" name="contact" />
                                            <label class="form-label" for="form2Example17">Contact Number</label>
                                        </div>
                                        <div class="form-outline mb-4; p-xs">
                                            <input type="contact" id="form2Example17" class="form-control form-control-lg" name="nic" />
                                            <label class="form-label" for="form2Example17">NIC Number</label>
                                        </div>
                                        <div class="form-outline mb-4; p-xs">

                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address"></textarea>
                                            <label for="exampleFormControlTextarea1">Address</label>

                                        </div>
                                        <br>

                                        <div class="form-outline mb-4; p-xs">

                                            <input type="date" id="dob" name="dob" placeholder="Enter date of birth"><br>
                                            <label for="dob">Birth Date</label><br>
                                        </div><br>

                                        <div class="form-outline mb-4; p-xs">

                                            <input type="date" id="joinedDate" name="joinedDate" placeholder="Eneter joined date"><br>
                                            <label for="joinedDate">Joined Date</label><br>
                                        </div>
                                        <br>
                                        <div class="form-outline mb-4; p-xs">
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="form-outline mb-4; p-xs">
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="" />
                                            <label class="form-label" for="form2Example27">Re-enter Your Password</label>
                                        </div>

                                        <div class="pt-1 mb-4; p-xs">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="register">Register</button>
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