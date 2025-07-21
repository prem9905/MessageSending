<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);
  $date = date("Y-m-d H:i:s");

  $entry = "[$date] Name: $name | Email: $email\nMessage: $message\n\n";

  // Save to a file
  file_put_contents("messages.txt", $entry, FILE_APPEND);

  // Redirect back to form with success message (optional)
  echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
}
?>
