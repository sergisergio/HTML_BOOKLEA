<?php

/*require_once('phpmailer/class.phpmailer.php');


$mail = new PHPMailer();
$mail->Host = 'auth.smtp.1and1.fr';
$mail->IsMail();
$mail->SMTPAuth   = false;
$mail->Port = 465; // Par défaut

$recipientemail = "contact@onfaitnotre.com"; // Your Email Address
$recipientname = "Léa & Elliott"; // Your Name

$name = htmlspecialchars(stripslashes($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$number = htmlspecialchars(stripslashes($_POST['number']));
$subject = htmlspecialchars(stripslashes($_POST['message']));



$message = 'NOM : '.$name.'<br />'.'Email : '.$email.'<br />'.'Numero : '.$number.'<br />'.'SUJET : '.$subject;

    //'<br />''email : '.$email.'<br />''numero : '.$number.'<br />''Sujet : '$subject;








// Expéditeur
$mail->SetFrom( $email , $name );
// Destinataire
$mail->AddAddress( $recipientemail , $recipientname );
// Objet
$mail->Subject = $subject;

// Votre message
$mail->MsgHTML( $message );

// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  echo 'Erreur : ' . $mail->ErrorInfo;
} elseif($_SERVER['HTTP_REFERER'] != 'http://onfaitnotre.com') {
  header('Location: http://onfaitnotre.com');
} else {
  echo 'Message envoyé !';
}

$blanc = '';*/


?>

