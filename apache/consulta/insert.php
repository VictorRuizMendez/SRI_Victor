<?php
$servername = "mysql";
$username = "frodo";
$password = "bolson";
$dbname = "lamp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO SRI (firstname, lastname, email)
VALUES ('Victor', 'Ruiz', 'S&S@ENJOYER.com')";

if (mysqli_query($conn, $sql)) {
    echo "Datos insertados con exito";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>