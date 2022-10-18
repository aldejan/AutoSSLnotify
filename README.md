# AutoSSLnotify
## Esse é um complemento para o aldejan/acme e aldejan/AutoSSL

Para usar edite os arquivos config.php e os arquivos sslChecker.ini.php

## Instale o renovador de Certificados automaticos
#### NO CMD LOGADO NO SSH DO SITE:
1 = ``cd; cd www``

2 = ``git clone https://github.com/aldejan/AutoSSLnotify.git``

#### NO GERENCIADOR DE ARQUIVOS DO CPAINEL:
3 = edite o arquivo www/AutoSSLnotify/notify.php, coloque seu email(ou varios emails) e o dominio sem www.

4 = edite o arquivo www/AutoSSLnotify/sslChecker.ini.php, coloque seu dominio com www.

#### NO CPAINEL EDITE O CRON:

5 = crie esse comando  = 

``0	0	1	*	*	php -q /home/xxxxx/public_html/AutoSSLnotify/notify.php >/dev/null 2>&1``

