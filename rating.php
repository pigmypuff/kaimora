<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css">

    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
</head>

<body>

<div class="container">
  <span id="rateMe4"  class="feedback"></span>
</div>

<!-- rating.js file -->
<script src="js/addons/rating.js"></script>

// Rating Initialization
$(document).ready(function() {
  $('#rateMe4').mdbRate();
});
</body>