<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
	<link rel="stylesheet" type="text/css" href="style_update.css">
</head>
<body class="Update_main_class_form">
<?php
$host = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'users'; 

$connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if (!$connection) {
  die('Database connection failed: ' . mysqli_connect_error());
}


$user_id = $_GET['user_id'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$age = $_GET['age'];
$street1 = $_GET['street1'];
$street2 = $_GET['street2'];
$city = $_GET['city'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];


mysqli_close($connection);
?>

    <div class="Update_form_section">
        <form action="update.php" method="POST">
            <div class="container">
			<h2>Update Patient Details</h2>
                    <table class="add_table">
							<tr>
								<td class="td_label"><label for="name">User Id</label></td>
								<td class="td_input" colspan="2"><input name="User_ID" type="text" placeholder="User Id" value="<?php echo $user_id;?>"/></td>
							</tr>
							<tr>
								<td class="td_label"><label for="name">Full Name</label></td>
								<td class="name_td"><input type="text" name="fname"  value="<?php echo $fname;?>" placeholder="First Name" required></td>
								<td class="name_td"><input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Last Name" required></td>
							</tr>
							<tr>
								<td class="td_label"><label for="age">Age</label></td>
								<td class="td_input" colspan="2"><input type="number" name="age" min="0" max="150" value="<?php echo $age;?>" placeholder="Age"></td>
							</tr>

							<tr>
								<td rowspan="3" class="td_address"><label for="address">Address</label></td>
								<td class="td_input" colspan="2"><input type="text" id="street1" name="street1" value="<?php echo $street1;?>" placeholder="Street 1"></td>
							</tr>

							<tr>
								<td class="td_input" colspan="2"><input type="text" name="street2" value="<?php echo $street2;?>" placeholder="Street 2"></td>
							</tr>
							<tr>
								<td class="td_input" colspan="2"><input type="text" name="city" value="<?php echo $city;?>" placeholder="City"></td>
							</tr>
							<tr>
								<td class="td_label"><label for="phone">Phone Number</label></td>
								<td class="td_input" colspan="2"><input type="tel" name="mobile" pattern="[0-9]{10}" value="<?php echo $mobile;?>" placeholder="Mobile" required></td>
							</tr>
							<tr>
								<td class="td_label"><label for="email">Email</label></td>
								<td class="td_input" colspan="2"><input type="email" name="email" value="<?php echo $email;?>" placeholder="Email" required></td>
							</tr>
							<tr class="btn">
								<td class="td_update" colspan="3" >
									<button id="btn_update" type="submit"></button>
									<button id="btn_cancel" type="submit"></button>
								</td>
							</tr>
					</table>
            </div>
        </form>
    </div>

</body>
</html>