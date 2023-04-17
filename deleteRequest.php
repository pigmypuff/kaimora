<?php
include "config.php";

if(isset($_REQUEST['Request_id'])){
    
    
    $Request_id = $_REQUEST['Request_id'];
    
    //Query
    
    $sql = "Delete FROM requests where Request_id = '$Request_id'";
    
    //Execute
    
    $result = $conn->query($sql);
    
        if($result == TRUE){
           echo "Deleted successfully";
           header("location: sidebar.php?viewRequests");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}



?>