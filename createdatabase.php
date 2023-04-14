<?php
$mysqli = new mysqli("localhost","root","");

 if ($mysqli == false){
    die("ERROR: Could not connect.".$mysqli->connect_error);
 }
 $sql = "CREATE DATABASE demo";
 if ($mysqli->query($sql)==true){
    echo "Database created successfully";
 }
 else{
    echo "ERROR: Could not able to execute $sql.".$mysqli->error;
 }


 $mysqli->close();
?>