<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "test";

$conn = new mysqli($servername, $username, $password,$dbname);
if($conn->connect_error){
    die("connection failed!!");
}
$search_cgpa = $_GET['search_cgpa'];
$sql = "SELECT * FROM student WHERE cgpa > $search_cgpa";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<h2>Search Results:</h2>";
    echo "<ul>";
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<li>Name: " . $row["name"] . ", CGPA: " . $row["cgpa"] . "</li>";
    }
    echo "</ul>";
} 
 else {
echo "No result found for cgpa greater than " .$search_cgpa;
}
$conn->close();
?>