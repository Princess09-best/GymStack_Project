<?php
// Declare constant variables for database connection parameters
$servername = "localhost:3306";
$username = "root";
$password = "@StrateGicPlan20178##";
$database = "gym";

// Use mysqli connection method to connect to data base
$mysqli = new mysqli($servername, $username, $password, $database);

// Check if the connection worked. if not, log the error and display a message to the user
if ($mysqli->connect_error) {
    error_log("Connection failed: " . $mysqli->connect_error);
    die("Sorry, Connection could not be made at this time. Please try again later or check your code.");
}
?>
