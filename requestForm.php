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
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-dark" for="btnradio1">Wedding</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btnradio2">Engagement</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btnradio3">Casual Shoot</label>
                            </div>









                            <div>
                                <div class="innerDiv col pt-md">
                                    <label for="name">Bride's Name</label><br>
                                    <input type="text" id="bname" name="bname" placeholder="">
                                </div>


                                <div class="innerDiv col">
                                    <label for="fname">Groom's Name</label><br>
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