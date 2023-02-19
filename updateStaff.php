<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    <title>Update Employee</title>
</head>

<body>

    <?php

    include "config.php";

    if (isset($_REQUEST['UserID'])) {

        $UserID = $_REQUEST['UserID'];

        $sql = "SELECT * FROM employee WHERE UserID ='$UserID'";

        $result = $conn->query($sql) or die($conn->error);

        if ($row = $result->fetch_assoc()) {
            $LastName = $row['LastName'];
            $FirstName = $row['FirstName'];
            $NIC = $row['NIC'];
            $email = $row['email'];
            $DOB = $row['DOB'];
            $JoinedDate = $row['JoinedDate'];
            $contact = $row['contact'];
            $address = $row['address'];
            $image = $row['image'];
        }
    }

    if (isset($_POST['update'])) {

        $LastName = $_POST['lname'];
        $FirstName = $_POST['fname'];
        $NIC = $_POST['nic'];
        $email = $_POST['email'];
        $DOB = $_POST['dob'];
        $JoinedDate = $_POST['joinedDate'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $image = $_POST['image'];

        //query;
        $sql = "UPDATE employee SET FirstName = '$FirstName', LastName = '$LastName', NIC = '$NIC', email = '$email', DOB = '$DOB', JoinedDate = '$JoinedDate', contact = '$contact', address = '$address', image = '$image' WHERE UserID = '$UserID'";

        $result = $conn->query($sql) or die($conn->error);

        if ($result == TRUE) {
            echo "Record updated successfully";
            header("Location: ./sidebar.php?viewEmployee");
            exit();
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <div class="commonClass1" style="background-color:#7A7CA4; color: white;">
        <header>
            <h2 style="padding-left: 50px;">Update Employee </h2>
        </header>
    </div>

    <div class="commonClass" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;">
        <form name="myForm" action="" method="POST">
            <div class="innerDiv">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="fname" placeholder="Enter first name" value="<?php echo $FirstName; ?>">
            </div>

            <div class="innerDiv">
                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lname" placeholder="Enter last name" value="<?php echo $LastName; ?>">
            </div>

            <div class="innerDiv">
                <label for="nic">NIC</label><br>
                <input type="text" id="nic" name="nic" placeholder="Enter NIC number" value="<?php echo $NIC; ?>">
            </div>


            <div class="innerDiv">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter e-mail">
            </div>

            <div class="innerDiv">
                <label for="contact">Contact</label><br>
                <input type="text" id="contact" name="contact" value="<?php echo $contact; ?>" placeholder="Enter contact number">
            </div>

            <div class="innerDiv">
                <label for="address">Permanent Address</label><br>
                <textarea id="address" name="address" rows="5" cols="20" placeholder="Enter Address"><?php echo $address; ?></textarea>
            </div>

            <div class="innerDiv">
                <label for="dob">Birth Date</label><br>
                <input type="date" id="dob" name="dob" placeholder="Enter date of birth" value="<?php echo $DOB; ?>">
            </div>

            <div class="innerDiv">
                <label for="joinedDate">Joined Date</label><br>
                <input type="date" id="joinedDate" name="joinedDate" placeholder="Eneter joined date" value="<?php echo $JoinedDate; ?>">
            </div>



            <div class="innerDiv">
                <label for="image">Current Image</label><br>
                <?php if (!empty($image)) { ?>
                    <img src="<?php echo $image; ?>" width="100"><br>
                <?php } else { ?>
                    <span>No image found.</span><br>
                <?php } ?>
                <label for="image">Upload a New Image</label><br>
                <input type="file" id="image" name="image">
            </div>

            <div class="innerDiv">
                <button type="submit" name="update">Update</button>

            </div>

        </form>
    </div>
</body>

</html>