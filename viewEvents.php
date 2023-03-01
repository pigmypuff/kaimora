<?php
//session_start();
include "config.php";

$sql = "SELECT * FROM requests WHERE accepted='1';";

$result = $conn->query($sql);

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
            <h2 style="padding-left: 50px;">Events </h2>
        </header>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Request ID</th>
                <th>Bride Name</th>
                <th>Groom Name</th>
                <th>Time</th>
                <th>Location</th>
                <th>Date</th>
                <th>Event Type</th>
                <th>Package</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['Request_id']; ?></td>
                    <td><?php echo $row['bride_name']; ?></td>
                    <td><?php echo $row['groom_name']; ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['event_type']; ?> </td>
                    <td><?php echo $row['Package_name'] ?></td>
                    </tr>
            <?php

            }

            ?>

        </tbody>


    </table>

</body>

</html>