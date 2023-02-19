<?php
//session_start();
include "config.php";

$sql = "SELECT * FROM reviews;";

$result = $conn->query($sql);

/*$logedInUseremail = $_SESSION['email'];
echo $logedInUseremail;*/



?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
        <header>
            <h2 style="padding-left: 50px;">Reviews </h2>
        </header>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Customer email</th>
                <th>Review ID</th>
                <th>Review Date</th>
                <th>Description</th>
            </tr>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['review_id']; ?></td>
                    <td><?php echo $row['date_created']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                </tr>
            <?php

            }

            ?>
        </tbody>
        </thead>


    </table>

</body>

</html>