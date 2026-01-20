<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    

    $to = 'anna@gamma-beratungen.ch';
    $subject = 'Neue Kontaktanfrage von ' . $name;
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    
    
    if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Nachricht erfolgreich gesendet!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Fehler beim Senden der Nachricht."); window.location.href="index.php";</script>';
    }
} else {
    header('Location: index.php');
}

