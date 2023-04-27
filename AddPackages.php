<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    <script src="validation.js"></script>


</head>

<body>


<?php
// Include configuration file
include "config.php";

// Check if form is submitted
   if(isset($_POST['submit'])){
      
    // Get package name and amount from form
      $package_name = $_POST['package_name'];
      $amount = $_POST['amount'];
      
      // SQL QUERY to insert package into database
      $sql = "INSERT INTO packages(package_name, amount) VALUES ('$package_name','$amount');";
       
      
      //Execute the query
      
      $result =   $conn->query($sql);
      
      if($result == TRUE){
        // If query is successful, redirect to viewPackages page
       //  echo "New record created successfully";
         header("location: ./sidebar.php?viewPackages");
         
      }else{
        echo "Error:". $sql. "<br>". $conn->error;
      // header("location: ./sidebar.php?addEmployee");
      }     
      
      
   }

 ?>

    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
        <header>
            <h2 style="padding-left: 50px;">Add Packages </h2>
        </header>
    </div>

    <div class="commonClass" style=" border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px; ">
        <!-- Form Section-->
        <form name="myForm" action="./AddPackages.php" method="POST" onsubmit="return validation()">
    
        <div class="innerDiv">
        <label for="name"> Package Name</label><br>
            <input type="text" id="package_name" name="package_name" placeholder="Enter package name">
        </div>

        <div class="innerDiv">
            <label for="email">Amount</label><br>
            <input type="amount" id="amount" name="amount" value="" placeholder="Enter amount">
        </div>

        

        <div class="innerDiv">
           <button type="submit" name="submit">Submit</button>
         
        </div>

        </form>
         <!-- End of Form Section-->
    </div>
        

</body>

</html>