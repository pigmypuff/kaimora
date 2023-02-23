<?php
// connect to database
session_start();
include "config.php";

$logedInUseremail = $_SESSION['email'];
echo $logedInUseremail;

if (isset($_POST['submit'])) {
    // retrieve form data
    $bname = $_POST['bname'];
    $gname = $_POST['gname'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $submit_date = date("Y-m-d H:i:s");
    $event_type = $_POST['event_type'];
    $Package_name = $_POST['Package_name'];


    // insert data into database
    $sql = "INSERT INTO requests (bride_name, groom_name, time, location, email, date, message, submittedDate, event_type, user_email,Package_name)
            VALUES ('$bname', '$gname', '$time', '$location', '$email', '$date', '$message', '$submit_date', '$event_type','$logedInUseremail','$Package_name')";
    //mysqli_query($conn, $sql);

    // redirect to success page


    $result =   $conn->query($sql);

    if ($result == TRUE) {
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


</head>


<body>


    <main class="my-5">
        <div class="container text-left">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row">
                    <div class="col-lg-6 mb-4 p-0">
                        <div class="card border-0 shadow-none">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="request.jpg" class="img-fluid; rounded" width="80%" height="70%" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6 mb-4 p-0 pt-md">

                        <form method="POST" id="requestForm" name="requestForm" action="./requestForm.php">
                            <br><br>



                            <div class="btn-group p-md" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="event_type" id="btnradio1" value="Wedding" autocomplete="off" checked>
                                <label class="btn btn-outline-dark" for="btnradio1">Wedding</label>

                                <input type="radio" class="btn-check" name="event_type" id="btnradio2" value="Engagement" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btnradio2">Engagement</label>

                                <input type="radio" class="btn-check" name="event_type" id="btnradio3" value="Casual Shoot" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btnradio3">Casual Shoot</label>
                            </div>

                            <div>
                                <div class="innerDiv col pt-md">
                                    <label for="bname">Bride's Name</label><br>
                                    <input type="text" id="bname" name="bname" placeholder="">
                                </div>


                                <div class="innerDiv col">
                                    <label for="gname">Groom's Name</label><br>
                                    <input type="text" id="gname" name="gname" placeholder="">
                                </div>
                            </div>
                            <div class="innerDiv col">
                                <label for="time">Time</label><br>
                                <input type="text" id="time" name="time" placeholder="">
                            </div>


                            <div class="innerDiv col">
                                <label for="location">Location</label><br>
                                <input type="text" id="location" name="location" placeholder="">
                            </div>
                            <div>

                                <div class="innerDiv col">
                                    <label for="email">Email</label><br>
                                    <input type="email" id="email" name="email" value="" placeholder="">
                                </div>

                                <div class="innerDiv col">
                                    <label for="date">Date</label><br>
                                    <input type="date" id="date" name="date" placeholder="">
                                </div>
                            </div>
                            <br>


                            <div class="innerDiv col">
                                <label for="package">Selected Package</label><br>

                            </div>


                            <select name="Package_name" id="package">
                                <optgroup label="Wedding Packages">
                                    <option value="Wedding Package 01">Wedding Package 01</option>
                                    <option value="Wedding Package 02">Wedding Package 02</option>
                                    <option value="Wedding Package 03">Wedding Package 03</option>
                                </optgroup>
                                <optgroup label="Homecomming Packages">
                                    <option value="Homecomming Package 01">Homecomming Package 01</option>
                                    <option value="Homecomming Package 02">Homecomming Package 02</option>
                                </optgroup>
                                <optgroup label="All-in-one Packages">
                                    <option value="All in one Package 01">All in one Package 01</option>
                                    <option value="All in one Package 02">All in one Package 02</option>
                                </optgroup>
                                <optgroup label="Engagement Packages">
                                    <option value="Engagement Package 01">Engagement Package 01</option>
                                    <option value="Engagement Package 02">Engagement Package 02</option>
                                </optgroup>
                                <optgroup label="Preshoot Packages">
                                    <option value="Preshoot Package 01">Preshoot Package 01</option>
                                    <option value="Preshoot Package 02">Preshoot Package 02</option>
                                </optgroup>
                            </select>

                            <br>
                            <br>
                            <div class="row">
                                <div class="col">

                                </div>
                                <div class="col-5">
                                    <div class="innerDiv align-center">
                                        <label for="message">Message</label><br>
                                        <textarea name="message" class="form-control" id="message" cols="2" rows="5" placeholder=""></textarea>
                                    </div>
                                    <br>
                                </div>
                                <div class="col">

                                </div>
                            </div>




                            <input type="submit" name="submit" value="Send" class="btn btn-outline-dark">
                            <div class="submitting"></div>


                        </form>




                    </div>


            </section>
            <!--Section: Content-->


        </div>
    </main>
    <!--Main layout-->
</body>


</html>