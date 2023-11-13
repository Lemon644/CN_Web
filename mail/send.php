<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <body>
    <form>
        <input type="submit" name="send">
    </form>
<?php

    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "hoangbaovy0605@gmail.com";
    $mail->Password = "guafgphegkqfmedl";
    $mail->SetFrom("hoangbaovy0605@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "hello HMinhh";
    $mail->AddAddress("minhht.22itb@vku.udn.vn");//mail và tên ng nhận 

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
 ?>
   </body> 
</body>
</html>