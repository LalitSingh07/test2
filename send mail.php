<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// require ('phpmailer/src/Exception.php');
// require ('phpmailer/src/PHPMailer.php');
// require ('phpmailer/src/SMTP.php');

// $mail = new PHPMailer(true);

// $mail->isSMTP();
// $mail->SMTPDebug =  SMTP::DEBUG_SERVER; 
// $mail->Host = gethostbyname('smtp.gmail.com');
// $mail->SMTPAuth = true;
// $mail->Username = 'freetrickster03@gmail.com'; //  gmail
// $mail->Password = 'vexbqjopwlmmkixi'; //  gmail app password
// $mail->SMTPSecure = 'ssl';
// $mail->Port = 587;
// $mail->setFrom('freetrickster03@gmail.com'); //  gmail
// $mail->addAddress('lalitsingh99275910@gmail.com');
// $mail->isHTML (true);
// $mail->Subject = "bfgbfgbfg";
// $mail->Body = "fdvfdvf";
// $mail->send();
// echo
// "<script>
// alert('Sent Successfully');
// document.location.href = 'index.php';
// </script>"; 





$to="freetrickster03@gmail.com";
$subject = 'test mail';
$message = 'hello this is a test mail only';
$headers = 'From:freetrickster03@gmail.com';
if(!mail($to, $subject, $message, $headers)){
   
    echo 'failed';
}

else{
    echo '<h1>E-mail sent successfully</h1>';
}



?>