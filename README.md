# Horas-trabalhadas

Iniciando

Spa Cálculo de Horas trabalhadas: saiba quantas horas foram trabalhadas no período diurno e quantidade de horas trabahadas no periodo noturno, respeitando as regras da legislação brasileira.


Pré-Requisitos
Instalar Wamp64: php, mysql 
Instalar o composer
Instalar Framework Laravel 

Instalação:

Instalar o wamp64
Inicie o serviço wamp64 após instalação.

Instalar o composer 
Após essas duas primeiras instalações entre apague o conteúdo da pasta c:\wamp64\www
entre no cmd dentro dessa pasta instale o Laravel

Executando Testes

Somente PHP 
 https://127.0.0.1/horastrabalhadas
 
Template incompleto do Laravel 
Com Laravel já instalado pelo powershel iniciar serviço:
c:\wamp64\www: php artisan serve 

No Navegador digite: 
https://127.0.0.1/spahoras (ainda falta o link com funções do index.php da pasta horas trabalhadas) 


Configurações .env

APP_NAME=HorasTrabalhadas
APP_ENV=local
APP_KEY=base64:h+3qVZXh0YnKB76jpBnoBKJxr3LOYf10KujeAK+zpBQ=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=horario
DB_USERNAME=root
DB_PASSWORD=
