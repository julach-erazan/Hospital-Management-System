<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style_register.css">
</head>
<body>
  <?php
  $host = 'localhost'; 
  $dbUsername = 'root'; 
  $dbPassword = ''; 
  $dbName = 'users'; 
  
  $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
  
  if (!$connection) {
  die('Database connection failed: ' . mysqli_connect_error());
  }

  $query = "SELECT * FROM regtable"; 
  $result = mysqli_query($connection, $query);
  ?>

  <div class="container">
  <h2>Patient Details</h2>
    <form action="add.php" method="POST">
      <table class="add_table">
   
        <tr>
          <td class="td_label"><label for="name">Full Name</label></td>
          <td class="name_td"><input type="text" name="fname"  placeholder="First Name" required></td>
          <td class="name_td"><input type="text" name="lname" placeholder="Last Name" required></td>
        </tr>
        <tr>
          <td class="td_label"><label for="age">Age</label></td>
          <td class="td_input" colspan="2"><input type="number" name="age" min="0" max="150" placeholder="Age"></td>
        </tr>

        <tr>
          <td rowspan="3" class="td_address"><label for="address">Address</label></td>
          <td class="td_input" colspan="2"><input type="text" id="street1" name="street1" placeholder="Street 1"></td>
        </tr>

        <tr>
          <td class="td_input" colspan="2"><input type="text" name="street2" placeholder="Street 2"></td>
        </tr>
        <tr>
          <td class="td_input" colspan="2"><input type="text" name="city" placeholder="City"></td>
        </tr>
        <tr>
          <td class="td_label"><label for="phone">Phone Number</label></td>
          <td class="td_input" colspan="2"><input type="tel" name="mobile" pattern="[0-9]{10}" placeholder="Mobile" required></td>
        </tr>
        <tr>
          <td class="td_label"><label for="email">Email</label></td>
          <td class="td_input" colspan="2"><input type="email" name="email" placeholder="Email" required></td>
        </tr>
        <tr>
          <td class="td_add_btn"colspan="3"><input type="submit" value="ADD"></td>
        </tr>
      </table>
    </form>

    <table class="view_table">
      <tr>
        <th>Patient ID</th>
        <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Street 1</th>
      <th>Street 2</th>
      <th>City</th>
      <th>Mobile</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
              <tr id="row-<?php echo $row['id']; ?>">
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['street1']; ?></td>
                  <td><?php echo $row['street2']; ?></td>
                  <td><?php echo $row['city']; ?></td>
                  <td><?php echo $row['mobile']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td class="action_area_btn">
          </td>
              </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>
