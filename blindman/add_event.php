<?php

// Database credentials (replace with your actual credentials)
$servername = "localhost";
$username   = "your_db_username";
$password   = "your_db_password";
$dbname     = "event_calendar";

// Get data from the form
$event_day      = $_POST['event_day'];
$event_date     = $_POST['event_date'];
$event_time     = $_POST['event_time'];
$event_location = $_POST['event_location'];

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO events (event_day, event_date, event_time, event_location) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $event_day, $event_date, $event_time, $event_location);

// Execute the statement
if ($stmt->execute()) {
    echo "New event added successfully!";
    echo "<br><a href='index.html'>Add another event</a>"; // Link back to the form
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();

?>