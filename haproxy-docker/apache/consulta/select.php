<?php
$servername = "mysql";
$username = "frodo";
$password = "bolson";
$dbname = "lamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM SRI";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
