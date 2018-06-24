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

$sql = "SELECT id, d_sensor, a_sensor, log_time FROM sensor_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " | Digital Sensor: " . $row["d_sensor"]. " | Analog Sensor: " . $row["a_sensor"]. " | Time: " . $row["log_time"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>