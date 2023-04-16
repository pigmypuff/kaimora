<?php 
    include "config.php";

    $sql="SELECT * FROM payments;";

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
    <header><h2 style="padding-left: 50px;">View Payments </h2></header>  
    </div>

    <table class="table">
                        <thead>
                            <tr>
                            <th>ID</th>
                                <th>Package Name</th>
                                <th>User Email</th>
                                <th>Advance Amount</th>
                                <th>Advance Payment Date</th>
                                <th>Full Amount</th>
                                <th>Full Payment Date</th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                    <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['package_name']; ?></td>
                                        <td><?php echo $row['user_email']; ?></td>
                                        <td><?php echo $row['advance_amount']; ?></td>
                                        <td><?php echo $row['advance_paymentDate']; ?></td>
                                        <td><?php echo $row['full_amount']; ?></td>
                                        <td><?php echo $row['full_paymentDate']; ?></td>
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
                            

        </table>

</body>
</html>