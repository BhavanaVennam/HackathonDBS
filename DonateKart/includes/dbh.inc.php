<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "donor";

// create connection
$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
// check connection
if($conn -> connect_error) {
    die("connection failed:".$conn->connect_error);
}