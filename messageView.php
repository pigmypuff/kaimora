<!DOCTYPE html>

<?php 
    include "config.php";

    $sql="SELECT * FROM contact;";

    $result=$conn->query($sql);

?>  

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css"> 
</head>

<body>
    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
    <header><h2 style="padding-left: 50px;">Messages </h2></header>  
    </div>

    <table class="table">
                        <thead>
                            <tr>
                                <th>Message ID</th>
                                <th>Name</th>
                                <th>e-mail</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            


                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                        <td><?php echo $row['Messageid']; ?></td>
                                        <td><?php echo $row['Name']; ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['message'] ?></td>
                                        
                                       
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
        

        </table>

</body>
</html>