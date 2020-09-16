<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
        require 'admin/em/vendor/autoload.php';
		$msg = '';

	
	$mail = new PHPMailer;
    $mail->SMTPDebug = 1;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'anamariadanila96@gmail.com';                    
    $mail->Password   = '15iulie1998eu';                            
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;                                   
	$mail->setFrom('anamariadanila96@gmail.com', 'CONTACT');
	$mail->addAddress('anamariadanila96@gmail.com');     // Add a recipient
  /*  $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    // Content
	if ($mail->addReplyTo($_POST['email'], $_POST['name'])) 
	{
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact form';
        
      $mail->Body = <<<EOT
Name: {$_POST['name']}	<br>	
Email: {$_POST['email']}<br>
Subject: {$_POST['subject']}<br>
Message: {$_POST['message']}<br>
EOT;
        
        if (!$mail->send()) 
        {
            
            echo 'Mesajul nu a fost trimis!';
        } 
		else 
		{
            echo 'Mesaj trimis';
        }
    } 
	else 
	{
         echo 'Adresa de email incorecta!';
    }


?>

<br>

</body>
</html>