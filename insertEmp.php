<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "kaimora1");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $LastName = $_POST['lname'];
        $FirstName = $_POST['fname'];
        $NIC = $_POST['nic'];
        $email = $_POST['email'];
        $DOB = $_POST['dob'];
        $JoinedDate = $_POST['joinedDate'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $image = $_POST['image'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO employee(LastName, FirstName, NIC, email, DOB, JoinedDate, contact, address, image) VALUES ('$LastName','$FirstName', '$NIC','$email', '$DOB', '$JoinedDate', '$contact', '$address','$image')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>


