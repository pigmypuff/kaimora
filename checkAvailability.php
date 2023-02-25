<?php
session_start();
include "config.php";

// Define function to sanitize input data
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve and sanitize search date
  $search_date = sanitize_input($_POST["search_date"]);

  // Run SQL query to select employees available on search date
  $sql = "SELECT email FROM emp_availability WHERE available_date = '$search_date'";
  $result = mysqli_query($conn, $sql);

  // Display results
  if (mysqli_num_rows($result) > 0) {
    echo "<h2>Available Employees on $search_date</h2>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row["email"] . "<br>";
    }
  } else {
    echo "<h2>No employees available on $search_date</h2>";
  }
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Kaimora Weddings - Admin Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

  <h1>Admin Page</h1>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <label for="search_date">Search Date:</label>
    <input type="text" id="search_date" name="search_date" placeholder="YYYY-MM-DD" required> 
    <br><br>

    <input type="submit" value="Search">
    <!-- Display available employees -->
<?php if(isset($result) && mysqli_num_rows($result) > 0): ?>
  <h2>Available Employees on <?php echo $search_date; ?></h2>
  <ul>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <li><?php echo $row["email"]; ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

  </form>

</body>
</html>