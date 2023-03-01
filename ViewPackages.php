<?php 
    include "config.php";

    $sql="SELECT * FROM packages;";

    $result=$conn->query($sql);

?> 

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css"> 
</head>

<body>
    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
    <header><h2 style="padding-left: 50px;">View Packages </h2></header>  
    </div>

    <table class="table">
                        <thead>
                            <tr>
                               
                                <th>Name</th>
                                <th>Amount</th>
                                
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                        
                                        <td><?php echo $row['package_name']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                       
                                        
                                       
                                        <td>
                                            
                                            <a class="btn btn-info" href="updatePackage.php ?package_name=<?php echo $row['package_name']; ?>"  >Edit</a>&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="deletePackage.php ?package_name=<?php echo $row['package_name']; ?>">Delete</a> 
                                            
                                            
                                        </td>
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
                            

        </table>

</body>
</html>