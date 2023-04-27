<?php
session_start();
include "config.php";



?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


</head>

<body>

    <?php

    if (isset($_POST['login'])) { 
        // sanitizes and stores the user input email and password
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $pass = mysqli_real_escape_string($conn, $_POST['password']);


        if ($email != "" && $pass != "") { // checks if both email and password are provided

            // prepares and executes the SQL query to retrieve the user from the database
            $sql_query = "select * from employee where (email='$email') AND (password='$pass')";



            $result = mysqli_query($conn, $sql_query) or trigger_error("query failed SQL: $sql_query - Error : " . mysqli_error($conn), E_USER_ERROR);

            $count = mysqli_num_rows($result); // gets the number of rows returned by the query


            if ($count == 1) { // if a single user is found, logs them 
                // retrieves the user details and sets them in the sessionin
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $email;
                $_SESSION["login"] = "1";
                // $_SESSION['Id'] = $row['Id'];
                //$_SESSION['name'] = $row['name'];
                $_SESSION['access_level'] = $row['access_level'];

                // redirects the user to the appropriate dashboard based on their access level
            if ($_SESSION['access_level'] == "admin") {
                if ($_SESSION['access_level'] == "admin") {
                    header("Location: sidebar.php");
                } else {
                    header("Location: sidebarEmp.php");
                }
                exit();
            } else {    // if the user is not found, displays an error message
                $error_msg = "Invalid email or password!";
            }
        }
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
                                <img src="logo.jpg" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Kaimora Weddings</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="login">Login</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="registerEmployee.php" style="color: #393f81;">Register here</a></p>

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