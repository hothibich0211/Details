<?php
$mysqli = mysqli_connect("localhost","root","","model");
if ($mysqli == false){
   die("ERROR: Could not connect.".mysqli_connect_error());
}


$sql="CREATE TABLE categories(
   id INT (11)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255) NOT NULL
   )";

if ($mysqli->query($sql)==true){
   echo "Table created successfully.";
}
else{
   echo"ERROR: Could not able to execute $sql.". $mysqli->error;
}


$mysqli->close();
?>