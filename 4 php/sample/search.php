<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed!");
}
else{
    echo("Connection Successful!!");
}
$searchValue = $_GET['search'];
$sql = "select * from salary where salary > $searchValue";
$result = $conn->query($sql);
if($result -> num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo $rows['id']. $rows['name'];
    }
}

?>