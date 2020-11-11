<?php
$servername = "localhost";
$username = "root";
$password = "zantet";
$dbname = "photoconn";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo "Connected successfully. <br>";

// $sql = "SELECT username, firstname, lastname FROM users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "Username: " . $row["username"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
?>
