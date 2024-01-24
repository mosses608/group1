<?php
$server_name="127.0.0.1";
$username="root";
$password="";
$dbname="irene_db";

$conn=mysqli_connect($server_name,$username,$password);

if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}

$sql="CREATE DATABASE IF NOT EXISTS irene_db";
$conn->query($sql);

$conn->select_db($dbname);

$sql="CREATE TABLE IF NOT EXISTS stock_management_table(id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,stock_name VARCHAR(40)NOT NULL,mchele VARCHAR(20)NOT NULL,maharage VARCHAR(30)NOT NULL, month VARCHAR(20)NOT NULL,week VARCHAR(20)NOT NULL,date VARCHAR(20)NOT NULL,quantity VARCHAR(20)NOT NULL)";
$conn->query($sql);


?>