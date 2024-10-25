<?php
session_start();
// Importer les classes PHPMailer dans l'espace global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Charger PHPMailer (chemin correct vers PHPMailer)
require_once 'PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';

// Vérification si le formulaire a bien été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et validation des données du formulaire
    $clientName = htmlspecialchars(trim($_POST['name']));
    $clientEmail = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $clientMessage = htmlspecialchars(trim($_POST['message']));

    // Vérifier si l'e-mail est valide
    if (!$clientEmail) {
        die("L'adresse e-mail n'est pas valide.");
    }

    // Créer une instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'y.merad.inf@lagh-univ.dz';           // Votre adresse Gmail
        $mail->Password   = 'fxua bfmq iktv uoau'; // Mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Expéditeur et destinataire
        $mail->setFrom($clientEmail, $clientName);             // Utiliser l'adresse e-mail du client
        $mail->addAddress('zakimerad745@gmail.com');           // Votre adresse pour recevoir les messages

        // Contenu de l'e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de votre portfolio';
        $mail->Body    = "<p>Message de : <strong>$clientName</strong> ($clientEmail)</p><p>Message :</p><p>$clientMessage</p>";
        $mail->AltBody = "Message de : $clientName ($clientEmail)\n\nMessage :\n$clientMessage";

        // Envoi de l'e-mail
        $mail->send();
        echo "<h1>Votre message a été envoyé avec succès.</h1>";
        header('Location: index.php#Contact');
        exit();
        
    } catch (Exception $e) {
        echo "<h3>Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}</h3>";
        header('Location: index.php#Contact');
        exit();
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}

?>
