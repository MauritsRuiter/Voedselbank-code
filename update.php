<?php
$dbname = "texts";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];

    // Update the text in the database
    $sql = "UPDATE text SET text1 = ?, text2 = ? WHERE id = 1"; // Assuming you're updating the row with id = 1
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $text1, $text2);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Update Confirmation</title>
</head>

<body class="tc">
    <header>
    <div><img src="./public/img/Picture3.png" alt="logo" /></div>
    <div><img src="./public/img/Picture2.png" alt="nav" /></div>
  </header>
  <p style="margin-top: 100px;" id="heading">Teksten geupdate!</p>
    <a href="insert.php">Go back to insert</a>
    <br><br>
    <a href="index.php">Go back to index</a>
</body>

</html>