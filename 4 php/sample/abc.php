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
        echo "Connection successful!!";
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

   $sql = "INSERT INTO salary (name,email,salary) VALUES ('$name', '$email', '$salary')";
   if($conn->query($sql) === TRUE){
        echo 'Data sent to server!';
   }
   else{
    echo 'Data failed!!';
   }

   $conn->close();
?>