<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_GET["d"]) && isset($_GET["a"])){
    $sql = "INSERT INTO sensor_data(d_sensor, a_sensor) VALUES ($_GET[d], $_GET[a])";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>