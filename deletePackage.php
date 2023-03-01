<?php
include "config.php";

if(isset($_REQUEST['package_name'])){
    
    
    $package_name = $_REQUEST['package_name'];
    
    //Query
    
    $sql = "Delete FROM packages where package_name = '$package_name'";
    
    //Execute
    
    $result = $conn->query($sql);
    
        if($result == TRUE){
           echo "Deleted successfully";
           header("location: sidebar.php?viewPackages");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}



?>