<?php

$server = "localhost";
$user = "root";
$dbpassword = "";
$database = "binit";  
//open data connection 
$con = mysqli_connect($server,$user,$dbpassword,$database);
//return $con;
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  
  ?>