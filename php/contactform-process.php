<?php

$destinataire = 'khonvoh@gmail.com';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $_POST['email'];
$objet = 'Prise de contact de la part de '.$_POST['name']; // Objet du message
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
$message = $_POST['message'];
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé '.$expediteur;
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé".$expediteur;
}



// $from = $_POST['email'];

// $to = "khonvoh@gmail.com";

// $message = $_POST['message'];

// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// $headers .= 'From:' . $from . "\r\n";
// $headers .= 'Reply-to: ' . $to . "\r\n";
// $headers .= 'Return-path: NomEntreprise <adresse@example.net>' . "\r\n";

// $subject = 'Formulaire de Contact';


// if (mail($to,$subject, $message, $headers)) {
//     echo "L'email a été envoyé.";
// } else {
//     echo "email non envoyé.";
// }
