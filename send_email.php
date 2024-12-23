<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $cc = $_POST['cc'];

    $to = $email;
    $subject = "Order Confirmation";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nProduct: $product\nSize: $size\nQuantity: $quantity";
    $headers = "From: no-reply@nandnboutique.com\r\n";
    $headers .= "CC: $cc\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Order sent successfully!";
    } else {
        echo "Failed to send order.";
    }
}
?>
