<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "texts"; // Adjust database name as per your setup

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch text1 and text2 from the database
$sql = "SELECT text1, text2 FROM text WHERE id = 1"; // Adjust query as per your database structure
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $text1 = $row['text1'];
    $text2 = $row['text2'];
} else {
    $text1 = ""; // Provide default text or handle error as needed
    $text2 = ""; // Provide default text or handle error as needed
}


// Connection to the pvb database
$pvb_dbname = "pvb";

$pvb_conn = new mysqli($servername, $username, $password, $pvb_dbname);

if ($pvb_conn->connect_error) {
  die("Connection to pvb database failed: " . $pvb_conn->connect_error);
}

// Connection to the voedselbank-users database
$voedselbankusers_dbname = "voedselbank-users";

$voedselbankusers_conn = new mysqli($servername, $username, $password, $voedselbankusers_dbname);

if ($voedselbankusers_conn->connect_error) {
  die("Connection to pvb database failed: " . $voedselbankusers_conn->connect_error);
}
?>

