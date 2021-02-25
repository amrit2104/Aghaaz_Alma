<?php

$servername = "alma18";
$username = "alma18int";
$password = "teamAlma@18";
$dbname = "alma18int";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE DATABASE alma";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


$sql = "CREATE TABLE registration (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL UNIQUE,
Roll VARCHAR(50) UNIQUE,
phone VARCHAR(50),
Team1 VARCHAR(50),
Team2 VARCHAR(50),
EAA VARCHAR(25),
why_teams VARCHAR(500),
why_alma VARCHAR(500)
)";

if($conn->query($sql)===TRUE){
	echo "table registration created";
}
else{
	echo "Error creating table: ". $conn->error;
}
$conn->close();
?>