<?php
$servername = "localhost"; // Change if you're not running MySQL on the same host
$username = "root"; // Provide your MySQL username
$password = ""; // Provide your MySQL password
$dbname = "book";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Collect the inputs from POST
$accession_number = $_POST['accession_number'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

// Insert data into the database
$sql = "INSERT INTO Books (accession_number, title, authors, edition, publisher) VALUES ('$accession_number', '$title', '$authors', '$edition', '$publisher')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
