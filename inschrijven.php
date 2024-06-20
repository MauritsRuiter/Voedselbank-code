<?php

include_once('connect.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($voedselbankusers_conn, $_POST['name']);
    $surname = mysqli_real_escape_string($voedselbankusers_conn, $_POST['surname']);
    $email = mysqli_real_escape_string($voedselbankusers_conn, $_POST['email']);
    $street = mysqli_real_escape_string($voedselbankusers_conn, $_POST['street']);
    $postalzip = mysqli_real_escape_string($voedselbankusers_conn, $_POST['postalzip']);
    $housenr = mysqli_real_escape_string($voedselbankusers_conn, $_POST['housenr']);
    $housenradd = mysqli_real_escape_string($voedselbankusers_conn, $_POST['housenradd']);

    // Insert user data into voedselbank-users table
    $sql = "INSERT INTO userinfo (name, surname, email, street, postalzip, housenr, housenradd, datetime)
            VALUES ('$name', '$surname', '$email', '$street', '$postalzip', '$housenr', '$housenradd', NOW())";

    if (mysqli_query($voedselbankusers_conn, $sql)) {
        echo "New record created successfully";
        // Optionally, you can redirect the user to a success page or perform other actions here
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($voedselbankusers_conn);
    }
    header("Location: success.php");
    exit();
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
        <p class="tc" id="heading">U komt in aanmerking tot voedselbankhulp</p>
        <p class="tc">Als u de gegevens correct in heeft gevuld, heeft u volgens onze data recht op voedselbankhulp.</p>
        <div id="content">
            <form class="tc" action="inschrijven.php" method="post">
                <div class="form-group">
                    <label class="question" for="name">Naam:</label>
                    <input class="inputfw" type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label class="question" for="surname">Achternaam:</label>
                    <input class="inputfw" type="text" id="surname" name="surname" required>
                </div>
                <div class="form-group">
                    <label class="question" for="email">Email:</label>
                    <input class="inputfw" type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label class="question" for="street">Straat:</label>
                    <input class="inputfw" type="text" id="street" name="street" required>
                </div>
                <div class="form-group">
                    <label class="question" for="postalzip">Postcode:</label>
                    <input class="inputfw" type="text" id="postalzip" name="postalzip" required>
                </div>
                <div class="form-group">
                    <label class="question" for="housenr">Huisnummer:</label>
                    <input class="inputfw" type="text" name="housenr" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" required>
                </div>
                <div class="form-group">
                    <label for="housenradd">Huisnummer toev.:</label>
                    <input style="margin-bottom: 20px;" class="inputfw" type="text" id="housenradd" name="housenradd">
                </div>
                <button class="primary-btn" type="submit">Opsturen</button>
            </form>
        </div>

        <div style="margin-bottom: 2px;" class="question">Een verplicht veld is aangegeven met:</div>
    </main>
    <footer><img src="./public/img/Picture1.png" alt="logo" /></footer>
    <div id="subfooter"></div>
</body>

</html>