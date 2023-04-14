<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  
  <form class="form-inline" method="post">
  <label for="Firstname">First Name:</label>
    <input type="text" class="form-control" id="Firstname" placeholder="First name" name="first_name">
    <label for="Lastname">Last Name:</label>
    <input type="text" class="form-control" id="Lastname" placeholder="Last name" name="last_name">
    <label for="EmailAddress">Email Address:</label>
    <input type="text" class="form-control" id="EmailAddress" placeholder="Enter email" name="email">
    
    <input type="submit"  class="btn btn-primary" value ="Submit">
  </form>
</div>
<?php 
$mysqli = new mysqli("localhost", "root", "", "demo");
if ($mysqli == false){
    die("ERROR: Could not connect.".$mysqli->connect_error);
 }

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

if ($mysqli->query($sql) === true) {
    echo "Records inserted successfully.";
} else {
    echo "Could not able to execute $sql. " . $mysqli->error;
}

$mysqli->close();
?>

</body>
</html>
