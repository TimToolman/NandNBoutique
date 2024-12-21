<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $quantity = htmlspecialchars($_POST['quantity']);

    $to = "orders@mysite.com";
    $subject = "New Order from $name";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nQuantity: $quantity";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Order successfully sent!";
    } else {
        echo "Failed to send order.";
    }
}
?>
