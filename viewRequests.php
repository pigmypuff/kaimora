<?php
//session_start();
include "config.php";

$sql = "SELECT * FROM requests;";

$result = $conn->query($sql);




if (isset($_POST['accept'])) {
    $id = $_POST['id'];
    $sql = "UPDATE requests SET accepted = 1 WHERE Request_id = '$id'";
    mysqli_query($conn, $sql);
} elseif (isset($_POST['decline'])) {
    $id = $_POST['id'];
    $sql = "UPDATE requests SET accepted = 2 WHERE Request_id = '$id'";
    mysqli_query($conn, $sql);
}
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
            <h2 style="padding-left: 50px;">Requests </h2>
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
                <th>Email</th>
                <th>Date</th>
                <th>Message</th>
                <th>Submitted Date</th>
                <th>Event Type</th>
                <th>Package</th>
                <th>User email</th>
                <th> Status </th>
                <th>Payment Status</th>
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
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['message'] ?></td>
                    <td><?php echo $row['submittedDate']; ?></td>
                    <td><?php echo $row['event_type']; ?> </td>
                    <td><?php echo $row['Package_name'] ?></td>
                    <td><?php echo $row['user_email'] ?></td>
                    <td>
                        <?php
                        if ($row['accepted'] == 0) {
                            echo '<form action="sidebar.php?viewRequests" method="post">
              <input type="hidden" name="id" value="' . $row['Request_id'] . '">
              <input type="submit" name="accept" value="Accept">
              <input type="submit" name="decline" value="Decline">
            </form>';
                        } else if ($row['accepted'] == 1) {
                            echo 'Accepted';
                        } else {
                            echo 'Declined';
                        }
                        ?>
                    </td>
                    <td><?php echo $row['payment_status'] ?></td>
                    <td>
                        <a class="btn btn-info" href="editRequest.php ?Request_id=<?php echo $row['Request_id']; ?>"  >Edit</a>&nbsp;&nbsp;
                        <a class="btn btn-danger" href="deleteEmployee.php ?Request_id=<?php echo $row['Request_id']; ?>">Delete</a> 
                                            
                                            
                                        </td>


                </tr>
            <?php

            }

            ?>

        </tbody>


    </table>

</body>

</html>