<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user_register"];
    $password = $_POST["user_pwd"];
    $confirm_password = $_POST["confirm_password"];

    // Ελέγχουμε αν οι κωδικοί πρόσβασης ταιριάζουν
    if ($password !== $confirm_password) {
        echo "Οι κωδικοί πρόσβασης δεν ταιριάζουν. Παρακαλώ προσπαθήστε ξανά.";
        exit;
    } else {
        // Οι κωδικοί πρόσβασης ταιριάζουν, μπορείτε να συνεχίσετε την επεξεργασία της φόρμας
        // Εδώ θα πρέπει να προσθέσετε τον κώδικα για την εισαγωγή των δεδομένων στη βάση δεδομένων
    }
} else {
    header("Location: register_form.php");
    exit;
}
?>
