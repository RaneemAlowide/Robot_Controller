<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_movements";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving the last recorded in the database
$query = "select * from movements order by id desc limit 1";

$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();

    if ($row) {
        $column2 = $row['direction'];

        // Display the data
        echo "Last movement is: $column2";
    } else {
        echo "no movements";
    }
} else {
    echo "Error executing the query: " . $conn->error;
}

$conn->close();
?>
