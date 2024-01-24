<?php
require 'connect.php';

$id=$_POST['id'];
$stock_name=$_POST['stock_name'];
$mchele=$_POST['mchele'];
$maharage=$_POST['maharage'];
$month=$_POST['month'];
$week=$_POST['week'];
$date=$_POST['date'];
$quantity=$_POST['quantity'];

$sql="UPDATE stock_management_table SET id='$id', stock_name='$stock_name' ,mchele='$mchele', maharage='$maharage',month='$month',week='$week', date='$date', quantity='$quantity' WHERE id='$id'";
$result=$conn->query($sql);

if($result){
    echo "<p>Stock updated successfully</p>";
}else{
    echo "<p>Failed to update a stock</p>";
}

$conn->close();
?>