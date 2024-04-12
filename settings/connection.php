<?php
// Declare constant variables to store the database connection parameters
$HOST = 'localhost'; 
$USERNAME = 'root';
$PASSWORD = '';
$NAME =  'learn';


$conn = new mysqli($HOST, $USERNAME, $PASSWORD, $NAME);

// Check if connection is succJessful
if ($conn->connect_error) {
    // If connection fails, throw an exception with the error message
    throw new Exception("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $e->getMessage());
} else {
    // If connection is successful, display success message
}
?>