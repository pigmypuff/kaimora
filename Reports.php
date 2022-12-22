<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="formstyle.css"> 
</head>

<body>

    <div class="commonClass1" style="background-color:#7A7CA4; 
     color: white;">
    <header><h2 style="padding-left: 50px;">Reports </h2></header>  
    </div>

    <div class="commonClass" style=" border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px; ">
        
        <form name="myForm" action="./Reports.php" method="POST">

        <div class="innerDiv">
        <label for="startDate">Start Date</label><br>
            <input type="date" id="startDate" name="startDate" >
        </div>

        <div class="innerDiv">
        <label for="endDate">End Date</label><br>
            <input type="date" id="endDate" name="endDate" >
        </div>
        <br>


        <table class="table">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Package</th>
                                <th>Advance Amount</th>
                                <th>Full Amount</th>
                                <th>Total</th>
                            </tr>
                            </thead>

        </table>


</body>


</html>