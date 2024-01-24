<?php
$server_name="127.0.0.1";
$username="root";
$password="";
$dbname="irene_database";

$conn=mysqli_connect($server_name,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}
/*
$sql="CREATE TABLE users(id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,username VARCHAR(40)NOT NULL, password VARCHAR(40)NOT NULL)";
$conn->query($sql);
*/
$username=$_POST['username'];
$password=$_POST['password'];
/*
$sql="INSERT INTO users(username,password)VALUES('$username','$password')";
$conn->query($result);
*/
$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);

if(mysqli_num_rows($result)>0){
    header("Location:dashboard.html");
}else{
    echo "<p>Incorrect username or password</p>";
}

$conn->close();
?>