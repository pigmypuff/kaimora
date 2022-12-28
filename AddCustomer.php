<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    <script src="validation.js"></script>


</head>

<body>


<?php

include "config.php";

   if(isset($_POST['submit'])){
      
      $name = $_POST['name'];
     
      $email = $_POST['email'];
      
      $contact = $_POST['contact'];
     
      //SQL QUERY
      $sql = "INSERT INTO customer(name, email,  contact) VALUES ('$name','$email','$contact');";
       
      
      //Execute the query
      
      $result =   $conn->query($sql);
      
      if($result == TRUE){
       //  echo "New record created successfully";
         header("location: ./sidebar.php?viewCustomer");
         
      }else{
        echo "Error:". $sql. "<br>". $conn->error;
      // header("location: ./sidebar.php?addEmployee");
      }     
      
      
   }

 ?>

    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
        <header>
            <h2 style="padding-left: 50px;">Add Customer </h2>
        </header>
    </div>

    <div class="commonClass" style=" border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px; ">
        
        <form name="myForm" action="./AddCustomer.php" method="POST" onsubmit="return validation()">
    
        <div class="innerDiv">
        <label for="name"> Name</label><br>
            <input type="text" id="name" name="name" placeholder="Enter customer name">
        </div>

        <div class="innerDiv">
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" value="" placeholder="Enter e-mail">
        </div>

        <div class="innerDiv">
            <label for="contact">Contact</label><br>
            <input type="text" id="contact" name="contact" value="" placeholder="Enter contact number">
        </div>

        <div class="innerDiv">
           <button type="submit" name="submit">Submit</button>
         
        </div>

        </form>
    </div>
        

</body>

</html>