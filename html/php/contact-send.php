<?php

require_once('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();
$mail->Host = 'auth.smtp.1and1.fr';
$mail->IsMail();
$mail->SMTPAuth   = false;
$mail->Port = 465; // Par défaut

if( $_POST['name'] != '' AND $_POST['email'] != '' AND $_POST['number'] != '' AND $_POST['message'] ) { 
		
	$recipientemail = "contact@onfaitnotre.com"; // Your Email Address
	$recipientname = "Léa&Elliott"; // Your Name
	
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$number = stripslashes($_POST['number']);
	$subject = stripslashes($_POST['message']);
	$check = $_POST['form-check'];
			
	$custom = $_POST['fields'];
	$custom = explode(',', $custom);
    
    $message = 'NOM : '.$name.'<br />'.'Email : '.$email.'<br />'.'Numero : '.$number.'<br />'.'SUJET : '.$subject;
	
	$message_addition = '';
	foreach ($custom as $c) {
		if ($c !== 'name' && $c !== 'email' && $c !== 'number' && $c !== 'message') {
			$message_addition .= '<b>'.$c.'</b>: '.$_POST[$c].'<br />';
		}
	}
	
	if ($message_addition !== '') {
		$message = $message.'<br /><br />'.$message_addition;
	}
	
	if ($check == '') {
	
		$mail->SetFrom( $email , $name );
		$mail->AddReplyTo( $email , $name );
		$mail->AddAddress( $recipientemail , $recipientname );
		$mail->Subject = $subject;
		
		$mail->MsgHTML( $message );
		$sendEmail = $mail->Send();
		
		if( $sendEmail == true ) {
			echo '	<div class="alert-confirm">
						<p>Message envoyé</p>
					</div>';
		} else {
			echo '	<div class="alert-error">
						<p>Email could not be sent due to some Unexpected Error</p>
						<p>Reason: ' . $mail->ErrorInfo . '</p>
					</div>';
		}
	
	}
			
}
?>