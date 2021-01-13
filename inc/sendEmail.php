<?php

// Replace this with your own email address
$mail_adresiniz	= 'mustafayukselresume@gmail.com';
$gidecek_adres	= 'mustafayukselresume@gmail.com';
$mail_sifreniz	= "mustafayuksel";
require("class.php");
$name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));
$email_body = "Yeni mesajınız var."."\nAyrıntıları:\nİsim: $name \n\nKonu: $subject \n\nE-mail: $email \n\nMesaj: $contact_message";
$mail = new PHPMail();
$mail->Host       = "smtp.gmail.com";
$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->Username   = $mail_adresiniz;
$mail->Password   = $mail_sifreniz;
$mail->IsSMTP();
$mail->AddAddress($gidecek_adres);
$mail->From       = $mail_adresiniz;
$mail->FromName   = $mail_adresiniz;
$mail->Subject    = "Siteden mesajınız var!";
$mail->Body       = $email_body;
$mail->AltBody    = "";


if(!$mail->Send()){
   echo "<html>\n";
   echo "<head>\n";
   echo "<meta http-equiv=\"Content-Language\" content=\"tr\">\n";
   echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">\n";
   echo "<meta name=\"Author\" content=\"Siteden mesajınız var\">\n";
   echo "<title> Siteden mesajınız var </title>\n";
   echo "</head>\n";
   echo "<body>\n";
   echo "<center>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "<font face=\"Verdana\" style=\"font-size: 8pt\"><b>[</b> <font color=\"#0000FF\">\n";
   echo "Mesajınız Gönderilirken bir hata oluştu. Sunucudan gelen cevap aşağıdaki gibidir:\n";
   echo "</font> <b>]</b></font>\n";
   echo "<br><font face=\"Verdana\" style=\"font-size: 8pt\"><b>[</b> <font color=\"#0000FF\">\n";
   echo "Hata: " . $mail->ErrorInfo;
   echo "</font> <b>]</b></font>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "</center>\n";
   echo "</body>\n";
   echo "</html>\n";
   exit;
}
echo "OK";
?>
  <?php
  ?>