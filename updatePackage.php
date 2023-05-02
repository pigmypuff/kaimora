<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    <title>Update Packages</title>
</head>

<body>

    <?php

    include "config.php";

    // If package name is set
    if (isset($_REQUEST['package_name'])) {

        // Retrieve package information from database
        $package_name = $_REQUEST['package_name'];

        $sql = "SELECT * FROM packages WHERE package_name ='$package_name'";

        $result = $conn->query($sql) or die($conn->error);

        // If package is found
        if ($row = $result->fetch_assoc()) {
            $package_name = $row['package_name'];
            $amount = $row['amount'];
           
        }
    }

    // If update button is clicked
    if (isset($_POST['update'])) {
        // Retrieve updated package information from form
        $package_name = $_POST['package_name'];
        $amount = $_POST['amount'];
    
        
        // Update package information in database
        $sql = "UPDATE packages SET package_name = '$package_name', amount = '$amount' WHERE package_name = '$package_name'";

        $result = $conn->query($sql) or die($conn->error);

        // If update is successful, redirect to package view page
        if ($result == TRUE) {
            echo "Record updated successfully";
            header("Location: ./sidebar.php?ViewPackages");
            exit();
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
    ?>

     <div class="commonClass1" style="background-color:#7A7CA4; color: white;">
        <header>
            <h2 style="padding-left: 50px;">Update Package </h2>
        </header>
    </div>

    <div class="commonClass" style=" border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px; ">
        
        <form name="myForm" action="" method="POST">
    
        <div class="innerDiv">
        <label for="name"> Package Name</label><br>
            <input type="text" id="package_name" name="package_name" placeholder="Enter package name" value="<?php echo $package_name ?>">
        </div>

        <div class="innerDiv">
            <label for="email">Amount</label><br>
            <input type="amount" id="amount" name="amount" value="<?php echo $amount ?>" placeholder="Enter amount">
        </div>

        

        <div class="innerDiv">
           <button type="submit" name="update">Update</button>
         
        </div>

        </form>
    </div>
        

</body>

</html>