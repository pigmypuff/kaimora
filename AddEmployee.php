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
      
      $LastName = $_POST['lname'];
      $FirstName = $_POST['fname'];
      $NIC = $_POST['nic'];
      $email = $_POST['email'];
      $DOB = $_POST['dob'];
      $JoinedDate = $_POST['joinedDate'];
      $contact = $_POST['contact'];
      $address = $_POST['address'];
      $image = $_POST['image'];
      
      //SQL QUERY
      $sql = "INSERT INTO employee(LastName, FirstName, NIC, email, DOB, JoinedDate, contact, address, image) VALUES ('$LastName','$FirstName', '$NIC','$email', '$DOB', '$JoinedDate','$contact', '$address','$image');";
       
      
      //Execute the query
      
      $result =   $conn->query($sql);
      
      if($result == TRUE){
       //  echo "New record created successfully";
         header("location: ./sidebar.php?viewEmployee");
         
      }else{
       //  echo "Error:". $sql. "<br>". $conn->error;
       header("location: ./sidebar.php?addEmployee");
      }     
      
      
   }

 ?>





    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
    <header><h2 style="padding-left: 50px;">Add Employee </h2></header>  
    </div>
    
    
    <div class="commonClass" style=" border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px; ">
        
        <form name="myForm" action="./AddEmployee.php" method="POST" onsubmit="return validation()">
    
        <div class="innerDiv">
        <label for="name">First Name</label><br>
            <input type="text" id="fname" name="fname" placeholder="Enter first name">
        </div>
        
        
        <div class="innerDiv">
        <label for="fname">Last Name</label><br>
            <input type="text" id="lname" name="lname" placeholder="Enter last name">
        </div>
        
        <div class="innerDiv">
            <label for="nic">NIC</label><br>
            <input type="text" id="nic" name="nic"  placeholder="Enter NIC number">
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
            <label for="address">Permanent Address</label><br>
           <textarea id="address" name="address" rows="5" cols="20" placeholder="Enter Address"></textarea>
        </div>
        
        <div class="innerDiv">
        <label for="dob">Birth Date</label><br>
            <input type="date" id="dob" name="dob" placeholder="Enter date of birth">
        </div>
        
        <div class="innerDiv">
            <label for="joinedDate">Joined Date</label><br>
                <input type="date" id="joinedDate" name="joinedDate" placeholder="Eneter joined date">
            </div>

            <div class="innerDiv">
            <lable for="designation">Designation : </lable><br>
                            <select name="designation"  id="designation"  size="3" multiple>
                                <option value="admin"  >Admin</option>
                                <option value="cameraman"  >Cameraman</option>
                                <option value="cameraman1"  >Cameraman1</option>
                            </select></div>
            
        <div class="innerDiv">
        <label for="image">Upload a Picture</label><br>
            <input type="file" id="image" name="image">
        </div>
        
        
        <div class="innerDiv">
           <button type="submit" name="submit">Submit</button>
         
        </div>
         
        </form>  
    </div>
</body>

</html>