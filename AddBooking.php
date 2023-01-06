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
        <div class="php-booking"> 
            <?php
        include "config.php";
        if(isset($_POST['submit'])){
 
        $customerId =  $_POST['customerId'];
        $brideName = $_POST['brideName'];
        $groomName = $_POST['groomName'];
        $typeofCeremony = $_POST['typeofCeremony'];
        $brideEmail = $_POST['brideEmail'];
        $groomEmail = $_POST['groomEmail'];
        $telephone =$_POST['telephone'];
        $location = $_POST['location'];
        $preshootDate =$_POST['preshootDate'];
        $weddingDate = $_POST['weddingDate'];
        $package = $_POST['package'];

    
        if($customerId !=""){
            $query = "INSERT INTO bookings(customerId,brideName,groomName,typeofCeremony,brideEmail,groomEmail,telephone,locations,preshootDate,weddingDate,package) VALUES('$customerId','$brideName','$groomName','$typeofCeremony','$brideEmail','$groomEmail','$telephone','$location','$preshootDate','$weddingDate','$package') ";
             $result = mysqli_query($conn,$query);

    if($result){
        echo "successfully booked..!";
    }else{
        echo "sorry.operation failed..!";
    }
    mysqli_close($conn);
        }else{
            echo "Booking Failed.Required fields are Empty..!";
        }
    
}

?>
        </div>


        <form name="bookingForm" action="" method="POST" id="bookingForm">
            <div class="form-left-column">
                <div class="form-item">
                    <label for="customerId">Customer ID</label>
                    <input type="text" name="customerId" id="customerId">
                </div>

                <div class="form-item">
                    <label for="brideName">Bride’s Name</label>
                    <input type="text" name="brideName" id="brideName">
                </div>

                <div class="form-item">
                    <label for="groomName">Groom’s Name</label>
                    <input type="text" name="groomName" id="groomName">
                </div>

                <div class="form-item">
                    <label for="typeofCeremony">Type of Ceremony</label>
                    <input type="text" name="typeofCeremony" id="typeofCeremony">
                </div>

                <div class="form-item">
                    <label for="brideEmail">Bride’s e-mail</label>
                    <input type="text" name="brideEmail" id="brideEmail">
                </div>

                <div class="form-item">
                    <label for="groomEmail">Groom’s e-mail</label>
                    <input type="text" name="groomEmail" id="groomEmail">
                </div>

                <div class="form-item">
                    <label for="telephone">Telephone</label>
                    <input type="text" name="telephone" id="telephone">
                </div>


            </div>

            <div class="form-right-column">
                <div class="form-item">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location">
                </div>

                <div class="form-item">
                    <label for="preshootDate">Preshoot Date</label>
                    <input type="date" name="preshootDate" id="preshootDate">
                </div>

                <div class="form-item">
                    <label for="weddingDate">Wedding Date</label>
                    <input type="date" name="weddingDate" id="weddingDate">
                </div>

                <div class="form-item">
                    <label for="package">Package</label>
                    <input type="text" name="package" id="package">
                </div>

            </div>





        </form>
        <div class="btn-container">
            <button class="add-btn" type="submit" form="bookingForm" value="Submit" name="submit">Add</button>
        </div>



    </div>


</body>

</html>