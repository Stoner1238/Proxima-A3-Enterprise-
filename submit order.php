<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $plan = $_POST["plan"];
    $details = $_POST["details"];

    // Simple confirmation message (replace this with database storage or email)
    echo "<h2>Thank you, $name! Your order for $service ($plan) has been received.</h2>";
}
?>