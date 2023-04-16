<?php
//session_start();
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
  <title>Kaimora Weddings </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="formstyle.css"> 
</head>
<body>
<div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
    <header><h2 style="padding-left: 50px;">Employee Availability </h2></header>  
    </div>
    <div class="commonClass" style=" border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px; ">
 
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    

    <div class="innerDiv">
    <label for="search_date">Search Date:</label>
    <input type="text" id="search_date" name="search_date" placeholder="YYYY-MM-DD" required> 
    <br><br>
        </div>
<div class="innerDiv">
    <input type="submit" value="Search">
</div>
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
    </div>
</body>
</html>