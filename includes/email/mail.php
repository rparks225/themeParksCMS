<?php
$a = '/dankVision';
require_once $_SERVER['DOCUMENT_ROOT'].''.$a.'/includes/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].''.$a.'/includes/settings.php';

$mail = new PHPMailer;

$vars = array('id', 'sName', 'sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $emailHost;  // Specify main and backup SMTP servers
$mail->SMTPAuth = $emailAuth;                               // Enable SMTP authentication
$mail->Username = $emailUser;                 // SMTP username
$mail->Password = $emailPass;                           // SMTP password
$mail->SMTPSecure = $emailEnc;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = $emailPort;                                    // TCP port to connect to

$mail->setFrom($emailFrom, $emailName);
$mail->addAddress($emailAdd);     // Add a recipient
$mail->addAddress('sandrockc225@aol.com');               // Name is optional
$mail->addReplyTo($emailReply, 'Information');
$mail->isHTML(true);                                  // Set email format to HTML

//Not needed
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

if ($_POST["op"] == 'send'){

if(isset($response) && $response != '' && ($_POST["op"]=="send")){ 
if (preg_match("/http/i", "$name")) {echo "$SpamErrorMessage"; exit();} 
			if (preg_match("/http/i", "$email")) {echo "$SpamErrorMessage"; exit();} 
			//if (preg_match("/http/i", "$zip")) {echo "$SpamErrorMessage"; exit();} 
			
			// Patterm match search to strip out the invalid charcaters, this prevents the mail injection spammer 
			  $pattern = '/(;|\||`|>|<|&|^|"|'."\n|\r|'".'|{|}|[|]|\)|\()/i'; // build the pattern match string 
										
			  $name = preg_replace($pattern, "", $name); 
			  $email = preg_replace($pattern, "", $email); 
			  //$message = preg_replace($pattern, "", $zip); 
			
			// Check for the injected headers from the spammer attempt 
			// This will replace the injection attempt text with the string you have set in the above config section
			  $find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i"); 
			  $email = preg_replace($find, "$SpamReplaceText", $email); 
			  $name = preg_replace($find, "$SpamReplaceText", $name); 
			  //$message = preg_replace($find, "$SpamReplaceText", $zip); 
			  
			// Check to see if the fields contain any content we want to ban
			 if(stristr($name, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
			 if(stristr($zip, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
			 
			 // Do a check on the send email and subject text
			 if(stristr($sendto, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
			 if(stristr($subject, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
		//get all of fields

 $mail->Subject = $eReplyTitle;
 $mail->Body    = '<strong>Name:</strong> '.$name.'<br><br>
				   <strong>Email:</strong> '.$email.'<br><br>
				   <strong>Address:</strong> '.$address.'<br><br>
				   <strong>Zip:</strong> '.$zip.'<br><br>
				   <strong>Comment:</strong> '.$comment.'';
 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	
	} else { 
	
		$msg1 = "<p id='form-msg' class='bg-success' style='padding:20px;'>
		Thank you for your interest in <b>{$sName}</b>. We'll be contacting you shortly.
		<p>";
		$sent = true;
        header('Location: '.$sUrl.'Contact#form-msg');	
		}
	  
	}else{
		
		$msg1 = "<p id='form-msg' class='bg-danger' style='padding:20px;'>
		An error occured, Please reload the page, fill out the required fields, and confirm the captcha.
		<p>";
		
		}
}else{
		
		$captcha = '<div class="cap" style="display:none;">
			<div class="g-recaptcha" data-theme="dark" data-sitekey="'.$sCaptcha.'"></div>
		</div>';
		
	};
