<?php
require 'connect.php';


$stock_name=$_POST['stock_name'];
$mchele=$_POST['mchele'];
$maharage=$_POST['maharage'];
$month=$_POST['month'];
$week=$_POST['week'];
$date=$_POST['date'];
$quantity=$_POST['quantity'];


$sql="INSERT INTO stock_management_table(stock_name,mchele,maharage,month,week,date,quantity)VALUES('$stock_name','$mchele','$maharage','$month','$week','$date','$quantity')";
$result=$conn->query($sql);

echo "<div class='my_stock_table'>";
if($result){
    echo "<p>New Stock Sales Added Successfully</p>";
}else{
    echo "<p>Failed to add new sales</p>";
}
echo "</div>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stock ||Dashboard</title>
</head>
<body>
    <style>
        .my_stock_table p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</body>
</html>