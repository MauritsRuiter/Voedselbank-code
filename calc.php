<?php

include_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data (example fields, adjust as per your form)
    $household_members = intval($_POST['household_members']);
    $net_income = floatval($_POST['net_income']);
    $other_income = floatval($_POST['other_income']);
    $fixed_expenses = floatval($_POST['fixed_expenses']);
    $other_expenses = floatval($_POST['other_expenses']);

    // Calculate budget (example calculation, adjust as per your needs)
    $budget = ($net_income + $other_income) - ($fixed_expenses + $other_expenses);

    // Fetch normbedrag from pvb database
    $normbedrag = 0; // Default value
    $sql = "SELECT normbedrag FROM normbedragen WHERE aantal_leden = ?";
    $stmt = $pvb_conn->prepare($sql);
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($pvb_conn->error));
    }
    $stmt->bind_param("i", $household_members);
    $stmt->execute();
    $stmt->bind_result($normbedrag);
    $stmt->fetch();
    $stmt->close();

    // Compare budget with normbedrag and redirect based on result
    if ($budget > $normbedrag) {
        header("Location: inschrijven.php");
        exit();
    } else {
        header("Location: helaas.php");
        exit();
    }
} else {
    echo "Invalid request method.";
}

// Close connections at the end
// $texts_conn->close();
?>
