<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css"> 
</head>

<body>


<?php

    include "config.php";

    if (isset($_REQUEST['Request_id'])) {

        $Request_id = $_REQUEST['Request_id'];

        $sql = "SELECT * FROM requests WHERE Request_id ='$Request_id'";

        $result = $conn->query($sql) or die($conn->error);

        if ($row = $result->fetch_assoc()) {
            $event_type = $row['event_type'];
            $bride_name = $row['bride_name'];
            $groom_name = $row['groom_name'];
            $time = $row['time'];
            $location = $row['location'];
            $email = $row['email'];
            $date = $row['date'];
            $accepted = $row['accepted'];
            $Package_name = $row['Package_name'];
            $payment_status = $row['payment_status'];
        }
    }

    if (isset($_POST['update'])) {

        $bride_name = $_POST['bride_name'];
      /*   $event_type = $_POST['fname'];
        $groom_name = $_POST['nic'];
        $email = $_POST['email'];
        $time = $_POST['dob'];
        $location = $_POST['joinedDate'];
        $email = $_POST['contact'];
        $date = $_POST['address'];
        $accepted = $_POST['image'];
        $Package_name = $_POST['image'];
        $payment_status = $_POST['image'];
*/
        //query;
        $sql = "UPDATE requests SET bride_name = '$bride_name' WHERE Request_id = '$Request_id'";

        $result = $conn->query($sql) or die($conn->error);

        if ($result == TRUE) {
            echo "Record updated successfully";
            header("Location: ./sidebar.php?viewRequest");
            exit();
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
    ?>



    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
    <header><h2 style="padding-left: 50px;">Edit Requests </h2></header>  
    </div>

    <div class="commonClass" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;">
        <form name="myForm" action="" method="POST">
            <div class="innerDiv">
                <label for="bride_name">Bride's Name</label><br>
                <input type="text" id="bride_name" name="bride_name" placeholder="Enter Bride's name" value="<?php echo $bride_name; ?>">
            </div>
            <div class="innerDiv">
                <label for="bride_name">Groom's Name</label><br>
                <input type="text" id="groom_name" name="groom_name" placeholder="Enter Groom's name" value="<?php echo $groom_name; ?>">
            </div>
            <div class="innerDiv">
                <label for="time">NIC</label><br>
                <input type="text" id="time" name="time" placeholder="Enter time" value="<?php echo $time; ?>">
            </div>
            <div class="innerDiv">
                <label for="location">Location</label><br>
                <input type="text" id="location" name="location" placeholder="Enter location" value="<?php echo $location; ?>">
            </div>
            <div class="innerDiv">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter e-mail">
            </div>
            <div class="innerDiv">
                <label for="date">Event Date</label><br>
                <input type="date" id="date" name="date" placeholder="Enter date" value="<?php echo $date; ?>">
            </div>
            <div class="innerDiv">
                <label for="event_type">Event Type</label><br>
                <input type="text" id="event_type" name="event_type" value="<?php echo $event_type; ?>" placeholder="Enter event type">
            </div>
            <div class="innerDiv">
                <label for="package">Package</label><br>
                <input type="text" id="package" name="package" value="<?php echo $Package_name; ?>" placeholder="Enter package ">
            </div>
            <div class="innerDiv">
                <label for="accepted">Status</label><br>
                <input type="text" id="accepted" name="accepted" value="<?php echo $accepted; ?>" placeholder="Enter status ">
            </div>




            <div class="innerDiv">
                <button type="submit" name="update">Update</button>

            </div>

        </form>
    </div>
</body>

</html>
