<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookLibrary";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the search title from the GET parameter
$search_title = $_GET['search_title'];

// SQL query to search for books with titles matching the search
$sql = "SELECT accession_number, title, authors, edition, publisher FROM Books WHERE title LIKE '%$search_title%'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if any rows were returned by the query
if (mysqli_num_rows($result) > 0) {
    echo "<h2>Search Results:</h2>";
    echo "<table border='1'>
    <tr>
    <th>Accession Number</th>
    <th>Title</th>
    <th>Authors</th>
    <th>Edition</th>
    <th>Publisher</th>
    </tr>";
    
    // Loop through and output the data from each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["accession_number"] . "</td>
        <td>" . $row["title"] . "</td>
        <td>" . $row["authors"] . "</td>
        <td>" . $row["edition"] . "</td>
        <td>" . $row["publisher"] . "</td>
        </tr>";
    } 
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
mysqli_close($conn);
?>
