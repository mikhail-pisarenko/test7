<?php
// Function to simulate payment processing
function process_payment($amount, $payment_token) {
    if ($payment_token === "valid_payment_token") {
        return "Payment of $" . $amount . " processed successfully!";
    } else {
        return "Payment failed. Invalid token.";
    }
}

// Call the function
echo process_payment(100, "your_payment_token_here");

// Secret: payment_token
$payment_token = "your_payment_token_here";
echo "\nPayment Token: " . $payment_token;
?>
