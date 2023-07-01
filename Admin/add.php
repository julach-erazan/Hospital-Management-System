<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

// Insert the user details into the database
$sql = "INSERT INTO regtable (fname, lname, age, street1, street2, city, mobile, email) VALUES 
		('$fname', '$lname', '$age', '$street1', '$street2', '$city', '$mobile', '$email')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
