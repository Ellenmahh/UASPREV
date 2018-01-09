<?php
$headers = 'From: webmaster@yourdomain.com' . "\r\n" .
   'Reply-To: webmaster@yourdomain.com';
  $nome = $_POST['name'];
  $email= $_POST['email'];
  $mensagem= $_POST['comment'];
  $assunto= $_POST['assunto'];

  $to = "elnmah@hotmail.com";
  
 mail($to,$nome,$mensagem,$assunto,$headers);

//header('location:contact_page.php')
?>