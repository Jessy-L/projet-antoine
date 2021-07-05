<?php 

    $to      = $_GET['POST'];
    $subject = 'Confirmation';
    $message = 'Bonjour !';
    $headers = 'Je confirme la confirmation';

    mail($to, $subject, $message, $headers);

    header('Location: http://127.0.0.1:5500/');

?>

