<?php
require 'connect.php';

$month=$_GET['month'];

$sql="SELECT * FROM stock_management_table WHERE month='$month'";
$result=$conn->query($sql);

if(mysqli_num_rows($result)>0){
    echo "<div class='my_stock_table'>";
    echo "<table class='stock_table'>";
    echo "<tr>";
    echo "<th>Id</th><th>Stock Name</th><th>Mchele</th><th>Maharage</th><th>Month</th><th>Week</th><th>Date</th><th>Quantity</th>";
    echo "<tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['stock_name']."</td>";
        echo "<td>".$row['mchele']."</td>";
        echo "<td>".$row['maharage']."</td>";
        echo "<td>".$row['month']."</td>";
        echo "<td>".$row['week']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}else{
    echo "<p>No stock available on this month</p>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WFilter By Month</title>
</head>
<body>
    <style>
        .stock_table{
            padding:16px;
        }
        .stock_table th{
            inline-size:300px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border:1px solid black;
            padding:20px;
        }
        .stock_table td{
            text-align:center;
            inline-size:300px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border:1px solid black;
            padding:20px;
        }
        .my_stock_table{
            margin-inline-start:5%;
            inline-size:100%;
            padding:10px;
            background:#ddd;
        }
        p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size:20px;
        }
    </style>
</body>
</html>