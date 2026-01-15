<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you would typically send an email or save to database
    // For this example, we'll just display a thank you message

    echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>Merci - Tech Solutions</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <div class='container' style='text-align: center; padding: 4rem 0;'>
        <h1>Merci, $name !</h1>
        <p>Votre message a été envoyé avec succès. Nous vous contacterons bientôt.</p>
        <a href='index.php' class='btn'>Retour à l'accueil</a>
    </div>
</body>
</html>";
} else {
    header("Location: index.php");
    exit();
}
?>