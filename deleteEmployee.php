<?php
include "config.php";

if(isset($_REQUEST['UserID'])){
    
    
    $user_id = $_REQUEST['UserID'];
    
    //Query
    
    $sql = "Delete FROM employee where UserID = '$user_id'";
    
    //Execute
    
    $result = $conn->query($sql);
    
        if($result == TRUE){
           echo "Deleted successfully";
           header("location: sidebar.php?viewEmployee");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}



?>