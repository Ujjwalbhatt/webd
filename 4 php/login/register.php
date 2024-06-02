<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed!");
}
$usersd = $_POST['username'];
$password = $_POST['password'];
$sql = "insert into employee (username,password) values ('$usersd','$password')";
if($conn->query($sql)===TRUE){
    echo "Sign up successful!!";
}
else{
    echo 'sign up failed';
}

$conn->close();
?>