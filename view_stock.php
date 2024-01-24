<?php
require 'connect.php';

$sql="SELECT * FROM stock_management_table";
$result=$conn->query($sql);

if($result){
    echo "<div class='my_stock_table'>";
    echo "<table class='stock_table'>";
    echo "<tr>";
    echo "<th>Id</th><th>Stock Name</th><th>Type1</td><th>Type2</td><th>Month</th><th>Week</th><th>Date</th><th>Quantity</th>";
    echo "<tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['stock_name']."</td>";
        echo "<td>".$row['mchele']."</td>";
        echo "<th>".$row['maharage']."</td>";
        echo "<td>".$row['month']."</td>";
        echo "<td>".$row['week']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || User Dashboard</title>
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
    </style>
</body>
</html>