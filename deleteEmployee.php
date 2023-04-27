<?php
include "config.php";

if(isset($_REQUEST['UserID'])){ // checks if the 'UserID' parameter is set in the request

    $user_id = $_REQUEST['UserID']; // assigns the value of 'UserID' to the variable $user_id
    
    //Query
    // defines a SQL query to delete the employee record from the 'employee' table where the 'UserID' matches the provided user_id
    $sql = "Delete FROM employee where UserID = '$user_id'";
    
    //Execute
    // executes the query using the connection object $conn and stores the result in the $result variable
    $result = $conn->query($sql);
    
        if($result == TRUE){
           echo "Deleted successfully";
           header("location: sidebar.php?viewEmployee");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}
