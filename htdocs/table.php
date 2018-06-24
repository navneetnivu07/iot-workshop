
<style>
table, th, td {
    border: 1px solid black;
}
</style>

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
    echo "<table style='width:100%'>
    <tr>
      <th>Id</th>
      <th>Digital Sensor</th> 
      <th>Analog Sensor</th>
      <th>Time</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["d_sensor"]. "</td><td>" . $row["a_sensor"]. "</td><td>" . $row["log_time"]. "</td><tr>";
    }
    echo "<table>";
} else {
    echo "0 results";
}
$conn->close();
?>