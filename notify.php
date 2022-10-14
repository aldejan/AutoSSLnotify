<?php
  include "config.php";

  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = "Seu SSL foi Renovado Automaticamente!";
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "Ola Admin<br /><br />
  Parabens! seus Certificados SSLs do site ".$site." foram renovados automaticamentes.<br />
  Verifique esse linck <a target='_black' href='https://".$site."/AutoSSLnotify/sslChecker.php'>https://".$site."/AutoSSLnotify/sslChecker.php</a> para ver se a açao realmente aconteceu.<br /><br />
 For more information access ".$site."";

//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: Auto SSL ".$site." <autossl@".$site.">\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <autossl@".$site.">\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <autossl@".$site."\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
  ?>
  <center>
      <br><br><br><br><br>
      Foi enviada uma notificaçao para voce por email.
  </center>
