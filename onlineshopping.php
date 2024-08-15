<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "onlineshopping";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['confirm_password'])) {
        $name = htmlspecialchars($_GET['name']);
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);
        $confirm_password = htmlspecialchars($_GET['confirm_password']);
        $phone = htmlspecialchars($_GET['phone']);
        $gender = htmlspecialchars($_GET['gender']);
        $address = htmlspecialchars($_GET['address']);

        // Add registration logic here, e.g., storing in a database
        echo "Registration successful for: $name";

    // Handle the Login Form
    } elseif (isset($_GET['email']) && isset($_GET['password'])) {
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);

        // Add login logic here, e.g., validating credentials
        echo "Login successful for: $email";

    // Handle the Payment Form
    } elseif (isset($_GET['card_number']) && isset($_GET['expiry_date']) && isset($_GET['cvv']) && isset($_GET['name_on_card'])) {
        $card_number = htmlspecialchars($_GET['card_number']);
        $expiry_date = htmlspecialchars($_GET['expiry_date']);
        $cvv = htmlspecialchars($_GET['cvv']);
        $name_on_card = htmlspecialchars($_GET['name_on_card']);

        // Add payment processing logic here
        echo "Payment processed for: $name_on_card";

    // Handle the Feedback Form
    } elseif (isset($_GET['feedback'])) {
        $name = htmlspecialchars($_GET['name']);
        $email = htmlspecialchars($_GET['email']);
        $feedback = htmlspecialchars($_GET['feedback']);

        // Add feedback processing logic here
        echo "Feedback submitted. Thank you, $name!";
    }
}
?>
