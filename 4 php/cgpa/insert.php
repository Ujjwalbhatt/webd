<?php
// Database configuration
$servername = "localhost";
$username = "root"; // default username for MySQL
$password = ""; // default password for MySQL is empty
$dbname = "test"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $name = $_POST['name'];
    $cgpa = $_POST['cgpa'];

    // Prepare an insert statement
    $sql = "INSERT INTO student (name, cgpa) VALUES ('$name', '$cgpa')";

  if($conn->query($sql) === TRUE){
    echo "New student record created!";
  }
  else{
    echo "failed!";
  }


// Close connection
$conn->close();


exit();
?>
