<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_movements";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve the last record from the database
$query = "select * from movements order by id desc limit 1";

// Execute the query
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the data
    $row = $result->fetch_assoc();

    // Process the data
    if ($row) {
        // Access the columns using their names
        $column2 = $row['direction'];

        // Display the data
        echo "Last movement: $column2";
    } else {
        echo "no movements";
    }
} else {
    echo "Error executing the query: " . $conn->error;
}

// Close the connection
$conn->close();
?>
