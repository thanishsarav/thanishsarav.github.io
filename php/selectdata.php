<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, username, password  FROM users ORDER BY password";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        var_dump($row);
        echo "id: " . $row["id"]. " - Name: " . $row["username"]."-".  $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>