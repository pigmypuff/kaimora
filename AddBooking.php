<?php
require "config.php";
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    <link rel="stylesheet" type="text/css" href="addBooking.css">
</head>

<body>

    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
        <header>
            <h2 style="padding-left: 50px;">Add Booking </h2>
        </header>
    </div>

    <div class="commonClass" style=" border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px; ">
        <form name="myForm" action="./AddBooking.php" method="POST" id="bookingForm">
            <div class="form-left-column">
                <div class="form-item">
                    <label for="customerID">Customer ID</label>
                    <input type="text" id="customerID">
                </div>

                <div class="form-item">
                    <label for="brideName">Bride’s Name</label>
                    <input type="text" id="brideName">
                </div>

                <div class="form-item">
                    <label for="groomName">Groom’s Name</label>
                    <input type="text" id="groomName">
                </div>

                <div class="form-item">
                    <label for="typeofCeremony">Type of Ceremony</label>
                    <input type="text" id="typeofCeremony">
                </div>

                <div class="form-item">
                    <label for="brideEmail">Bride’s e-mail</label>
                    <input type="text" id="brideEmail">
                </div>

                <div class="form-item">
                    <label for="groomEmail">Groom’s e-mail</label>
                    <input type="text" id="groomEmail">
                </div>

                <div class="form-item">
                    <label for="telephone">Telephone</label>
                    <input type="text" id="telephone">
                </div>


            </div>

            <div class="form-right-column">
                <div class="form-item">
                    <label for="location">Location</label>
                    <input type="text" id="location">
                </div>

                <div class="form-item">
                    <label for="preshootDate">Preshoot Date</label>
                    <input type="date" id="preshootDate">
                </div>

                <div class="form-item">
                    <label for="weddingDate">Wedding Date</label>
                    <input type="date" id="weddingDate">
                </div>

                <div class="form-item">
                    <label for="package">Package</label>
                    <input type="text" id="package">
                </div>

            </div>





        </form>
        <div class="btn-container">
            <button class="add-btn" type="submit" form="bookingForm" value="Submit">Add</button>
        </div>



    </div>


</body>

</html>