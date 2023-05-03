<?php
session_start();
include "config.php";
$email = $_SESSION['email'];


$result = null;

// Query to select data from emp_availability and requests tables using a left join
$sql = "SELECT ea.available_date, r.Request_id, r.event_type, r.time, r.location,r.Package_name,r.email FROM emp_availability AS ea LEFT JOIN requests AS r ON ea.assign_to = r.Request_id WHERE ea.email = 'kasun@gmail.com'; ";
$result = $conn->query($sql);


// }

?>

<!DOCTYPE html>
<html>

<head>
  <title>Kaimora Weddings </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div class="commonClass1" style="background-color:#7A7CA4; color: white;">
    <header>
      <h2 style="padding-left: 50px;">Assigned Events</h2>
    </header>
  </div>

  <?php if ($result !== null) : ?>
    <div class="commonClass" style=" border-bottom-right-radius: 20px; border-bottom-left-radius:20px; ">
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Assigned Request</th>
            <th>Package Name</th>
            <th>Event Type</th>
            <th>Time</th>
            <th>Location</th>
            <th>Customer Email</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>

              <td style="vertical-align: middle;"><?php echo $row['available_date']; ?></td>
              <td style="text-align:center; vertical-align: middle;"><?php echo $row['Request_id']; ?></td>
              <td style="vertical-align: middle;"><?php echo $row['Package_name']; ?></td>
              <td style="vertical-align: middle;"><?php echo $row['event_type']; ?></td>
              <td style="vertical-align: middle;"><?php echo $row['time']; ?></td>
              <td style="vertical-align: middle;"><?php echo $row['location']; ?></td>
              <td style="vertical-align: middle;"><?php echo $row['email']; ?></td>

            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>

</body>

</html>