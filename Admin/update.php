<?php

$host = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'users'; 

$connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if (!$connection) {
  die('Database connection failed: ' . mysqli_connect_error());
}

$user_id = $_POST['User_ID'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


$query = "UPDATE regtable SET 
          fname = '$fname',
		  lname = '$lname',
		  age = '$age',
		  street1 = '$street1',
		  street2 = '$street2',
		  city = '$city',
		  mobile = '$mobile',
		  email = '$email'
          WHERE id = '$user_id'";

if (mysqli_query($connection, $query)) {
  header("Location: index.php");
} else {
  echo 'Error updating data: ' . mysqli_error($connection);
}

mysqli_close($connection);
?>