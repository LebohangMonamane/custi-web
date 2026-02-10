<?php
$to = 'info@custi.africa';
$subject = 'Test Email';
$message = 'This is a test email from your website.';
$headers = "From: info@custi.africa\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully!";
} else {
    echo "Failed to send test email. Mail function may be disabled.";
}
?>
