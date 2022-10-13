<?php
  //1 – Definimos Para quem vai ser enviado o email
  $para1 = "seuemail@gmail.com";
  $site = "seudominio.com";

  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto1 = "Seu SSL foi Renovado Automaticamente!";
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem1 = "Ola Admin<br /><br />
  Parabens! seus Certificados SSLs do site ".$site." foram renovados automaticamentes.<br />
  Verifique no cpainel se a açao ocorreu como esperado.<br /><br />
 For more information access ".$site."";

//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers1 =  "Content-Type:text/html; charset=UTF-8\n";
  $headers1 .= "From: Auto SSL ".$site." <autossl@".$site.">\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers1 .= "X-Sender:  <autossl@".$site.">\n"; //email do servidor //que enviou
  $headers1 .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers1 .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers1 .= "Return-Path:  <autossl@".$site."\n"; //caso a msg //seja respondida vai para  este email.
  $headers1 .= "MIME-Version: 1.0\n";

mail($para1, $assunto1, $mensagem1, $headers1);  //função que faz o envio do email.
  ?>
  <center>
      <br><br><br><br><br>
      Foi enviada uma notificaçao para voce por email.
  </center>
