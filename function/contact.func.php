<?php
    $name = $_POST['contactme-name'];
    $email = $_POST['contactme-mail'];
    $message = $_POST['contactme-message'];
    $subject = $_POST['contactme-subject'];

    $formcontent="Message de $name, \n$message";
    $recipient = "jonathan.triclin@gmail.com";
    $mail_subject = "Subjet : $subject";
    $headers = array(
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    //mail($recipient, $mail_subject, $formcontent, $headers) or die("Une erreur est survenue lors de l'envoi du message.");
    
    if (mail($recipient, $mail_subject, $formcontent, $headers)) 
    {
        header("Location: ./../function/success.func.php");
    } 
    else
    {
        header("Location: ./../function/error.func.php");
    }
?>