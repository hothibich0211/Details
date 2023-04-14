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