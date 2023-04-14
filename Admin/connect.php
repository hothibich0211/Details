<?php   $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "model";
  // Create connection
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
  } 
  ?>