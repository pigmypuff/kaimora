<?php
//session_start();
include "config.php";

$date = $_GET['date'];
$requestId = $_GET['requestId'];
// echo $date;
// echo $requestId;

$result = null;

// Check if the assign button was clicked
if (isset($_POST['assign'])) {
  // Get the row ID from the form data
  $email = $_POST['id'];

  // Update the database using PDO or mysqli
  $sqlUpdate = "UPDATE emp_availability SET assign_to='$requestId' WHERE email='$email' and available_date='$date' ";
  $result2 =   $conn->query($sqlUpdate);

  if ($result2 == TRUE) {
    echo "<script>alert('Assigned successfully!');</script>";

    // echo "Assigned successfully";

  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

// Check if form has been submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Retrieve search date
// $search_date = $_POST["search_date"];

// Run SQL query to select employees available on search date
$sql = "SELECT emp_availability.email, emp_availability.available_date, employee.role FROM emp_availability JOIN employee ON emp_availability.email = employee.email WHERE emp_availability.available_date = '$date' AND emp_availability.assign_to IS NULL ; ";
// $sql = "SELECT email, available_date FROM emp_availability WHERE available_date = '$date'";
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
      <h2 style="padding-left: 50px;">Employee Availability </h2>
    </header>
  </div>

  <!-- <div class="commonClass" style=" border-bottom-right-radius: 20px; border-bottom-left-radius:20px; ">
  <form method="post" action="./sidebar.php?checkAvailability">
    <div class="innerDiv">
      <label for="search_date">Search Date:</label>
      <input type="text" id="search_date" name="search_date" placeholder="YYYY-MM-DD" required> 
      <br><br>
    </div>
    <div class="innerDiv">
      <input type="submit" value="Search">
    </div>
  </form>
</div> -->

  <?php if ($result !== null) : ?>
    <div class="commonClass" style=" border-bottom-right-radius: 20px; border-bottom-left-radius:20px; ">
      <table class="table">
        <thead>
          <tr>
            <th>Email</th>
            <th>Available Date</th>
            <th>Role</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()) : ?>
            <!-- Start loop for fetching data from database -->
            <tr>
              <td style="vertical-align: middle;"><?php echo $row['email']; ?></td>
              <td style="vertical-align: middle;"><?php echo $row['available_date']; ?></td>
              <td style="vertical-align: middle;"><?php echo $row['role']; ?></td>
              <td>
                <form method="POST">
                  <!-- Hidden input field to send email ID to server -->
                  <input type="hidden" name="id" value="<?= $row['email'] ?>">
                  <!-- Submit button to assign the selected user -->
                  <button class="btn btn-light" style="width:max-content; margin-top:15px;" type="submit" name="assign">Assign</button>
                </form>
              </td>
            </tr>
             <!-- End loop for fetching data from database -->
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>

</body>

</html>