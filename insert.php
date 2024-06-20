<?php
include_once('connect.php');

// Handle form submission to update text1 and text2
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_text1 = $_POST['text1'];
    $new_text2 = $_POST['text2'];

    // Example: Update the texts in the database
    $update_sql = "UPDATE text SET text1 = '$new_text1', text2 = '$new_text2' WHERE id = 1"; // Adjust query as per your database structure

    if ($conn->query($update_sql) === TRUE) {
        echo "Texts updated successfully";
        // Optionally, redirect the user or show a success message
    } else {
        echo "Error updating texts: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Voedselbank hulp tool</title>
</head>
<body>
  <header>
    <div><img src="./public/img/Picture3.png" alt="logo" /></div>
    <div><img src="./public/img/Picture2.png" alt="nav" /></div>
  </header>
  <main>
    <img src="./public/img/" alt="" />
    <p class="tc" id="heading">Update teksten</p>
    <div id="content">
      <form class="tc" action="insert.php" method="POST">
        <label style="vertical-align: top;" for="text1">Edit tekst 1: (500 characters max!)</label>
        <textarea name="text1" id="text1" cols="50" rows="15"><?php echo htmlspecialchars($text1); ?></textarea><br><br>
        <label style="vertical-align: top;" for="text2">Edit tekst 2: (500 characters max!)</label>
        <textarea name="text2" id="text2" cols="50" rows="15"><?php echo htmlspecialchars($text2); ?></textarea><br>
        <button class="primary-btn" type="submit">Save Changes</button>
      </form>
    </div>
  </main>
  <footer><img src="./public/img/Picture1.png" alt="logo" /></footer>
  <div id="subfooter"></div>
</body>
</html>
