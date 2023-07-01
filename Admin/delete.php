<?php
// delete.php

// Retrieve the user ID from the form
$user_id = $_POST['user_id'];

// Connect to your database (modify the parameters as needed)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Construct the SQL query to delete the data
$sql = "DELETE FROM regtable WHERE id = $user_id";

// Execute the query
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
  echo "Error deleting data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>