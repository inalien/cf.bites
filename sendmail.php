<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));

    // Specify your email here
    $recipient = "support@cfbites.com";

    // Email subject
    $subject = "New contact from (cfbites.com) $name";

    // Email body content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    mail($recipient, $subject, $email_content, $email_headers);

    // Redirect to a thank-you page or back to the form page with a success message
    header("Location: contact.html?mailsend");
}
?>
