<?php
$mysqli = mysqli_connect("localhost","root","","demo");
if ($mysqli == false){
   die("ERROR: Could not connect.".mysqli_connect_error());
}

$sql= "CREATE TABLE prd(
   id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   image VARCHAR(1000) NOT NULL,
   name  VARCHAR(50) NOT NULL,
   price VARCHAR(70) NOT NULL,
   des VARCHAR(1000) NOT NULL
)";

if ($mysqli->query($sql)==true){
   echo "Table created successfully.";
}
else{
   echo"ERROR: Could not able to execute $sql.". $mysqli->error;
}


$mysqli->close();
?>