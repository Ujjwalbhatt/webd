<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed!");
}
$usersd = $_GET['username'];
$password = $_GET['password'];
$sql = "select * from employee where username = '$usersd' and password = '$password'";
$result = $conn->query($sql);
if($result -> num_rows>0){
    echo "login successfull";
}
else{
    echo 'login failed';
}

$conn->close();
?>