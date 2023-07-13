<?php
    $to      = 'anaisplata@gmail.com';
    $subject = 'New Appointment Inquiry';
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone =  $_POST['phone'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message']. "\n\n Phone Number: " $phone. ;
    $headers = 'From: noreply@anaisplata.com'       . "\r\n" .
                 'Reply-To: noreply@anaisplata.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>