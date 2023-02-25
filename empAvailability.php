<?php
session_start();
include "config.php";

$email = $_SESSION['email'];

// Define function to sanitize input data
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve and sanitize employee ID
  $email = sanitize_input($_POST["email"]);

  // Retrieve selected dates from form and sanitize them
  $selected_dates = $_POST["selected_dates"];
  $sanitized_dates = array();
  foreach ($selected_dates as $date) {
    $sanitized_date = sanitize_input($date);
    $sanitized_dates[] = $sanitized_date;
  }

  // Insert selected dates into MySQL database
  $sql = "INSERT INTO emp_availability (email, available_date) VALUES ";
  $date_values = array();
  foreach ($sanitized_dates as $date) {
    $date_values[] = "('$email', '$date')";
  }
  $sql .= implode(", ", $date_values);
  if (mysqli_query($conn, $sql)) {
    echo "Available dates added successfully<br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Kaimora Weddings</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
   
</head>
<body>

  <h1>Add Available Dates</h1>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

   <label for="email">Email:</label>

    <input type="email" id="email" name="email" value="<?php echo $email; ?>" >

    <br><br>

    <label for="selected_dates">Select Dates:</label>
    <input type="text" id="selected_dates" name="selected_dates[]" readonly>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script>
  $('#selected_dates').datepicker({
    multidate: true,
    format: 'yyyy-mm-dd',
    startDate: 'today'
  }).on('changeDate', function(e) {
    var selectedDates = $('#selected_dates').datepicker('getDates');
    var formattedDates = selectedDates.map(function(date) {
      return moment(date).format('YYYY-MM-DD');
    });
    $('#selected_dates').val(formattedDates.join(','));
  });
</script>

    <input type="submit" value="Submit">

  </form>

</body>
</html>

