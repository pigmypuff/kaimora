<DOCKTYPE!>
<?php 
    include "config.php";

    $sql="SELECT * FROM employee;";

    $result=$conn->query($sql);

?>    


<HTML>
        <head>
            <title>
                View Employee
            </title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
              
        </head>

        <body>
        
               
               
                   <h2 style=" text-align: center; background-color: #7A7CA4; height: 50px; margin-top: 5px; margin-bottom: 10px; padding-top: 5px;padding-bottom: 15px; font-weight: bold; color:white">View Employee</h2>
                

                
                <a class="btn btn-primary" style = "float:right; background-color: #7A7CA4" href="./sidebar.php?addEmployee">Add New Employee</a>


                

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>NIC</th>
                                <th>email</th>
                                <th>Date of Birth</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                        <td><?php echo $row['UserID']; ?></td>
                                        <td><?php echo $row['FirstName']; ?></td>
                                        <td><?php echo $row['LastName']; ?></td>
                                        <td><?php echo $row['NIC'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['DOB'] ?></td>
                                        <td><?php echo $row['contact'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td>
                                            
                                              <a class="btn btn-info" href="updateStaff.php ?UserID=<?php echo $row['UserID']; ?>"  >Edit</a>&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="deleteEmployee.php ?UserID=<?php echo $row['UserID']; ?>">Delete</a> 
                                            
                                            
                                        </td>
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
        
                    </table>  
                    

         
        </body>
    </HTML>
    