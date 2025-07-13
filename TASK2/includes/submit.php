<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (empty($name) || empty($email) || empty($message)) {
        header("Location: ../contact.php");
        exit;
    }
    else{
      echo '<!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <title>Contact Result</title>
        <script src="https://cdn.tailwindcss.com"></script>
      </head>
      <body class="bg-gray-100 p-8">
        <h1 class="text-blue-600 text-2xl font-semibold mb-4">Thank you ' . $name . '</h1>
        <p class="text-green-700 text-lg font-semibold mb-2">Email: ' . $email . '</p>
        <p class="text-black text-md font-semibold mb-2">Message:'. $message.'</p>
      </body>
      </html>';
  }
    }
 else {
    header("Location: ../contact.php");
    exit;
}
?>

