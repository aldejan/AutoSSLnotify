<?php
  include "config.php";

  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = "Verifique seus Certificados SSLs!";
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "Ola Admin<br /><br />
  Verifique se seus Certificados SSLs foram Renovados.<br />
  Acesse esse link <a target='_black' href='https://".$site."/AutoSSLnotify/sslChecker.php'>https://".$site."/AutoSSLnotify/sslChecker.php</a> para ver se a açao realmente aconteceu.<br /><br />
 Este Email e enviado automaticamente todo Mes";

//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: AutoSSL <".$remetente.">\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <".$remetente.">\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <".$remetente."\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
  ?>
  <center>
      <br><br><br><br><br>
      Foi enviada uma notificaçao para voce por email.
  </center>
