<?php

$email_error = "";
$email = $message = "";

if (isset($_POST['sendEmail'])) {
      unset($_POST['sendEmail']);
    if (empty($_POST['email'])) {
        $email_error = "Email is required";
    } else {
        $email = ($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = 'Invalid email format';
        }
    }

    if (empty($_POST['message'])) {
          $message = "";
    } else {
        $message = ($_POST['message']);
    }
}
