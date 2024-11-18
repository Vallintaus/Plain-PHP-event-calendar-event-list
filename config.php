<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// create connection
const CONN = new mysqli($servername, $username, $password, $dbname);

// check connection
if (CONN->connect_error) {
    die("Connection failed: " . CONN->connect_error);
}
?>