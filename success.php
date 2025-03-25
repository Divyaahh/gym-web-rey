<?php
session_start();

// Check if there's a success message to display
if (!isset($_SESSION['message']) || $_SESSION['message_type'] != "success") {
    header("Location: signup.html");
    exit();
}

$message = $_SESSION['message'];
$username = isset($_SESSION['registered_username']) ? $_SESSION['registered_username'] : "";

// Clear the session variables
unset($_SESSION['message']);
unset($_SESSION['message_type']);
unset($_SESSION['registered_username']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="success-message">
        <?php echo $message; ?>
    </div>
    
    <p>You can now login to access your account.</p>
    
    <a href="login.html" class="button">Go to Login</a>
</body>
</html>
