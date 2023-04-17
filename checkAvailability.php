<?php
//session_start();
include "config.php";

$result = null;

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve search date
  $search_date = $_POST["search_date"];

  // Run SQL query to select employees available on search date
  $sql = "SELECT email, available_date FROM emp_availability WHERE available_date = '$search_date'";
  $result=$conn->query($sql);

 
}

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
  <header><h2 style="padding-left: 50px;">Employee Availability </h2></header>  
</div>

<div class="commonClass" style=" border-bottom-right-radius: 20px; border-bottom-left-radius:20px; ">
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
</div>

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
          <tr>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['available_date']; ?></td>

          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>

</body>
</html>