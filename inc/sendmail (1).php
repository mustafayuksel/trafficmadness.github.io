<?php 
if(empty($_POST['name'])  || 
   empty($_POST['email']) ||  empty($_POST['phone']) || 
   empty($_POST['message']))
{
    echo $errors .= "\n Hata: Tüm alanlar doldurulmalıdır";
}
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$phone = $_POST['phone']; 
/////////////////DIKKAT-DIKKAT/////////////////////////////
//ALTTAKi BOLUME MAiL ADRESiNiZ VE MAiL SiFRENiZi YAZINIZ//
///////////////////////////////////////////////////////////
$email_body = "Yeni mesajınız var."."\nAyrıntıları:\nİsim: $name \n\nTelefon: $phone \n\nE-mail: $email_address \n\nMesaj: $message";
$mail_adresiniz	= "yemtasyemgida@gmail.com";
$mail_sifreniz	= "yemtasyem";
$gidecek_adres	= "yemtasyemgida@gmail.com";
$domain_adresi	= "gmail.com";	//www olmadan yazýnýz

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////


require("class.php");
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
$mail->Subject    = "Yemtas.net websitesinden mesajınız var";
$mail->Body       = $email_body;
$mail->AltBody    = "";

if(!$mail->Send()){
   echo "<html>\n";
   echo "<head>\n";
   echo "<meta http-equiv=\"Content-Language\" content=\"tr\">\n";
   echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">\n";
   echo "<meta name=\"Author\" content=\"Yemtaş Yem\">\n";
   echo "<title> Yemtaş Yem </title>\n";
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

   echo "<html>\n";
   echo "<head>\n";
   echo "<meta http-equiv=\"Content-Language\" content=\"tr\">\n";
   echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1254\">\n";
   echo "<meta name=\"Author\" content=\"Yemtaş Yem\">\n";
   echo "<title> Yemtaş Yem </title>\n";
   echo "</head>\n";
   echo "<body>\n";
   echo "<center>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "<font face=\"Verdana\" style=\"font-size: 8pt\"><b>[</b> <font color=\"#0000FF\">\n";
   echo "Mesajınız Gönderilmiştir.\n";
   echo "</font> <b>]</b></font>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "</center>\n";
   echo "</body>\n";
   echo "</html>\n";
?>
  <?php
  ?>
  <div class="container">
         <div class="gt_hdg_1 default_width" align="center">
            <a href="../index.php"><?php echo "Anasayfaya Dön" ?></a>
        </div>
   </div>